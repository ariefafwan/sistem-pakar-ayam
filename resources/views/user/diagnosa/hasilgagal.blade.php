@extends('user.app')

@section('body')

<hr>
<section class="content">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ route('hasil.export') }}" class="btn btn-success" target="_blank">
                <i class="fa fa-download" aria-hidden="true"></i>&nbspDownload/Export</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <div class="card">
                        <div class="card-header">
                          Hasil Diagnosa
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Kosong !</h5>
                          <p class="card-text">Riwayat Diagnosa Tidak Ditemukan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection