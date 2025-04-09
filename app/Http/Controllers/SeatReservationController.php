<?php

namespace App\Http\Controllers;

use App\Models\SeatReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;
use Illuminate\Support\Facades\Log;

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
        'schedule_id' => 'required|exists:schedules,id',
        'seat_number' => 'required|integer|min:1',
        'customer_name' => 'required|string|max:255',
    ]);


    $validate= SeatReservation::where('schedule_id', $request->schedule_id)
        ->where('seat_number', $request->seat_number)
        ->first();
    if ($validate) {
     return   abort(500, 'El asiento ya ha sido reservado');
    }
    else{
        SeatReservation::create([
            'schedule_id' => $request->schedule_id,
            'seat_number' => $request->seat_number,
            'customer_name' => $request->customer_name,
            'dni' => $request->dni,
            'phone' => $request->phone,
            'user_id' => Auth::id(), // Asignar el ID del usuario autenticado
        ]);

       // $reservations = SeatReservation::with('schedule.project', 'schedule.bus')->get();

    }

    return $this->create();

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
}
