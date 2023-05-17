@extends('admin.app')

@section('body')
<form class="col-lg-6" action="{{ route('penyakit.update', $penyakit->id) }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
        <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit"
            value="{{ old('nama_penyakit', $penyakit->nama_penyakit) }}" autofocus>
    </div>
    <div class="mb-3">
        <label for="det_penyakit" class="form-label">Detail Penyakit</label>
        <textarea class="form-control" id="det_penyakit" name="det_penyakit"
            rows="3">{{ old('det_penyakit', $penyakit->det_penyakit) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="solusi_penyakit" class="form-label">Solusi Penyakit</label>
        <textarea class="form-control" id="solusi_penyakit" name="solusi_penyakit"
            rows="3">{{ old('solusi_penyakit', $penyakit->solusi_penyakit) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Upload Gambar</label>
        <input type="hidden" name="oldImage" value="{{ $penyakit->gambar }}">
        <input class="form-control" type="file" id="gambar" name="gambar">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection