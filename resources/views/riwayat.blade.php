@extends('partials.app')

@section('welcome')
<!-- Header-->
<header class="masthead d-flex align-items-center">
  <div class="container px-4 px-lg-5 text-center">
    <h1 class="text-white mb-3">Riwayat Diagnosa</h1>
    <a class="btn btn-dark" href="#about">Lihat Riwayat</a>
  </div>
</header>
<!-- About-->
<section class="content-section bg-light" id="about">
  <div class="container px-4 px-lg-5 text-center">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <h2>Riwayat Hasil Diagnosa</h2>
        <div class="col-xs-16 mb-5">
            <div class="box">
                <div class="box-body">
                    @if ($hasil->count() >= '1')
                    <table id="category-table" class="table table-bordered table-hover">
                        <thead style="background-color: black">
                            <tr>
                                <th style="width: 5%" class="text-white text-center">#</th>
                                <th style="width: 30%" class="text-white text-center">Hasil Diagnosa</th>
                                <th class="text-white text-center">Tanggal Diagnosa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hasil as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $row->penyakit->nama_penyakit }}</td>
                                <th>{{ $row->created_at->format('d-m-Y') }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="card">
                        <div class="card-header">
                          Hasil Diagnosa
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Gagal !</h5>
                          <p class="card-text">Riwayat Diagnosa Tidak Ditemukan</p>
                        </div>
                    </div>
                    @endif
                </div>
                <a class="btn btn-danger" href="{{ route('welcome') }}">
                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbspBack
                </a>
            </div>
        </div>
    </div>
  </div>
</section>

@endsection