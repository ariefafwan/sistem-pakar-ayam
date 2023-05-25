@extends('admin.app')

@section('body')
<div class="form-check-diagnosa col-lg-8 shadow-lg rounded p-3">
  <form class="col-lg-12" action="{{ route('diagnosa.store') }}" method="post">
    @csrf
    <table class="table table-bordered table-hover">
      <thead style="background-color: darkcyan">
        <tr>
          <th class="text-white text-center">Gejala</th>
          <th style="width: 30%" class="text-white text-center">Check</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($gejala as $row)
        <tr>
          <td>
            <label class="form-check-label" for="gejala[{{ $row->id }}]">
              {{ $row->nama_gejala }}
            </label>
          </td>
          <td>
            <div class="form-check d-flex justify-content-center">
              <input class="form-check-input" type="checkbox" value="{{ $row->id }}" name="cek[]"
                id="gejala[{{ $row->id }}]">
            </div>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
    <div class="button d-flex justify-content-center">
      <button type="submit" class="btn btn-success">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbspSubmit
      </button>
    </div>
  </form>
</div>







{{-- <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form method="POST" action="{{ route('diagnosa.store') }}" enctype="form-data/multipart">
        @csrf
        @foreach ($gejala as $row)
        <input type="checkbox" value="{{ $row->id }}" name="cek[]">{{ $row->nama_gejala }}<br>
        @endforeach
        <input type="submit" class="btn btn-medium btn-primary" value="Cek Diagnosa" name="proses" />
      </form>
    </div>
  </div>
</div> --}}
@endsection