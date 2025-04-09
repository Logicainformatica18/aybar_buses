<table id="file_export" class="table table-hover table-bordered table-striped table-responsive">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Cliente</th>
            <th>Asiento</th>
            <th>DNI</th>
            <th>Teléfono</th>
            <th>Proyecto</th>
            <th>Bus</th>
            <th>Fecha</th>
            <th>Hora</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($SeatReservation as $SeatReservations)
            <tr>
                <td>
                    <div class="dropdown dropstart">
                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @canany(['administrar', 'editar'])
                                <li>
                                    <a onclick="SeatReservationEdit('{{ $SeatReservations->id }}'); Up(); return false"
                                        data-bs-toggle="modal" data-bs-target="#success-header-modal"
                                        class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-edit"></i> Editar
                                    </a>
                                </li>
                            @endcanany
                            @canany(['administrar', 'eliminar'])
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"
                                        onclick="SeatReservationDestroy('{{ $SeatReservations->id }}'); return false">
                                        <i class="fs-4 ti ti-trash"></i> Eliminar
                                    </a>
                                </li>
                            @endcanany
                        </ul>
                    </div>
                </td>

                <td>{{ $SeatReservations->id }}</td>
                <td>{{ $SeatReservations->customer_name }}</td>
                <td>{{ $SeatReservations->seat_number }}</td>
                <td>{{ $SeatReservations->dni ?? '—' }}</td>
                <td>{{ $SeatReservations->phone ?? '—' }}</td>
                <td>{{ $SeatReservations->schedule->project->description ?? '—' }}</td>
                <td>{{ $SeatReservations->schedule->bus->description ?? '—' }}</td>
                <td>{{ $SeatReservations->schedule->date ?? '—' }}</td>
                <td>{{ \Carbon\Carbon::parse($SeatReservations->schedule->time)->format('h:i A') ?? '—' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
