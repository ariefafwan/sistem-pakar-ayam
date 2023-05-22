@extends('admin.app')

@section('body')
<form class="col-lg-6" action="{{ route('gejala.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="kd_gejala" class="form-label">Kode Gejala</label>
        <input type="text" class="form-control" id="kd_gejala" name="kd_gejala" autofocus>
    </div>
    <div class="mb-3">
        <label for="nama_gejala" class="form-label">Nama Gejala</label>
        <input type="text" class="form-control" id="nama_gejala" name="nama_gejala">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection