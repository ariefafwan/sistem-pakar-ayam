@extends('admin.app')

@section('body')

    <hr>

    <div class="row my-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Gejala</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dt1 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Penyakit</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dt2 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Basis Pengetahuan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dt3 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
