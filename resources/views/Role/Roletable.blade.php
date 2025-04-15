
<table id="file_export" class=" table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
           
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
           
            <th>ID</th>
            <th>Nombre</th>
          
            

        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($Role as $Roles)
            <tr>
                <td>
                    <div class="dropdown dropstart">
                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                            <li>
                                <a  data-bs-toggle="modal" data-bs-target="#success-header-modal2" fdprocessedid="cw61t3"
                        onclick="RolePermissionEdit('{{ $Roles->id }}'); Up();  return false"
                                    class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                    <i class="fs-4 ti ti-edit"></i>Permisos
                                </a>
                            </li>
                            @canany(['administrar', 'editar'])
                                <li>
                                    <a  data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                        onclick="RoleEdit('{{ $Roles->id }}'); Up();  return false"
                                        class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-edit"></i>Editar
                                    </a>
                                </li>
                            @endcanany
                            @canany(['administrar', 'eliminar'])
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"
                                onclick="RoleDestroy('{{ $Roles->id }}'); return false">
                                    <i class="fs-4 ti ti-trash"></i>Delete
                                </a>
                            </li>
                            @endcanany
                        </ul>
                    </div>
    
                </td>
              
              

                


                <td>{{ $Roles->id }}</td>
               
                <td>{{ $Roles->name }}</td>  
                            
              
             


            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <!-- start row -->
        <tr>
          
           
        <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                srcset=""></th>
        <th>ID</th>
        <th>Nombre</th>
        
        
        </tr>
        <!-- end row -->
    </tfoot>
</table>








    <script>
 
      </script>
    