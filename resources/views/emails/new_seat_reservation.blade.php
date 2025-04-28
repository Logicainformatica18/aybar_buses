<h2>🎫 Reservación Confirmada - Boleta</h2>

<p><strong>👤 Cliente:</strong> {{ $reservation->customer_name }}</p>
<p><strong>🆔 DNI:</strong> {{ $reservation->dni }}</p>
<p><strong>📞 Teléfono:</strong> {{ $reservation->phone ?? 'No registrado' }}</p>
<p><strong>📅 Fecha:</strong> {{ $reservation->schedule->date }} {{ $reservation->schedule->time }}</p>
<p><strong>📧 Email:</strong> {{ $reservation->email }}</p>
<p><strong>💬 Comentarios:</strong> {{ $reservation->detail }}</p>

<!-- 🔥 Asesor (nuevo input) -->
<p><strong>🧑‍💼 Asesor:</strong> {{ $reservation->business_partnert_text ?? 'No registrado' }}</p>

<!-- 🔥 Paradero para subir (nuevo select) -->
<p><strong>🚏 Paradero de subida:</strong> {{ $reservation->whereabouts ?? 'No registrado' }}</p>

<p><strong>📍 Proyecto:</strong> {{ $reservation->schedule->project->description }}</p>
<p><strong>🪑 N° de Asiento:</strong> {{ $reservation->seat_number }}</p>

<p>📩 Este es un correo de confirmación automática.</p>
