@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Tambah Data Anak')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Pendaftaran Tahap Kedua</span>
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <a href="{{route('dashboard.blog.create')}}" class="btn btn-primary m-3"><i class="ti ti-plus me-sm-1"></i> Tambah Data Anak</a>
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
</div>
@endsection
