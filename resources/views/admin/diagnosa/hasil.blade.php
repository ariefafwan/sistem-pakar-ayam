@extends('admin.app')

@section('body')

<div class="container">

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered table-hover">
        @foreach ($rule as $hasil)
          <tr>
          <td>Penyakit</td>
          <td>:</td>
          <td>{{ $hasil->penyakit->nama_penyakit }}</td>
          </tr>
          <tr>
          <td>Penyebab</td>
          <td>:</td>
          <td>{{ $hasil->penyakit->det_penyakit }}</td>
          </tr>
          <tr>
          <td>Solusi</td>
          <td>:</td>
          <td>{{ $hasil->penyakit->solusi_penyakit }}</td>
          </tr>
        @endforeach
          </table>
          <a class="btn btn-sm btn-danger" href="{{ route('penyakit.index') }}">Kembali</a>
        </div>
      </div>
@endsection