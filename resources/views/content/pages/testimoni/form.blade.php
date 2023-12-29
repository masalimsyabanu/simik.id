@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Testimoni /</span> {{$title}}
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">

        <h5 class="card-header">Formulir Testimoni</h5>
        <div class="card-body">
          <form action="{{route($url, $testimoni->id ?? '')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @isset($testimoni)
              @method('put')
            @endif

            <div>
              <label for="" class="form-label">Foto</label>
              <input type="file" name="foto" id="" class="form-control @error('foto') {{'is-invalid'}} @enderror">
              @error('foto')
                  <span class="text-danger">
                      <strong>{{$message}}</strong>
                  </span>
              @enderror
            </div>

          <div>
            <label for="" class="form-label">Nama Tokoh</label>
            <input type="text" name="nama" value="{{$testimoni->nama ?? ''}}" id="" placeholder="Judul slider blog" class="form-control @error('nama') {{'is-invalid'}} @enderror">
            @error('nama')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Pesan</label>
            <textarea name="pesan" placeholder="Masukkan pesan" id="" class="form-control @error('pesan') {{'is-invalid'}} @enderror">{{$testimoni->pesan ?? ''}}</textarea>
            @error('pesan')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Rating</label>
            <select name="rating" id="" class="form-control @error('rating') {{'is-invalid'}} @enderror">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            @error('rating')
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
