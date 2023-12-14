@extends('layouts.frontend')

@section('content')
<div class="vs-wave-shape style3 mt-4">
  <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
  </svg>
</div>
<!--==============================
    Error Area
    ==============================-->
    <section class="vs-error-wrapper space-top space-extra-bottom" data-bg-src="{{asset('frontend/img/bg/error-bg.png')}}">
      <div class="container">
          <div class="row gx-100 text-center text-lg-start">
              <div class="col-lg-5 col-xl-auto">
                  <img src="{{asset('logo/logo-simik.jpg')}}" style="width: 200px" alt="shape">
              </div>
              <div class="col-lg-7 col-xl">
                  <div class="error-content">
                      <h1 class="error-number">Terima Kasih</h1>
                      <h2 class="error-title">Pendaftaran Tahap Awal Berhasil</h2>
                      <p class="error-text">Tunggu tim SIMIK japri melalui WA untuk mengarahkan tahap pendaftaran kedua.</p>
                      <form action="#" class="search-inline">
                          {{-- <input type="text" class="form-control" placeholder="Search Keyword...."> --}}
                          {{-- <button><i class="far fa-search"></i></button> --}}
                      </form>
                      <a href="{{route('home.index')}}" class="vs-btn style4">Kembali ke Halaman utama</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
