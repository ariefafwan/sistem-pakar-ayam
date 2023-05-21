@extends('admin.app')

@section('body')
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form method="POST" action="{{ route('diagnosa.store') }}" enctype="form-data/multipart">
                @csrf
                @foreach ($gejala as $row)  
                <input type="checkbox" value="{{ $row->id }}" name="cek[]">{{ $row->nama_gejala }}<br>
                @endforeach
                <input type="submit" class="btn btn-medium btn-primary" value="Cek Diagnosa" name="proses"/>
            </form>
          </div>
        </div>
<br/><br/>
@endsection