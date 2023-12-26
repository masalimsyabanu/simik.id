@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Slider /</span> {{$title}}
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">

        <h5 class="card-header">Formulir Kategori Blog</h5>
        <div class="card-body">
          <form action="{{route($url, $slider->id ?? '')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @isset($slider)
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
            <label for="" class="form-label">Judul Slider</label>
            <input type="text" name="judul" value="{{$slider->judul ?? ''}}" id="" placeholder="Judul slider blog" class="form-control @error('judul') {{'is-invalid'}} @enderror">
            @error('judul')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Deksripsi Slider</label>
            <textarea name="deskripsi" placeholder="Masukkan deskripsi slider" id="" class="form-control @error('deskripsi') {{'is-invalid'}} @enderror">{{$slider->deskripsi ?? ''}}</textarea>
            @error('deskripsi')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">URL</label>
            <input type="text" name="url" value="{{$slider->url ?? ''}}" id="" placeholder="Judul slider blog" class="form-control @error('url') {{'is-invalid'}} @enderror">
            @error('url')
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
