<?php

namespace App\Http\Controllers;
use App\Mail\NewSeatReservationNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\SeatReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
class SeatReservationController extends Controller
{
    public function index()
    {
        $SeatReservation = SeatReservation::with('schedule.project', 'schedule.bus')->orderBy('id', 'DESC')->get();
        $schedules = Schedule::with(['project', 'bus'])
        ->get()
        ->map(function ($schedule) {
            $schedule->reservedSeats = SeatReservation::where('schedule_id', $schedule->id)->pluck('seat_number')->toArray();
            return $schedule;
        });

        return view("SeatReservation.SeatReservation", compact("SeatReservation","schedules"));
    }
    public function seatMap($schedule_id)
    {
        $selectedSchedule = Schedule::with('bus', 'project')->findOrFail($schedule_id);

        // Obtener asientos ya reservados para ese viaje
        $reservedSeats = SeatReservation::where('schedule_id', $schedule_id)->pluck('seat_number')->toArray();

        return view('SeatReservation.SeatReservation', [
            'selectedSchedule' => $selectedSchedule,
            'reservedSeats' => $reservedSeats
        ]);
    }


    public function create()
    {
        $SeatReservation = SeatReservation::with('schedule.project', 'schedule.bus')
            ->orderBy('id', 'DESC')
            ->get();

        Log::info('Listado de reservas', ['data' => $SeatReservation]);

        return view("SeatReservation.SeatReservationtable", compact('SeatReservation'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'schedule_id'    => 'required|exists:schedules,id',
            'seat_number'    => 'required|integer|min:1',
            'customer_name'  => 'required|string|max:255',
            'email'          => 'nullable|email|max:255',
            'photo'          => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5048',
        ]);

        Log::info('📥 Datos recibidos para reserva (admin)', $request->only([
            'schedule_id', 'seat_number', 'customer_name', 'dni', 'phone', 'email'
        ]));

        $validate = SeatReservation::where('schedule_id', $request->schedule_id)
            ->where('seat_number', $request->seat_number)
            ->first();

        if ($validate) {
            Log::warning("❌ Asiento ya reservado (admin)", [
                'schedule_id' => $request->schedule_id,
                'seat_number' => $request->seat_number,
                'user_id'     => Auth::id()
            ]);

            return abort(500, 'El asiento ya ha sido reservado');
        }

        try {
            $reservation = new SeatReservation();
            $reservation->schedule_id    = $request->schedule_id;
            $reservation->seat_number    = $request->seat_number;
            $reservation->customer_name  = $request->customer_name;
            $reservation->dni            = $request->dni;
            $reservation->phone          = $request->phone;
            $reservation->email          = $request->email ?? null;
            $reservation->detail          = $request->detail ?? null;
            $reservation->user_id        = Auth::id();

            if ($request->hasFile('photo')) {
                $reservation->file = fileStore($request->file('photo'), "resource");
                Log::info("📎 Foto cargada (admin)", ['path' => $reservation->file]);
            }

            $reservation->save();

            Log::info("✅ Asiento reservado correctamente (admin)", [
                'reservation_id' => $reservation->id,
                'schedule_id'    => $reservation->schedule_id,
                'seat_number'    => $reservation->seat_number,
                'user_id'        => Auth::id()
            ]);

            // Opcional: notificar por correo si email fue ingresado
            if ($request->filled('email')) {
                Mail::to($request->email)
                    ->bcc('luismiguelbermudez@aybarsac.com')
                    ->send(new \App\Mail\NewSeatReservationNotification($reservation));
            }

        } catch (\Exception $e) {
            Log::error("🔥 Error al guardar la reserva (admin)", [
                'error'       => $e->getMessage(),
                'line'        => $e->getLine(),
                'schedule_id' => $request->schedule_id,
                'seat_number' => $request->seat_number,
                'user_id'     => Auth::id()
            ]);

            return abort(500, 'Error inesperado al guardar la reserva.');
        }

        return $this->create(); // Redireccionar a la vista original o refrescar
    }
public function storePublic(Request $request)
{
    // Validación de datos
    $request->validate([
        'schedule_id'    => 'required|exists:schedules,id',
        'seat_number'    => 'required|integer|min:1',
        'customer_name'  => 'required|string|max:255',
        'email'          => 'required|email|max:255',
        'photo'          => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5048', // Máximo ~5MB
    ]);

    // Log de los datos recibidos (excluyendo 'photo' por ser un archivo)
    Log::info('Datos recibidos para reserva', $request->only([
        'schedule_id', 'seat_number', 'customer_name', 'dni', 'phone', 'email'
    ]));

    // Verificar si el asiento ya está reservado
    $validate = SeatReservation::where('schedule_id', $request->schedule_id)
        ->where('seat_number', $request->seat_number)
        ->first();

    if ($validate) {
        Log::warning("Intento de reservar un asiento ya ocupado", [
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'user_id'     => 1 // o Auth::id() si aplica
        ]);

        return abort(500, 'El asiento ya ha sido reservado');
    }

    try {
        // Actualizar la reserva existente, identificada por $request->id
        $reservation = new SeatReservation();
        // falta esta línea:
        $reservation->schedule_id = $request->schedule_id;
        $reservation->seat_number    = $request->seat_number;
        $reservation->customer_name  = $request->customer_name;
        $reservation->dni            = $request->dni;
        $reservation->phone          = $request->phone;
        $reservation->email          = $request->email;
        $reservation->detail          = $request->detail ?? null;
        $reservation->user_id        = 1;

        // Si se sube una nueva foto, se actualiza el campo file
        if ($request->hasFile('photo')) {
            $reservation->file = fileStore($request->file('photo'), "resource");
            Log::info("Nueva foto cargada", ['path' => $reservation->file]);
        }

        $reservation->save();

        Log::info("Asiento reservado correctamente", [
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'user_id'     => 1
        ]);

        // Enviar notificación por correo
        Mail::to($request->email)
            ->bcc('logicainformatica18@gmail.com')
            ->send(new \App\Mail\NewSeatReservationNotification($reservation));
            return $reservation->id;

    } catch (\Exception $e) {
        Log::error("Error al crear reserva de asiento", [
            'error'       => $e->getMessage(),
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'user_id'     => 1
        ]);

        return abort(500, 'Error inesperado al guardar la reserva.');
    }
}

