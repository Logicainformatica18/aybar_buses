<table id="file_export" class="text-center table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            {{-- <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th> --}}
            <th>ID</th>
            <th>Estado</th>
            <th> <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i></th>
            <th>Dni</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Nombres</th>
            <th>Celular </th>
            <th>Email</th>
            <th>Foto</th>
            <th>Rol ó Cargo</th>

        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($user as $users)
            <tr>
                <td>
                    <div class="dropdown dropstart">
                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                            <li>
                                <a onclick="UserRoleEdit('{{ $users->id }}'); Up();  return false"
                                    data-bs-toggle="modal" data-bs-target="#success-header-modal2"
                                    fdprocessedid="cw61t3" class="dropdown-item d-flex align-items-center gap-3"
                                    href="javascript:void(0)">
                                    <i class="fs-4 ti ti-user"></i>Roles
                                </a>
                            </li>
                            @canany(['administrar', 'editar'])
                                <li>
                                    <a onclick="userEdit('{{ $users->id }}'); Up();  return false" data-bs-toggle="modal"
                                        data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                                        class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-edit"></i>Editar
                                    </a>
                                </li>
                            @endcanany
                            @canany(['administrar', 'eliminar'])
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"
                                    onclick="userDestroy('{{ $users->id }}'); return false">
                                    <i class="fs-4 ti ti-trash"></i>Delete
                                </a>
                            </li>
                            @endcanany
                        </ul>
                    </div>

                </td>
             



                <td>{{ $users->id }}</td>
                <td>
                    @if ($users->session == '')
                        <span class="badge text-bg-danger">Off</span>
                    @else
                        <span class="badge text-bg-success">On</span>
                    @endif
                </td>
                <td>
                    @php
                        $whatsapp = 'https://api.whatsapp.com/send?phone=' . $users->cellphone;
                    @endphp
                    <a target="_blank" href="{{ $whatsapp }}">
                        <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i>

                    </a>
                </td>
                <td>{{ $users->dni }}</td>

                <td>{{ $users->firstname }}</td>
                <td>{{ $users->lastname }}</td>
                <td>{{ $users->names }}</td>
                <td>
                    {{ $users->cellphone }}
                </td>
                <td>{{ $users->email }}</td>
                @if ($users->photo == '' && $users->sex == 'M')
                    @php
                        $users->photo = '../Recurso 23.png';
                    @endphp
                @elseif($users->photo == '' && $users->sex == 'F')
                    @php
                        $users->photo = '../Recurso 23.png';
                    @endphp
                @endif
                <td><img src="{{ asset('imageusers/' . $users->photo) }}" alt="" srcset="" width="50">
                </td>
                <td>

                    @foreach ($users->roles_ as $item)
                        {{ $item->name }}
                    @endforeach
                </td>


            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <!-- start row -->
        <tr>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            {{-- <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th> --}}
            <th>ID</th>
            <th>Estado</th>
            <th> <i class="ti ti-brand-whatsapp fs-7"style="color:green;"></i></th>
            <th>Dni</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Nombres</th>
            <th>Celular </th>
            <th>Email</th>
            <th>Foto</th>
            <th>Rol ó Cargo</th>

        </tr>
        <!-- end row -->
    </tfoot>
</table>








<script></script>
