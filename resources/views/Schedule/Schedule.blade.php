@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1 class="text-primary">Schedules</h1>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Schedules
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
                                onclick="New(); $('#Schedule')[0].reset();">
                                Add Schedule
                            </button>
                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Export</h4>
                        </div>
                        <div class="table-responsive" id="mycontent">
                            @include('Schedule.Scheduletable')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Create/Edit Schedule -->
    <div id="success-header-modal" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-success text-white">
                    <h4 class="modal-title text-white" id="success-header-modalLabel">Schedule</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="Schedule" name="Schedule"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}

                        <!-- General Info -->
                        <div class="mb-3">
                            <h3>General Info</h3>

                            <label>Project:</label>
                            <select name="project_id" id="project_id" class="form-control">
                                @foreach ($Projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->description }}</option>
                                @endforeach
                            </select>

                            <label class="mt-2">Bus:</label>
                            <select name="bus_id" id="bus_id" class="form-control">
                                @foreach ($Buses as $bus)
                                    <option value="{{ $bus->id }}">{{ $bus->description }}</option>
                                @endforeach
                            </select>

                            <label class="mt-2">Date:</label>
                            <input type="date" name="date" id="date" class="form-control">

                            <label class="mt-2">Time:</label>
                            <input type="time" name="time" id="time" class="form-control">

                            <label class="mt-2">Status:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="finished">Finished</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    @canany(['administrar', 'agregar'])
                        <input type="button" value="Save" class="btn bg-success-subtle text-success"
                            onclick="ScheduleStore()" id="create">
                    @endcanany
                    <input type="button" value="Update" class="btn bg-danger-subtle text-danger"
                        onclick="ScheduleUpdate();" id="update">
                </div>
            </div>
        </div>
    </div>
@endsection
