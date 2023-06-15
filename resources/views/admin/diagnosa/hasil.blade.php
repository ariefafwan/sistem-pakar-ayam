@extends('admin.app')

@section('body')
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">
          @if ($rule->count() >= 1)

          <table class="table table-bordered table-hover">
            @foreach ($rule as $hasil)
              <tr>
                <td colspan="3" align="center">
                  <img src="{{ asset('storage/penyakit/'.$hasil->penyakit->gambar) }}" alt="{{ $hasil->nama_penyakit }}" style="widht: 600px; height: 300px" class="img-fluid">
                </td>
              </tr>
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
          @else
          <div class="card">
            <div class="card-header">
              Hasil Diagnosa
            </div>
            <div class="card-body">
              <h5 class="card-title">Gagal !</h5>
              <p class="card-text">Tidak Dapat Menemukan Hasil Diagnosa Yang Sesuai</p>
            </div>
          </div>
          @endif
          <a class="btn btn-sm btn-danger mt-3" href="{{ route('diagnosa.create') }}">Kembali</a>
        </div>
      </div>
@endsection