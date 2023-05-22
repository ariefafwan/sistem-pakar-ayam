@extends('admin.app')

@section('body')

<hr>
<section class="content">
    <div class="btn-group mb-3">
        <a href="{{ route('gejala.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
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
                                <th class="text-center">Kode Gejala</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gejala as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $row->kd_gejala }}</td>
                                <td>{{ $row->nama_gejala }}</td>
                                <td align="center">
                                    <div class="btn-group">
                                        <hr>
                                        <a href="{{ route('gejala.edit',$row->id) }}" class="btn btn-warning mr-2"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <hr>
                                        <a href="javascript:void(0)" class="btn btn-danger" onclick="event.preventDefault();
                                                document.getElementById('gejala-delete-form-{{$row->id}}').submit();">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <form id="gejala-delete-form-{{$row->id}}"
                                            action="{{ route('gejala.destroy',$row->id) }}" method="POST"
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