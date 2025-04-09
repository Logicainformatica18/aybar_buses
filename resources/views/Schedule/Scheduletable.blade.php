<table id="file_export" class="table table-hover table-bordered table-striped table-responsive">
    <thead>
        <tr>
            <th>
                <img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt="">
            </th>
            <th>ID</th>
            <th>Project</th>
            <th>Bus</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Schedule as $Schedules)
            <tr>
                <!-- Menú Desplegable -->
                <td>
                    <div class="dropdown dropstart">
                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @canany(['administrar', 'editar'])
                                <li>
                                    <a onclick="ScheduleEdit('{{ $Schedules->id }}'); Up(); return false"
                                        data-bs-toggle="modal" data-bs-target="#success-header-modal"
                                        class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-edit"></i> Edit
                                    </a>
                                </li>
                            @endcanany
                            @canany(['administrar', 'eliminar'])
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"
                                        onclick="ScheduleDestroy('{{ $Schedules->id }}'); return false">
                                        <i class="fs-4 ti ti-trash"></i> Delete
                                    </a>
                                </li>
                            @endcanany
                        </ul>
                    </div>
                </td>

                <td>{{ $Schedules->id }}</td>
                <td>{{ $Schedules->project->description ?? '—' }}</td>
                <td>{{ $Schedules->bus->description ?? '—' }}</td>
                <td>{{ $Schedules->date }}</td>
                <td>{{ \Carbon\Carbon::parse($Schedules->time)->format('h:i A') }}</td>
                <td>
                    <span class="badge bg-{{ $Schedules->status == 'active' ? 'success' : 'secondary' }}">
                        {{ ucfirst($Schedules->status) }}
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
