@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

{{-- @section('content')
<h4>Home Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection --}}

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Pendaftaran Tahap Kedua</span>
  </h4>

  <div class="row">
    <div class="col-md-12">
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

        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Isi Lampiran Dokumen dan Foto Dibawah Ini</h5>
        <div class="card-body">
          <div>
            <label for="" class="form-label">Pas Foto 3x4</label>
            <input type="file" name="pas_foto" id="" value="{{$calon_murid->pas_foto ?? old('pas_foto') ?? ''}}"  class="form-control @error('pas_foto') {{'is-invalid'}} @enderror">
            <small>Pas foto berformat file : jpg, jpeg</small>
            @error('pas_foto')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div class="mt-4">
            <label for="" class="form-label">Akte Kelahiran</label>
            <input type="file" name="akte_kelahiran" id="" value="{{$calon_murid->akte_kelahiran ?? old('akte_kelahiran') ?? ''}}"  class="form-control @error('akte_kelahiran') {{'is-invalid'}} @enderror">
            <small>Akte kelahiran berformat : pdf, jpg, jpeg</small>
            @error('akte_kelahiran')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div class="mt-4">
            <label for="" class="form-label">Kartu Keluarga</label>
            <input type="file" name="kartu_keluarga" id="" value="{{$calon_murid->kartu_keluarga ?? old('kartu_keluarga') ?? ''}}"  class="form-control @error('kartu_keluarga') {{'is-invalid'}} @enderror">
            <small>Akte kelahiran berformat : pdf, jpg, jpeg</small>
            @error('kartu_keluarga')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

            <hr>
            <button type="button" onclick="window.history.back()"  class="btn-sm btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-sm btn-success">{{$button}}</button>
        </div>
      </div>
    </div>
  </form>
  </div>


@endsection
