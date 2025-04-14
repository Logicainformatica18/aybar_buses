<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Schedule;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use App\Models\SeatReservation;
class PdfController extends Controller
{
    public function generate($reservationId)
    {
        $selectedSchedule = SeatReservation::with('schedule.project', 'schedule.bus')->findOrFail($reservationId);

        $verificationUrl = route('verificar.schedule', ['id' => $reservationId]);

        // QR para la verificación
        $result = (new Builder())->build(
            writer: new PngWriter(),
            data: $verificationUrl,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            size: 200,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin
        );

        $qrCode = base64_encode($result->getString());

        // Generar PDF
        $pdf = Pdf::loadView('pdf.schedule', [
            'selectedSchedule' => $selectedSchedule,
            'qrCode' => $qrCode
        ]);

        return $pdf->download('comprobante.pdf');
    }
}
