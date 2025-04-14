@php
    use Illuminate\Support\Str;
    use Carbon\Carbon;

    $fecha = Carbon::parse($selectedSchedule->date)->format('Y-m-d');
    $hora = Carbon::parse($selectedSchedule->time)->format('H:i');
@endphp

<div class="row">
    {{-- Información del viaje --}}
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="card border-0">
            <div class="card-body border-top">
                <h5 class="fw-bold mb-3">Visita</h5>

                <div class="d-flex flex-column ps-2 border-start border-2 border-warning">
                    <div class="mb-3">
                        <div class="d-flex align-items-start">
                            <span class="me-2 fw-bold text-dark">{{ $hora }}</span>
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <i class="bi bi-bus-front-fill text-dark me-1"></i>
                                    <span class="fw-bold">Embarque:</span>
                                    <span class="ms-1 text-uppercase">Lima Norte</span>
                                </div>
                                <div class="text-muted small"></div>
                                <div class="text-muted small">{{ $fecha }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="d-flex align-items-start">
                            <span class="me-2 fw-bold text-dark">{{ \Carbon\Carbon::parse($hora)->addHours(3)->format('H:i') }}
                            </span>
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <i class="bi bi-geo-alt-fill text-dark me-1"></i>
                                    <span class="fw-bold">Destino:</span>
                                    <span class="ms-1 text-uppercase">{{ Str::upper($selectedSchedule->project->description) }}</span>
                                </div>
                                <div class="text-muted small">{{ $fecha }}</div>
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

    {{-- Mapa de asientos --}}
    <div class="col-lg-5 col-sm-6 col-12">
        <div id="seat-map-{{ $selectedSchedule->id }}"
             class="d-flex flex-wrap border rounded p-3 seat-map"
             data-seats='@json($reservedSeats)'
             data-total="{{ $selectedSchedule->bus->seat_count }}"
             data-schedule="{{ $selectedSchedule->id }}">
        </div>
    </div>

    {{-- Imagen del bus --}}
    <div class="col-xl-3 col-0 d-none d-xl-block">
        <img src="{{ asset('ayba/bus_2.png') }}" width="100%" alt="Bus">
    </div>
</div>
