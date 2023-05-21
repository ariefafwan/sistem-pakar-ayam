@extends('admin.app')

@section('body')
<form class="col-lg-6" action="{{ route('basis.store') }}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="penyakit" class="form-label">Penyakit</label>
        <select class="form-control" name="penyakit_id" id="penyakit" required>
            <option>--Pilih Penyakit--</option>
            @foreach ($penyakits as $p)
            <option value="{{ $p->id }}">{{ $p->nama_penyakit }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="" class="form-label">Gejala</label>
        <div class="col-12 d-flex flex-row">
            @foreach ($gejalas as $row)
            <div class="col-3">
                <label for="gejala[{{ $row->id }}]" class="form-label">{{ $row->nama_gejala }}</label>
                <input type="checkbox" name="gejala_id[]" id="gejala[{{ $row->id }}]" value="{{ $row->id }}">
            </div>
            @endforeach
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection