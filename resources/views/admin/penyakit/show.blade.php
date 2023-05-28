@extends('admin.app')
@section('body')

<hr>
<section class="content">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-lg-12">
      <table class="table table-bordered table-hover">
        <tr>
            <td colspan="3" align="center">
              <img src="{{ asset('storage/penyakit/'.$penyakit->gambar) }}" alt="{{ $penyakit->nama_penyakit }}" class="img-fluid">
            </td>
        </tr>
        <tr>
          <td style="width: 20%">Nama Penyakit</td>
          <td>:</td>
          <td>{{ $penyakit->nama_penyakit }}</td>
        </tr>
        <tr>
          <td>Penyebab</td>
          <td style="width: 2%">:</td>
          <td>{{ $penyakit->det_penyakit }}</td>
        </tr>
        <tr>
          <td>Gejala</td>
          <td>:</td>
          <td>
            @foreach ($basis as $item)
            <ul>
              <li>{{ $item->gejala->nama_gejala }}</li>
            </ul>
            @endforeach
          </td>
        </tr>
        <tr>
          <td>Solusi</td>
          <td>:</td>
          <td>{{ $penyakit->solusi_penyakit }}</td>
        </tr>
      </table>
      <a class="btn btn-warning me-3" href="{{ route('penyakit.edit', $penyakit->id) }}"><i class="fa fa-pencil"
          aria-hidden="true"></i>&nbspEdit</a>
      <a class="btn btn-danger" href="{{ route('penyakit.index') }}">
        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbspBack
      </a>
    </div>
  </div>
</section>
@endsection