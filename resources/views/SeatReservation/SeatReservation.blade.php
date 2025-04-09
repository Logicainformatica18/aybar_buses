@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1 class="text-primary">Reservaciones</h1>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Reservaciones
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion" id="busAccordion">
                @foreach ($schedules as $schedule)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $schedule->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $schedule->id }}" aria-expanded="false"
                                aria-controls="collapse{{ $schedule->id }}">
                                Proyecto: {{ $schedule->project->description }} | Bus: {{ $schedule->bus->description }} | Fecha: {{ $schedule->date }} {{ \Carbon\Carbon::parse($schedule->time)->format('h:i A') }} | Capacidad: {{ $schedule->bus->seat_count }} asientos
                            </button>
                        </h2>
                        <div id="collapse{{ $schedule->id }}" class="accordion-collapse collapse"
                            aria-labelledby="heading{{ $schedule->id }}" data-bs-parent="#busAccordion">
                            <div class="accordion-body">
                                <div id="seat-map-{{ $schedule->id }}" class="d-flex flex-wrap gap-2 p-3 border rounded seat-map" data-seats='@json($schedule->reservedSeats)' data-total='{{ $schedule->bus->seat_count }}' data-schedule='{{ $schedule->id }}'></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="table-responsive" id="mycontent">
            @include('SeatReservation.SeatReservationtable')
        </div>
        </div>
    </div>

    <!-- Modal para Crear/Editar Reserva -->
    <div id="success-header-modal" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-success text-white">
                    <h4 class="modal-title text-white" id="success-header-modalLabel">Reserva de Asiento</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="SeatReservation" name="SeatReservation"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}

                        <input type="hidden" name="seat_number" id="seat_number">
                        <input type="hidden" name="schedule_id" id="schedule_id">

                        <div class="mb-3">
                            <label>Nombre del Cliente:</label>
                            <input type="text" name="customer_name" id="customer_name" class="form-control" required>

                            <label class="mt-2">DNI:</label>
                            <input type="text" name="dni" id="dni" class="form-control">

                            <label class="mt-2">Teléfono:</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="button" value="Guardar" class="btn bg-success-subtle text-success"
                        onclick="SeatReservationStore()">
                </div>
            </div>
        </div>
    </div>

    <style>
        .seat {
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }
        .seat.occupied {
            background-color: #dc3545;
            cursor: not-allowed;
        }
    </style>

    <script>
        let lastClickedSeat = null;

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".seat-map").forEach(function (container) {
                const reservedSeats = JSON.parse(container.getAttribute("data-seats"));
                const totalSeats = parseInt(container.getAttribute("data-total"));
                const scheduleId = container.getAttribute("data-schedule");

                for (let i = 1; i <= totalSeats; i++) {
                    const seat = document.createElement("div");
                    seat.className = "seat";
                    seat.textContent = i;

                    if (reservedSeats.includes(i)) {
                        seat.classList.add("occupied");
                    } else {
                        seat.onclick = function () {
                            document.getElementById("seat_number").value = i;
                            document.getElementById("schedule_id").value = scheduleId;
                            lastClickedSeat = seat; // Guardar referencia del asiento
                            new bootstrap.Modal(document.getElementById("success-header-modal")).show();
                        };
                    }

                    container.appendChild(seat);
                }
            });
        });

        function SeatReservationStore() {
            var formData = new FormData(document.getElementById("SeatReservation"));

            axios.post("../SeatReservationStore", formData, {
                headers: {
                    "Content-Type": "multipart/form-data"
                }
            }).then(function (response) {
                document.getElementById("mycontent").innerHTML = response.data;
                datatable_load();
                alert("Registrado Correctamente");
                if (lastClickedSeat) {
                    lastClickedSeat.classList.add("occupied");
                    lastClickedSeat.onclick = null;
                }
                bootstrap.Modal.getInstance(document.getElementById("success-header-modal")).hide();
            }).catch(function (error) {
                console.error(error);
                alert("Error al guardar la reserva");
            });
        }
    </script>
@endsection
