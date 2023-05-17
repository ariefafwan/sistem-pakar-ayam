@extends('admin.app')

@section('body')
<form class="col-lg-6" action="{{ route('basis.update', $basis->id) }}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="penyakit" class="form-label">Penyakit</label>
        <select class="form-control" name="penyakit_id" id="penyakit" autofocus required>
            <option value="{{ $basis->penyakit_id }}">{{ $basis->penyakit->nama_penyakit }}</option>
            @foreach ($penyakit as $p)
            <option value="{{ $p->id }}">{{ $p->nama_penyakit }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="gejala" class="form-label">Gejala</label>
        <select class="form-control" name="gejala_id" id="gejala" required>
            <option value="{{ $basis->gejala_id }}">{{ $basis->gejala->nama_gejala }}</option>
            @foreach ($gejala as $g)
            <option value="{{ $g->id }}">{{ $g->nama_gejala }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection