@extends('admin.app')

@section('body')
<form class="col-lg-6" action="{{ route('penyakit.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="penyakit" class="form-label">Nama Penyakit</label>
        <input type="text" class="form-control" id="penyakit" name="nama_penyakit" autofocus>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection