@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

{{-- @section('content')
<h4>Home Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection --}}

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Lengkapi Lampiran Data Anak</span>
  </h4>

  {{-- <div class="row">
    <div class="col-md-12">
      <a href="{{route('dashboard.blog.create')}}" class="btn btn-primary m-3"><i class="ti ti-plus me-sm-1"></i> Tambah Data Anak</a>
      <div class="card mb-4">
        <h5 class="card-header">Isi Formulir Berikut</h5>
        <div class="card-body">
          <form action="{{route($url, $calon_murid->id ?? '')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @isset($calon_murid)
              @method('put')
            @endif

            <div>
              <label for="" class="form-label">Nama Anak</label>
              <input type="text" name="nama_anak" value="{{$calon_murid->nama_anak ?? old('nama_anak') ?? ''}}" id="" placeholder="Nama anak" class="form-control @error('nama_anak') {{'is-invalid'}} @enderror">
              @error('nama_anak')
                  <span class="text-danger">
                      <strong>{{$message}}</strong>
                  </span>
              @enderror
            </div>

            <div class="mt-4">
              <label for="" class="form-label">Tanggal Lahir Anak</label>
              <input type="date" name="tgl_lahir_anak" value="{{$calon_murid->tgl_lahir_anak ?? old('tgl_lahir_anak') ?? ''}}" class="form-control @error('tgl_lahir_anak') {{'is-invalid'}} @enderror">
              @error('tgl_lahir_anak')
                  <span class="text-danger">
                      <strong>{{$message}}</strong>
                  </span>
              @enderror
            </div>

            <div class="mt-4">
              <label for="" class="form-label">Nama Orangtua</label>
              <input type="text" name="nama_orangtua" value="{{$calon_murid->nama_orangtua ?? old('nama_orangtua') ?? ''}}" id="" placeholder="Nama orang tua" class="form-control @error('nama_orangtua') {{'is-invalid'}} @enderror">
              @error('nama_orangtua')
                  <span class="text-danger">
                      <strong>{{$message}}</strong>
                  </span>
              @enderror
            </div>

            <div class="mt-4">
              <label for="" class="form-label">Nomor WhatsApp Aktif</label>
              <input type="text" name="nomor_hp" value="{{$calon_murid->nomor_hp ?? old('nomor_hp') ?? ''}}" id="" placeholder="Masukkan nomor WA aktif Anda" class="form-control @error('nomor_hp') {{'is-invalid'}} @enderror">
              <small>Contoh format : 628227331xxxx</small>
              @error('nomor_hp')
                  <span class="text-danger">
                      <strong>{{$message}}</strong>
                  </span>
              @enderror
            </div>

            <div class="mt-4">
              <label for="" class="form-label">Alamat</label>
              <textarea name="alamat" placeholder="Masukkan alamat Anda" id="" class="form-control @error('alamat') {{'is-invalid'}} @enderror">{{$calon_murid->alamat ?? ''}}</textarea>
              @error('alamat')
                  <span class="text-danger">
                      <strong>{{$message}}</strong>
                  </span>
              @enderror
            </div>

          </form>

        </div>
      </div>
    </div>
  </div> --}}

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Upload Lampiran File</h5>
        <div class="card-body">
          <form action="{{route($url, $calon_murid->id ?? '')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @isset($calon_murid)
              @method('put')
            @endif
            <div class="mt-4">
            <label for="" class="form-label">Pas Foto 3x4</label>
            <input type="file" class="form-control @error('pas_foto') {{'is-invalid'}} @enderror" name="pas_foto">
            <small>Format File : JPG, JPEG, PDF</small>
            @error('pas_foto')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <div class="mt-4">
            <label for="" class="form-label">Kartu Keluarga</label>
            <input type="file" class="form-control @error('kartu_keluarga') {{'is-invalid'}} @enderror" name="kartu_keluarga">
            <small>Format File : JPG, JPEG, PDF</small>
            @error('kartu_keluarga')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <div class="mt-4">
            <label for="" class="form-label">Akte Kelahiran</label>
            <input type="file" class="form-control @error('akte_kelahiran') {{'is-invalid'}} @enderror" name="akte_kelahiran">
            <small>Format File : JPG, JPEG, PDF</small>
            @error('akte_kelahiran')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <hr>
          {{-- <button class="btn btn-secondary"></button> --}}
        <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
      </div>
    </div>

  </div>

  <div class="row">

    {{-- Dropzone File Upload Pas Foto 3x4  --}}

{{-- <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Pas Foto 3x4</h5>
      <div class="card-body">
        <form action="/pas-foto" class="dropzone needsclick" id="pas-foto">
          <div class="dz-message needsclick">
            Upload file pas 3x4 disini
            <span class="note needsclick">(Format file : JPG, JPEG, PNG, WEBP. Maksimal besar file 2MB)</span>
          </div>
          <div class="fallback">
            <input name="pas_foto" type="file" />
          </div>
        </form>
      </div>
    </div>
</div> --}}

  {{-- Dropzone File Upload Kartu Keluarga  --}}

  {{-- <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Kartu Keluarga</h5>
      <div class="card-body">
        <form action="/kartu-keluarga" class="dropzone needsclick" id="kartu-keluarga">
          <div class="dz-message needsclick">
            Upload file kartu keluarga disini
            <span class="note needsclick">(Format file : JPG, JPEG, PNG, PDF. Maksimal besar file 2MB)</span>
          </div>
          <div class="fallback">
            <input name="kartu_keluarga" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div> --}}

  {{-- Dropzone File Upload Akter Kelahiran  --}}

  {{-- <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Akte Kelahiran</h5>
      <div class="card-body">
        <form action="/akte-kelahiran" class="dropzone needsclick" id="akte-kelahiran">
          <div class="dz-message needsclick">
            Upload file akte kelahiran disini
            <span class="note needsclick">(Format file : JPG, JPEG, PNG, PDF. Maksimal besar file 2MB)</span>
          </div>
          <div class="fallback">
            <input name="akte-kelahiran" type="file" />
          </div>
        </form>
      </div>
    </div>
  </div> --}}

    </div>


@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
@endsection

@section('page-script')
{{-- <script src="{{asset('assets/js/forms-file-upload.js')}}"></script> --}}

<script>
  // const dropzoneAkteKelahiran = document.querySelector('#akte-kelahiran');
  new Dropzone('#akte-kelahiran', {
      // previewTemplate: previewTemplate,
      parallelUploads: 1,
      maxFilesize: 5,
      addRemoveLinks: true,
      maxFiles: 1
  });

  new Dropzone('#pas-foto', {
      // previewTemplate: previewTemplate,
      parallelUploads: 1,
      maxFilesize: 5,
      addRemoveLinks: true,
      maxFiles: 1
  });

  new Dropzone('#kartu-keluarga', {
      // previewTemplate: previewTemplate,
      parallelUploads: 1,
      maxFilesize: 5,
      addRemoveLinks: true,
      maxFiles: 1
  });
</script>
@endsection
