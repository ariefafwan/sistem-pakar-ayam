@extends('partials.app')

@section('welcome')
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
          <div class="container px-4 px-lg-5 text-center">
              <h1 class="text-white mb-3">Hasil Diagnosa</h1>
              <a class="btn btn-dark" href="#about">Lihat Hasil</a>
          </div>
      </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <h2>Hasil Diagnosa</h2>
                        <div class="card">
                          <div class="card-header">
                            Hasil Diagnosa
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Gagal !</h5>
                            <p class="card-text">Tidak Dapat Menemukan Diagnosa Yang Sesuai</p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>
        
@endsection  
