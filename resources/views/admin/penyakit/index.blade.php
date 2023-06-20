@extends('admin.app')

@section('body')

<hr>
<section class="content">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('penyakit.create') }}" class="btn btn-primary">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbspCREATE NEW</a>
            <a href="{{ route('penyakit.export') }}" class="btn btn-success" target="_blank">
                <i class="fa fa-download" aria-hidden="true"></i>&nbspDownload/Export</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Kode Penyakit</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Detail</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penyakit as $index => $row)
                            <tr>
                                <td align="center" scope="row">{{ $index + 1 }}</td>
                                <td>{{ $row->kd_penyakit }}</td>
                                <td>{{ $row->nama_penyakit }}</td>
                                <td>{{ $row->det_penyakit }}</td>
                                <td align="center" class="d-flex justify-content-evenly">
                                    <a href="{{ route('penyakit.show',$row->id) }}" class="btn btn-info">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('penyakit.edit',$row->id) }}" class="btn btn-warning">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger"
                                        onclick="event.preventDefault();
                                                document.getElementById('penyakit-delete-form-{{$row->id}}').submit();">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    <form id="penyakit-delete-form-{{$row->id}}"
                                        action="{{ route('penyakit.destroy',$row->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection