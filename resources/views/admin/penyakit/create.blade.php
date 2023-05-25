@extends('admin.app')

@section('body')
<div class="form-create-penyakit col-lg-7 shadow-lg rounded p-3">
    <a href="{{ route('penyakit.index') }}" class="btn btn-danger my-3">
        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbspBack
    </a>
    <form class="col-lg-12" action="{{ route('penyakit.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kd_penyakit" class="form-label fw-bold">Kode Penyakit</label>
            <input type="text" class="form-control" id="kd_penyakit" name="kd_penyakit"
                placeholder="Masukkan kode penyakit..." autofocus>
        </div>
        <div class="mb-3">
            <label for="nama_penyakit" class="form-label fw-bold">Nama Penyakit</label>
            <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit"
                placeholder="Masukkan nama penyakit...">
        </div>
        <div class="mb-3">
            <label for="det_penyakit" class="form-label fw-bold">Detail Penyakit</label>
            <textarea class="form-control" id="det_penyakit" name="det_penyakit" rows="3"
                placeholder="Masukkan detail penyakit..."></textarea>
        </div>
        <div class="mb-3">
            <label for="solusi_penyakit" class="form-label fw-bold">Solusi Penyakit</label>
            <textarea class="form-control" id="solusi_penyakit" name="solusi_penyakit" rows="3"
                placeholder="Masukkan solusi penyakit..."></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label fw-bold">Upload Gambar</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
        </div>
        <div class="button d-flex justify-content-center">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbspSubmit
            </button>
        </div>
    </form>
</div>
@endsection