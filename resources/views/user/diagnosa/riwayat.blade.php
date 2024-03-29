@extends('user.app')

@section('body')

<hr>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    @if ($hasil->count() >= '1')
                    <table id="category-table" class="table table-bordered table-hover">
                        <thead style="background-color: rgb(0, 0, 0)">
                            <tr>
                                <th style="width: 5%" class="text-white text-center">#</th>
                                <th style="width: 30%" class="text-white text-center">Hasil Diagnosa</th>
                                <th class="text-white text-center">Tanggal Diagnosa</th>
                                <th class="text-white text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hasil as $index => $row)
                            <tr>
                                <th class="text-center">{{ $loop->iteration }}</th>
                                <td>{{ $row->penyakit->nama_penyakit }}</td>
                                <td>{{ $row->created_at->format('d-m-Y') }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="event.preventDefault();
                                                document.getElementById('destroyhasil-delete-form-{{$row->id}}').submit();">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    <form id="destroyhasil-delete-form-{{$row->id}}"
                                        action="{{ route('destroyhasil',$row->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 text-center">
                        <div class="text-center mb-3">
                            Halaman: {{ $hasil->currentPage() }}
                            <br>
                            Jumlah Data: {{ $hasil->total() }}
                            <br>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $hasil->links() }}
                        </div>
                    </div>
                    @else
                    <div class="card">
                        <div class="card-header">
                          Hasil Diagnosa
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Kosong !</h5>
                          <p class="card-text">Riwayat Diagnosa Tidak Ditemukan</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection