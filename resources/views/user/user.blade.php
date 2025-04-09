@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1 class="text-primary">Usuarios</h1>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Usuarios
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="datatables">

                <!-- start File export -->
                <div class="card">
                    <div class="card-body">

                        <p class="card-subtitle mb-3">
                            @canany(['administrar', 'agregar'])
                                <!-- success header modal -->
                                <button type="button" class="btn mb-1 me-1 btn-success"
                                    data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                                    onclick="New();$('#user')[0].reset();">
                                    Agregar
                                </button>
                            @endcanany
                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Exportar</h4>
                        </div>
                        <div class="table-responsive"id="mycontent">



                            @include('user.usertable')

                        </div>
                    </div>
                </div>


                <!-- end Language file -->

                <!-- end Setting defaults -->


                <!-- end Custom toolbar elements -->
            </div>
        </div>
    </div>

    <div class="button-group">


        <!-- /.modal -->
        <!-- danger header modal -->

        <!-- /.modal -->

        <!-- /.modal -->

        <!-- success Header Modal -->

        <div id="success-header-modal" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-success text-white">
                        <h4 class="modal-title text-white" id="success-header-modalLabel">
                            Usuarios
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form action="" method="post" role="form" id="user"
                            name="user"enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            {{ csrf_field() }}

                            Dni<input name="dni" type="number" class="form-control"value="99999999">
                            Paterno<input name="firstname" type="text" class="form-control">
                            Materno<input name="lastname" type="text" class="form-control">
                            Nombres<input name="names" type="text" class="form-control">
                            Celular<input type="number" name="cellphone" class="form-control"value="99999999">
                            Email<input type="text" name="email" class="form-control">
                            Contraseña<input type="password" name="password" class="form-control"value="12345678">
                            <br>
                            Sexo
                            <div class="row text-center">
                                <div class="col 6">

                                    <input class="form-check-input" type="radio" name="sex" id="M"
                                        value="M" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="col 6">
                                    <input class="form-check-input" type="radio" name="sex" id="F"
                                        value="F">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Femenino
                                    </label>
                                </div>
                            </div>

                            <br>
                            Fecha de Nacimiento :
                            <div class="row">
                                <div class="col s4">
                                    <select name="day" class="form-control">
                                        <option>Dia</option>
                                        <?php for ($a = 1; $a <= 31; $a++) {
                                            if ($a == 1) {
                                                echo "<option value='$a' selected>" . $a . '</option>';
                                            } else {
                                                echo "<option value='$a'>" . $a . '</option>';
                                            }
                                        } ?>
                                    </select>
                                </div>
                                <div class="col s4">
                                    <select name="month" class="form-control">
                                        <option>Mes</option>

                                        <?php
                                        $mes = ['', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
                                        for ($b = 1; $b <= 12; $b++) {
                                            if ($b == 1) {
                                                echo "<option value='$b' selected >" . $mes[$b] . '</option>';
                                            } else {
                                                echo "<option value='$b'>" . $mes[$b] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col s4">
                                    <select name="year" class="form-control">
                                        <option>Año</option>
                                        <?php
                                        $c = 2023;
                                        echo "<option value='2024' selected> 2024</option>";
                                        while ($c >= 1905) {
                                            echo "<option value='$c'>" . $c . '</option>';
                                            $c = $c - 1;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <p></p>
                            <div class="container align-content-center">
                                <div class="form-group row">
                                    Fotografía



                                    <input class="form-control" type="file" id="imgInp"
                                        name="photo"onchange="readImage(this,'#blah');">



                                </div>
                                <div class="size-100">
                                    <br>
                                    <img id="blah" name="fotografia" src="https://placehold.co/150" alt="Tu imagen"
                                        class="img-bordered" width="100%">
                                </div>
                            </div>



                    </div>
                    <div class="modal-footer">
                        <input type="button" value="Nuevo" class="btn btn-primary"
                            onclick="New();$('#user')[0].reset();" name="new">
                            @canany(['administrar', 'agregar'])
                            <input type="button" value="Guardar" class="btn bg-success-subtle text-success "
                                onclick="userStore()" id="create">
                        @endcanany
                        @canany(['administrar', 'actualizar'])
                        <input type="button" value="Modificar" class="btn bg-danger-subtle text-danger"
                            onclick="userUpdate();" id="update">
                        @endcanany
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                           
                            Cerrar</button>
                        </form>







                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div id="success-header-modal2" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-success text-white">
                        <h4 class="modal-title text-white" id="success-header-modalLabel">
                            Roles
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form action="" method="post" role="form" id="User_role"
                            name="User_role"enctype="multipart/form-data">
                            <input type="hidden" name="id">
                            {{ csrf_field() }}

                            <br>
                            <div id="mycontent_detail">

                            </div>
                    </div>
                    <div class="modal-footer">

                        <input type="button" value="Actualizar" class="btn bg-success-subtle text-success "
                            onclick="UserRoleUpdate()">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </form>







                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- /.modal -->
    </div>
@endsection
