@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Profil Website /</span> {{$title}}
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">

      <h5 class="card-header">Formulir Profil Website</h5>
      <div class="card-body">
        <form action="{{route($url, $profil->id ?? '')}}" method="POST">
          @csrf

          @isset($profil)
            @method('put')
          @endif

          <div>
            <label for="" class="form-label">Logo</label>
            <input type="file" name="logo" id="" class="form-control @error('logo') {{'is-invalid'}} @enderror">
            @error('logo')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

        <div>
          <label for="" class="form-label">Judul Website</label>
          <input type="text" name="judul_website" value="{{$profil->judul_website ?? ''}}" id="" placeholder="Judul nama website" class="form-control @error('judul_website') {{'is-invalid'}} @enderror">
          @error('judul_website')
              <span class="text-danger">
                  <strong>{{$message}}</strong>
              </span>
          @enderror
        </div>

        <div>
          <label for="" class="form-label">Email Website</label>
          <input type="email" name="email" value="{{$profil->email ?? ''}}" id="" placeholder="Nomor handphone" class="form-control @error('email') {{'is-invalid'}} @enderror">
          @error('email')
              <span class="text-danger">
                  <strong>{{$message}}</strong>
              </span>
          @enderror
        </div>

        <div>
          <label for="" class="form-label">Nomor Handphone</label>
          <input type="text" name="no_hp" value="{{$profil->no_hp ?? ''}}" id="" placeholder="Nomor handphone" class="form-control @error('no_hp') {{'is-invalid'}} @enderror">
          @error('no_hp')
              <span class="text-danger">
                  <strong>{{$message}}</strong>
              </span>
          @enderror
        </div>

        <div>
          <label for="" class="form-label">Deskripsi Website</label>
          <textarea name="deskripsi" placeholder="Masukkan deskripsi website" id="" class="form-control @error('deskripsi') {{'is-invalid'}} @enderror">{{$profil->deskripsi ?? ''}}</textarea>
          @error('deskripsi')
              <span class="text-danger">
                  <strong>{{$message}}</strong>
              </span>
          @enderror
        </div>

        <div>
          <label for="" class="form-label">Alamat</label>
          <textarea name="alamat" placeholder="Masukkan alamat website" id="" class="form-control @error('alamat') {{'is-invalid'}} @enderror">{{$profil->alamat ?? ''}}</textarea>
          @error('alamat')
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
