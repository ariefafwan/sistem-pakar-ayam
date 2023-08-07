@extends('user.app')

@section('body')
<div class="form-check-diagnosa col-lg-12 shadow-lg rounded p-3">
  <form class="col-lg-12" action="{{ route('diagnosauser.store') }}" method="post">
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
        <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbspCek Diagnosa
      </button>
    </div>
  </form>
</div>
@endsection