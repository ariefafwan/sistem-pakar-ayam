@extends('admin.app')
@section('body')
<div class="form-edit-gejala shadow-lg rounded col-lg-7 p-3">
    <a href="{{ route('gejala.index') }}" class="btn btn-danger my-3">
        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbspBack
    </a>
    <form class="col-lg-12" action="{{ route('gejala.update', $gejala->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="kd_gejala" class="form-label fw-bold">Kode Gejala</label>
            <input type="text" class="form-control" id="kd_gejala" name="kd_gejala"
                value="{{ old('kd_gejala', $gejala->kd_gejala) }}" placeholder="Masukkan kode gejala..." autofocus>
        </div>
        <div class="mb-3">
            <label for="nama_gejala" class="form-label fw-bold">Nama Gejala</label>
            <input type="text" class="form-control" id="nama_gejala" name="nama_gejala"
                value="{{ old('nama_gejala', $gejala->nama_gejala) }}" placeholder="Masukkan nama gejala...">
        </div>
        <div class="button d-flex justify-content-center">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbspSubmit
            </button>
        </div>
    </form>
</div>
@endsection