@extends('admin.app')

@section('body')

<hr>
<section class="content">
    <div class="btn-group mb-3">
        <a href="{{ route('penyakit.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
            CREATE NEW</a>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Detail</th>
                                <th class="text-center">Solusi</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penyakit as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $row->nama_penyakit }}</td>
                                <td>{{ $row->det_penyakit }}</td>
                                <td>{{ $row->solusi_penyakit }}</td>
                                <td align="center">
                                    <img src="{{ asset('storage/penyakit/'.$row->gambar) }}" alt="{{ $row->nama_penyakit }}" class="img-thumbnail" style="max-width:150px;">
                                </td>
                                <td align="center">
                                    <div class="btn-group">
                                        <hr>
                                        <a href="{{ route('penyakit.edit',$row->id) }}" class="btn btn-warning mr-2"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <hr>
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
                                    </div>
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