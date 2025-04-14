@php
    use Carbon\Carbon;
    use Illuminate\Support\Str;

    $fecha = Carbon::parse($selectedSchedule->schedule->date)->format('Y-m-d');
    $hora = Carbon::parse($selectedSchedule->schedule->time)->format('H:i');
@endphp

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resumen de Visita</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        .bordered { border: 1px solid #000; padding: 10px; margin-bottom: 10px; }
        .small { font-size: 10px; color: gray; }
        img.qr { margin-top: 20px; }
    </style>
</head>
<body>
    <h2>Resumen de Visita</h2>
    <div class="bordered">
        <strong>Cliente:</strong> {{ $selectedSchedule->customer_name }}<br>
        <strong>Dni:</strong> {{ $selectedSchedule->dni ?? 'No registrado' }} <br>
        <strong>Teléfono:</strong> {{ $selectedSchedule->phone ?? 'No registrado' }} <br>
        <strong>Email:</strong> {{ $selectedSchedule->email ?? 'No registrado' }}
    </div>
    <div class="bordered">
        <strong>Embarque:</strong> LIMA<br>
        <strong>Fecha:</strong> {{ $fecha }}<br>
        <strong>Hora:</strong> {{ $hora }}
    </div>

    <div class="bordered">
        <strong>Destino:</strong> {{ Str::upper($selectedSchedule->schedule->project->description) }}<br>
        <strong>Fecha:</strong> {{ $fecha }}<br>
        <strong>Hora:</strong> {{ $hora }}
    </div>

    <div class="bordered">
        <strong>Bus:</strong> {{ $selectedSchedule->schedule->bus->plate ?? '' }}<br>
        <strong>Asiento:</strong> {{ $selectedSchedule->seat_number ?? 'N/A' }}
    </div>

    <div style="text-align: center">
        <p class="small">Escanee para verificar la autenticidad</p>
        <img src="data:image/png;base64,{{ $qrCode }}" alt="QR Code" width="200" height="200">
    </div>
    <div class="bordered">
        <strong>Fecha de Reserva :</strong> {{ $selectedSchedule->created_at }}<br>

    </div>
</body>
</html>