    public function edit(Request $request)
    {
        return SeatReservation::find($request->id);
    }

    public function update(Request $request)
    {
        $SeatReservation = SeatReservation::find($request->id);
        $SeatReservation->seat_number = $request->seat_number;
        $SeatReservation->customer_name = $request->customer_name;
        $SeatReservation->dni = $request->dni;
        $SeatReservation->phone = $request->phone;
        $SeatReservation->detail          = $request->detail ?? null;
        $SeatReservation->user_id = Auth::id();
        $SeatReservation->save();

        return $this->create();
    }

    public function destroy(Request $request)
    {
        $SeatReservation = SeatReservation::find($request->id);
        $SeatReservation->delete();

        return $this->create();
    }





    public function verify($id)
    {
        $selectedSchedule = SeatReservation::with('schedule.project', 'schedule.bus')->find($id);

        if (!$selectedSchedule) {
            abort(404, 'Reserva no encontrada');
        }

        $fecha = Carbon::parse($selectedSchedule->schedule->date)->format('Y-m-d');
        $hora = Carbon::parse($selectedSchedule->schedule->time)->format('H:i');

        $verificationUrl = route('verificar.schedule', ['id' => $id]);

        $qrCode = new QrCode(
            data: $verificationUrl,
            size: 200,
            margin: 10,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            roundBlockSizeMode: RoundBlockSizeMode::Margin
        );

        $writer = new PngWriter();
        $qrResult = $writer->write($qrCode);
        $qrBase64 = base64_encode($qrResult->getString());

        return view('pdf.schedule', [
            'selectedSchedule' => $selectedSchedule,
            'fecha' => $fecha,
            'hora' => $hora,
            'qrCode' => $qrBase64
        ]);
    }






}
