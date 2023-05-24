@extends('partials.app')

@section('welcome')
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <h2>Hasil Diagnosa</h2>
                    <div class="col-lg-12">
                        <table class="table table-bordered table-hover">
                          @foreach ($hasil as $row)
                            <tr>
                            <td>Penyakit</td>
                            <td>:</td>
                            <td>{{ $penyakit[nama_penyakit] }}</td>
                            </tr>
                            <tr>
                            <td>Penyebab</td>
                            <td>:</td>
                            <td>{{ $row[det_penyakit] }}</td>
                            </tr>
                            <tr>
                            <td>Solusi</td>
                            <td>:</td>
                            <td>{{ $row[solusi_penyakit] }}</td>
                            </tr>
                          @endforeach
                        </table>
                        <a class="btn btn-sm btn-danger mt-3" href="{{ route('/') }}">Kembali</a>
                      </div>
                </div>
            </div>
        </section>
        
@endsection  
