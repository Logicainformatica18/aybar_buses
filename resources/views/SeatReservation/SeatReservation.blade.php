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
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="card border-0">
                                    <div class="card-body border-top">
                                      <h5 class="fw-bold mb-3">Viaje    </h5>

                                      <div class="d-flex flex-column ps-2 border-start border-2 border-warning">
                                        <div class="mb-3">
                                          <div class="d-flex align-items-start">
                                            <span class="me-2 fw-bold text-dark">19:50</span>
                                            <div>
                                              <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-bus-front-fill text-dark me-1"></i>
                                                <span class="fw-bold">Embarque:</span>
                                                <span class="ms-1 text-uppercase">LIMA</span>
                                              </div>
                                              <div class="text-muted small">dirección</div>
                                              <div class="text-muted small">{{$schedule->date}} {{$schedule->time}}</div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="mb-2">
                                          <div class="d-flex align-items-start">
                                            <span class="me-2 fw-bold text-dark">06:50</span>
                                            <div>
                                              <div class="d-flex align-items-center mb-1">
                                                <i class="bi bi-geo-alt-fill text-dark me-1"></i>
                                                <span class="fw-bold">Destino:</span>
                                                <span class="ms-1 text-uppercase">{{$schedule->project->description}}</span>
                                              </div>
                                              <div class="text-muted small">Dirección</div>
                                              <div class="text-muted small">{{$schedule->date}} {{$schedule->time}}</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <hr>
                                      <div class="text-muted small">Servicio: <strong></strong></div>

                                      <div class="mt-3 d-flex align-items-center gap-3">
                                        <div class="d-flex align-items-center gap-1">
                                          <div style="width:20px; height:20px;" class="bg-light border"></div> <small>Libre</small>
                                        </div>
                                        <div class="d-flex align-items-center gap-1">
                                          <div style="width:20px; height:20px;" class="bg-warning"></div> <small>Seleccionado</small>
                                        </div>
                                        <div class="d-flex align-items-center gap-1">
                                          <div style="width:20px; height:20px;background-color:#6c757d"></div> <small>Ocupado</small>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div id="seat-map-{{ $schedule->id }}" class="d-flex flex-wrap border rounded p-3 seat-map"
                                    data-seats='@json($schedule->reservedSeats)'
                                    data-total='{{ $schedule->bus->seat_count }}'
                                    data-schedule='{{ $schedule->id }}'
                                    style="max-width: 420px;"></div>

                                </div>
                                <div class="col-xl-4 col-0 d-none d-xl-block">
                                    <img src="{{asset('ayba/aybar_bus.png')}}"width="100%" alt="">
                                </div>
                            </div>

                      </div>
                    </div>
                  </div>
                @endforeach
              </div>

              <style>
                .seat {
                  width: 50px;
                  height: 50px;
                  margin: 5px;
                  display: flex;
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                  border-radius: 6px;
                  font-size: 12px;
                  font-weight: bold;
                  cursor: pointer;
                  border: 1px solid #ccc;
                }
                .seat-free {
                  background-color: #f8f9fa;
                  color: #212529;
                }

                .seat-occupied {
                  background-color: #6c757d;
                  color: white;
                  cursor: not-allowed;
                }
                .stairs {
                  width: 60px;
                  height: 50px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  background-color: #fff;
                  border: none;
                  font-size: 10px;
                  color: #6c757d;
                }
                .seat-selected {
  background-color: orange !important;
  color: white;
}
              </style>

<div>

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
      seat.innerHTML = `${i}<br><small>S/35</small>`;

      if (reservedSeats.includes(i)) {
        seat.classList.add("seat-occupied");
      } else {
        seat.classList.add("seat-free");
        seat.onclick = function () {
          // Quitar selección previa
          if (lastClickedSeat) {
            lastClickedSeat.classList.remove("seat-selected");
          }

          // Marcar asiento actual como seleccionado
          seat.classList.add("seat-selected");
          lastClickedSeat = seat;

          // Llenar campos ocultos
          document.getElementById("seat_number").value = i;
          document.getElementById("schedule_id").value = scheduleId;

          // Mostrar modal
          new bootstrap.Modal(document.getElementById("success-header-modal")).show();
        };
      }

      if (i === 22) {
        container.appendChild(seat);
        const stairDiv = document.createElement("div");
        stairDiv.className = "stairs";
        continue;
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
    // Actualizar la tabla
    document.getElementById("mycontent").innerHTML = response.data;
    datatable_load();

    alert("Registrado Correctamente");

    if (lastClickedSeat) {
      // Quitar clase de selección
      lastClickedSeat.classList.remove("seat-selected");

      // Marcar como ocupado
      lastClickedSeat.classList.remove("seat-free");
      lastClickedSeat.classList.add("seat-occupied");

      // Desactivar clic
      lastClickedSeat.onclick = null;

      // Limpiar referencia
      lastClickedSeat = null;
    }

    // Cerrar modal
   // bootstrap.Modal.getInstance(document.getElementById("success-header-modal")).hide();
  }).catch(function (error) {
    console.error(error);
    alert("Error al guardar la reserva");
  });
}

      </script>

@endsection
