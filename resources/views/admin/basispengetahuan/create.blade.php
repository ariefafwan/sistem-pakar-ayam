@extends('admin.app')

@section('body')
<form class="col-lg-6" action="{{ route('basis.store') }}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="penyakit" class="form-label">Penyakit</label>
        <select class="form-control" name="penyakit_id" id="penyakit" autofocus required>
            <option>--Pilih Penyakit--</option>
            @foreach ($penyakit as $p)
            <option value="{{ $p->id }}">{{ $p->nama_penyakit }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="gejala" class="form-label"> Pilih Gejala</label>
        <br>
        {{-- <select class="form-control" name="gejala_id" id="gejala" required>
            <option>--Pilih Gejala--</option>
            @foreach ($gejala as $g)
            <option value="{{ $g->id }}">{{ $g->nama_gejala }}</option>
            @endforeach
        </select> --}}
        @foreach ($gejala as $row)  
        <input type="checkbox" value="{{ $row->id }}" id="gejala" name="rule[]">{{ $row->nama_gejala }}<br>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection