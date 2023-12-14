@extends('layouts.frontend')

@section('content')
<div class="vs-wave-shape style3">
  <svg viewBox="0 0 1920 295" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="wave-path" fill-rule="evenodd" clip-rule="evenodd" d="M1920 295V202.758C1906.48 131.342 1843.63 77.168 1768.34 77.168C1739.37 77.168 1711.54 85.1814 1687.4 100.128C1650.68 38.4074 1584.56 0 1511.11 0C1412.1 0 1329.2 70.2842 1309.68 163.577C1294.03 136.928 1265.08 119 1232 119C1215.11 119 1198.88 123.673 1184.8 132.389C1163.39 96.397 1124.83 74 1082 74C1022.17 74 972.422 118.018 963.444 175.369C947.459 160.855 926.246 152 903 152C886.11 152 869.88 156.673 855.803 165.389C834.387 129.397 795.832 107 753 107C710.158 107 672.487 129.569 651.251 163.442C635.542 150.075 615.199 142 593 142C576.11 142 559.88 146.673 545.803 155.389C524.387 119.397 485.832 97 443 97C400.012 97 362.23 119.723 341.034 153.789C324.552 132.631 298.841 119 270 119C253.11 119 236.88 123.673 222.803 132.389C201.387 96.397 162.832 74 120 74C53.8333 74 0.000244141 127.833 0.000244141 194C0.000244141 194.41 0.000244141 194.835 0.0152435 195.245L0.000244141 195.248V295H1920Z" />
  </svg>
</div>
<!--==============================
Contact Area
==============================-->
<section class=" bg-smoke " data-bg-src="frontend/img/bg/bg-con-1-1.png">
  <div class="container">
      <div class="row">
          <div class="col-xl-auto col-xxl-6">
              <div class="img-box6">
                  <div class="img-1 mega-hover"><img src="frontend/img/about/con-1-1.jpg" alt="image"></div>
                  <div class="img-2 mega-hover"><img src="frontend/img/about/con-1-2.jpg" alt="image"></div>
              </div>
          </div>
          <div class="col-xl col-xxl-6 align-self-center">
              <h2 class="sec-title mb-3">Formulir Pendaftaran</h2>
              <div class="row">
                  <div class="col-sm-6">
                      <div class="list-style1">
                          <ul class="list-unstyled mb-0">
                              <li>Assign practice exercises</li>
                              <li>Track student progress</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="list-style1">
                          <ul class="list-unstyled">
                              <li>Videos and articles</li>
                              <li>Join millions of students</li>
                          </ul>
                      </div>
                  </div>
              </div>
              <form action="{{route('home.daftar')}}" method="POST" class="form-style3">
                @csrf
                  <div class="row justify-content-between">
                      <div class="col-md-6 form-group">
                          <label>Nama Lengkap Anak <span class="required">(Wajib Diisi)</span></label>
                          <input type="text" class="@error('nama_anak') {{'is-invalid'}} @enderror" name="nama_anak">
                          @error('nama_anak')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Tanggal Lahir Anak <span class="required">(Wajib Diisi)</span></label>
                          <input type="date" class="@error('tgl_lahir_anak') {{'is-invalid'}} @enderror" name="tgl_lahir_anak">
                          @error('tgl_lahir_anak')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Nama Orang Tua <span class="required">(Wajib Diisi)</span></label>
                          <input type="text" class="@error('nama_orangtua') {{'is-invalid'}} @enderror" name="nama_orangtua">
                          @error('nama_orangtua')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Alamat Lengkap<span class="required">(Wajib Diisi)</span></label>
                          <input type="text" class="@error('alamat') {{'is-invalid'}} @enderror" name="alamat">
                          @error('alamat')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Email <span class="required">(Wajib Diisi)</span></label>
                          <input type="email" class="@error('email') {{'is-invalid'}} @enderror" name="email">
                          @error('email')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group">
                          <label>Nomor Handphone</label>
                          <input type="number" name="nomor_hp" class="@error('nomor_hp') {{'is-invalid'}} @enderror">
                          @error('nomor_hp')
                              <span class="text-danger">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-auto align-self-center form-group">
                          <input type="checkbox" id="notice" name="notice">
                          <label for="notice">Saya berkomitmen mendaftarkan anak saya</label>
                      </div>
                      <div class="col-auto form-group">
                          <button class="vs-btn" type="submit">Daftar</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>

@endsection
