@extends('admin.app')
@section('body')
<form class="col-lg-6" action="{{ route('gejala.update', $gejala->id) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nama_gejala" class="form-label">Nama Gejala</label>
        <input type="text" class="form-control" id="nama_gejala" name="nama_gejala"
            value="{{ old('nama_gejala', $gejala->nama_gejala) }}" autofocus>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection