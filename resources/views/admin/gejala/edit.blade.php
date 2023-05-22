@extends('admin.app')
@section('body')
<form class="col-lg-6" action="{{ route('gejala.update', $gejala->id) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="kd_gejala" class="form-label">Kode Gejala</label>
        <input type="text" class="form-control" id="kd_gejala" name="kd_gejala" 
        value="{{ old('kd_gejala', $gejala->kd_gejala) }}" autofocus>
    </div>
    <div class="mb-3">
        <label for="nama_gejala" class="form-label">Nama Gejala</label>
        <input type="text" class="form-control" id="nama_gejala" name="nama_gejala"
            value="{{ old('nama_gejala', $gejala->nama_gejala) }}">
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
</form>
@endsection