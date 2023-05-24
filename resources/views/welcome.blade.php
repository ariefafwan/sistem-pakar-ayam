@extends('partials.app')

@section('welcome')
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <h2>Daftar Penyakit Yang Diketahui</h2>
                    <div class="col-xs-16 mb-5">
                        <div class="box">
                            <div class="box-body">
                                <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Kode Penyakit</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penyakit as $index => $row)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $row->kd_penyakit }}</td>
                                            <td>{{ $row->nama_penyakit }}</td>
                                            <td>{{ $row->det_penyakit }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h2>Diagnosa</h2>
                        <div class="box">
                            <div class="box-body">
                                <form method="POST" action="{{ route('diagnosa.user') }}" enctype="form-data/multipart">
                                    @csrf
                                    @foreach ($gejala as $row)  
                                    <input type="checkbox" value="{{ $row->id }}" name="cek[]">{{ $row->nama_gejala }}<br>
                                    @endforeach
                                    <button type="submit" class="btn btn-medium btn-primary">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        Diagnosa
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection  
