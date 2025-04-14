<table id="file_export" class="table table-hover table-bordered table-striped table-responsive">
    <thead>
        <tr>
            <th>
                <img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt="">
            </th>
            <th>ID</th>
            <th>Cliente</th>
            <th>Voucher</th>
            <th>Project</th>
            <th>Bus</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Report as $Reports)
            <tr>
                <!-- Menú Desplegable -->
                <td>
                    <div class="dropdown dropstart">
                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a

                                    class="dropdown-item d-flex align-items-center gap-3" href="reporte/{{ $Reports->id }}">
                                    <i class="fs-4 ti ti-edit"></i>Reporte
                                </a>
                            </li>
                            @canany(['administrar', 'editar'])
                                <li>
                                    <a onclick="ReportEdit('{{ $Reports->id }}'); Up(); return false"
                                        data-bs-toggle="modal" data-bs-target="#success-header-modal"
                                        class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-edit"></i> Edit
                                    </a>
                                </li>
                            @endcanany
                            @canany(['administrar', 'eliminar'])
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"
                                        onclick="ReportDestroy('{{ $Reports->id }}'); return false">
                                        <i class="fs-4 ti ti-trash"></i> Delete
                                    </a>
                                </li>
                            @endcanany
                        </ul>
                    </div>
                </td>

                <td>{{ $Reports->id }}</td>
                <td>{{ $Reports->project->description ?? '—' }}</td>
                <td>{{ $Reports->bus->description ?? '—' }}</td>
                <td>{{ $Reports->date }}</td>
                <td>{{ \Carbon\Carbon::parse($Reports->time)->format('h:i A') }}</td>
                <td>
                    <span class="badge bg-{{ $Reports->status == 'active' ? 'success' : 'secondary' }}">
                        {{ ucfirst($Reports->status) }}
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
