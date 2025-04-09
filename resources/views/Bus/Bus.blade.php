@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1 class="text-primary">Buses</h1>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Buses
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="datatables">
                <div class="card">
                    <div class="card-body">
                        <p class="card-subtitle mb-3">
                            <button type="button" class="btn mb-1 me-1 btn-success" data-bs-toggle="modal"
                                data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                                onclick="New();$('#Bus')[0].reset();Bus.fotografia.src ='https://placehold.co/150';">
                                Agregar
                            </button>
                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Exportar</h4>
                        </div>
                        <div class="table-responsive" id="mycontent">
                            @include('Bus.Bustable')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal para Crear/Editar Bus -->
<div id="success-header-modal" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-success text-white">
                <h4 class="modal-title text-white" id="success-header-modalLabel">Bus</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" role="form" id="Bus" name="Bus" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <h4>Información general</h4>

                        <label>Descripción:</label>
                        <input type="text" name="description" id="description" class="form-control" required>

                        <label class="mt-2">Cantidad de asientos:</label>
                        <input type="number" name="seat_count" id="seat_count" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                @canany(['administrar', 'agregar'])
                    <input type="button" value="Guardar" class="btn bg-success-subtle text-success"
                        onclick="BusStore()" id="create">
                @endcanany
                <input type="button" value="Modificar" class="btn bg-danger-subtle text-danger"
                    onclick="BusUpdate();" id="update">
            </div>
        </div>
    </div>
</div>


@endsection
