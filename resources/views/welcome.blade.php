@extends('partials.app')

@section('welcome')
<!-- Header-->
<header class="masthead d-flex align-items-center">
    <div class="container px-4 px-lg-5 text-center">
        <h1 class="text-white mb-1">Selamat Datang</h1>
        <h3 class="text-info mb-5"><em>Sistem Pakar Diagnosa Penyakit Ayam Dengan Metode Forward Channing</em></h3>
        <a class="btn btn-info btn-lg" href="#about">Lainnya</a>
    </div>
</header>
<!-- About-->
<section class="content-section bg-light" id="about">
    <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <h2 class="mb-3">Daftar Penyakit Yang Diketahui</h2>
            <div class="col-xs-16 mb-5">
                <div class="box">
                    <div class="box-body">
                        <table id="category-table" class="table table-bordered table-hover">
                            <thead style="background-color: black">
                                <tr>
                                    <th style="width: 5%" class="text-white text-center">#</th>
                                    <th style="width: 30%" class="text-white text-center">Name</th>
                                    <th class="text-white text-center">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penyakit as $index => $row)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
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
                <h2 class="mb-3">Cek Diagnosa</h2>
                <div class="box">
                    <div class="box-body">
                        <form id="gejala" method="POST" action="{{ route('diagnosa.user') }}"
                            enctype="form-data/multipart">
                            @csrf
                            <table id="category-table" class="table table-bordered table-hover">
                                <thead style="background-color:darkcyan">
                                    <tr>
                                        <th class="text-white text-center">Gejala</th>
                                        <th style="width: 30%" class="text-white text-center">Ya/Tidak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gejala as $g)
                                    <tr>
                                        <td>
                                            <label class="form-check-label" for="gejala[{{ $g->id }}]">
                                                {{ $g->nama_gejala }}
                                            </label>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" value="{{ $g->id }}"
                                                    name="cek[]" id="gejala[{{ $g->id }}]">
                                            </div>
                                        </td>



                                        {{-- <td>{{ $g->nama_gejala }}</td>
                                        <td>
                                            <select class="form-select text-center" name="cek[]" id="diagnosa">
                                                <option>Tidak</option>
                                                <option value="{{ $g->id }}">Ya</option>
                                            </select>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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