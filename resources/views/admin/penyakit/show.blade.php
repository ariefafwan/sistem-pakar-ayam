@extends('admin.app')

@section('body')

<div class="container">

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered table-hover">
          <tr>
          <td>Penyakit</td>
          <td>:</td>
          <td>{{ $penyakit->nama_penyakit }}</td>
          </tr>
          <tr>
          <td>Penyebab</td>
          <td>:</td>
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
                    <a href="" class="btn btn-sm btn-success" target="_blank">Tambah Gejala</a>
            {{-- @foreach ($basis as $item)
            @php
                    $a = explode("-", $item);
                    $i = 0;
                    if (isset($a[$i])) {
                        $cek = $gejala->WHERE('id', $a[$i++]);
                        echo $i++;
                        foreach ($cek as $value) {
                            echo $value->nama_gejala;
                        }
                    } else {
                        echo "Belum Menambahkan Gejala";
                    }
            @endphp
            @endforeach --}}
               </td>
          </tr>
          <tr>
          <td>Solusi</td>
          <td>:</td>
          <td>{{ $penyakit->solusi_penyakit }}</td>
          </tr>
          </table>
          <a class="btn btn-sm btn-danger" href="{{ route('penyakit.index') }}">Kembali</a>
        </div>
      </div>
@endsection