@extends('admin.app')
@section('body')

<hr>
<section class="content">
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
          </td>
          </tr>
          <tr>
          <td>Solusi</td>
          <td>:</td>
          <td>{{ $penyakit->solusi_penyakit }}</td>
          </tr>
          </table>
          <a class="btn btn-sm btn-danger" href="{{ route('penyakit.index') }}">Kembali</a>
          <a class="btn btn-sm btn-warning" href="{{ route('penyakit.edit', $penyakit->id) }}">Edit</a>
        </div>
      </div>
</section>
@endsection