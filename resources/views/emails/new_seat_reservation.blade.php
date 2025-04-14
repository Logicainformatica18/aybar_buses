<h2>🎫 Reservación Confirmada - Boleta</h2>

<p><strong>👤 Cliente:</strong> {{ $reservation->customer_name }}</p>
<p><strong>🆔 DNI:</strong> {{ $reservation->dni }}</p>
<p><strong>📞 Teléfono:</strong> {{ $reservation->phone ?? 'No registrado' }}</p>
<p><strong>📅 Fecha:</strong> {{ $reservation->schedule->date }} {{ $reservation->schedule->time }}</p>
<p><strong>📍 Proyecto:</strong> {{ $reservation->schedule->project->description }}</p>
<p><strong>🪑 N° de Asiento:</strong> {{ $reservation->seat_number }}</p>

<p>📩 Este es un correo de confirmación automática.</p>
