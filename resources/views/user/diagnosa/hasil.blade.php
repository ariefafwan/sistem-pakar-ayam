@extends('user.app')

@section('body')
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 mb-3">
          <a href="{{ route('cetak.pdf') }}" class="btn btn-primary" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>&nbspCetak PDF</a>
        </div>
      </div>
      <div class="row">
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
          <a class="btn btn-sm btn-danger mt-3" href="{{ route('diagnosauser.create') }}">Kembali</a>
        </div>
      </div>
@endsection