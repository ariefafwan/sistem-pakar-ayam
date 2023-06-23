@extends('partials.app')

@section('welcome')
<!-- Header-->
<header class="masthead d-flex align-items-center">
  <div class="container px-4 px-lg-5 text-center">
    <h1 class="text-white mb-3">Hasil Diagnosa</h1>
    <a class="btn btn-dark" href="#about">Lihat Hasil</a>
  </div>
</header>
<!-- About-->
<section class="content-section bg-light" id="about">
  <div class="container px-4 px-lg-5 text-center">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <h2>Hasil Diagnosa</h2>
      <div class="col-md-8 justify-content-center mb-3">
        <a href="{{ route('cetak.pdf') }}" class="btn btn-primary" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>&nbspCetak PDF</a>
      </div>
      <div class="col-lg-12">
        <table class="table table-bordered table-hover">
          @foreach ($hasil as $alt => $row)
          <tr>
            <td colspan="3" align="center">
              <img src="{{ asset('storage/penyakit/'.$row['gambar']) }}" style="widht: 600px; height: 300px" alt="{{ $row['nama_penyakit'] }}" class="img-fluid">
            </td>
          </tr>
          <tr>
            <td style="width: 20%">Nama Penyakit</td>
            <td style="width: 2%">:</td>
            <td>{{ $row['nama_penyakit'] }}</td>
          </tr>
          <tr>
            <td>Penyebab</td>
            <td>:</td>
            <td>{{ $row['det_penyakit'] }}</td>
          </tr>
          <tr>
            <td>Solusi</td>
            <td>:</td>
            <td>{{ $row['solusi_penyakit'] }}</td>
          </tr>
          @endforeach
        </table>
        <a class="btn btn-danger" href="{{ route('welcome') }}">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbspBack
        </a>
      </div>
    </div>
  </div>
</section>

@endsection