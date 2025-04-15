@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1 class="text-primary">Reporte</h1>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Reporte
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
                            {{-- <button type="button" class="btn mb-1 me-1 btn-success" data-bs-toggle="modal"
                                data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                                onclick="New(); $('#Report')[0].reset();">
                                Add Report
                            </button> --}}
                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Export</h4>
                        </div>
                        <div class="table-responsive" id="mycontent">
                            @include('Report.Reporttable')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
