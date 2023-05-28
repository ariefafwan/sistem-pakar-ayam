@extends('admin.app')

@section('body')

<div class="form-create-basis col-lg-8 shadow-lg rounded p-3">
    <a href="{{ route('basis.index') }}" class="btn btn-danger my-3">
        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbspBack
    </a>
    <form class="col-lg-12" action="{{ route('basis.store') }}" method="post">
        @csrf
        <table class="table table-bordered table-hover">
            <thead style="background-color: darkcyan">
                <tr>
                    <th colspan="2" class="text-white text-center">Penyakit</th>
                </tr>
            </thead>
            <tbody>
                <td colspan="2">
                    <select class="form-control" name="penyakit_id" id="penyakit" required>
                        <option>--Pilih Penyakit--</option>
                        @foreach ($penyakits as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_penyakit }}</option>
                        @endforeach
                    </select>
                </td>
            </tbody>
            <thead style="background-color: darkcyan">
                <tr>
                    <th class="text-white text-center">Gejala</th>
                    <th style="width: 30%" class="text-white text-center">Check</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gejalas as $g)
                <tr>
                    <td>
                        <label class="form-check-label" for="gejala[{{ $g->id }}]">
                            {{ $g->nama_gejala }}
                        </label>
                    </td>
                    <td>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input" type="checkbox" value="{{ $g->id }}" name="gejala_id[]"
                                id="gejala[{{ $g->id }}]">
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
@endsection