@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Blog /</span> {{$title}}
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">

        <h5 class="card-header">Formulir Kategori Blog</h5>
        <div class="card-body">
          <form action="{{route($url, $kategori->id ?? '')}}" method="POST">
            @csrf

            @isset($kategori)
              @method('put')
            @endif

          <div>
            <label for="" class="form-label">Nama Kategori</label>
            <input type="text" name="nama" value="{{$kategori->nama ?? ''}}" id="" placeholder="Judul kategori blog" class="form-control @error('judul') {{'is-invalid'}} @enderror">
            @error('judul')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Keterangan Kategori</label>
            <textarea name="keterangan" placeholder="Masukkan keterangan kategori blog" id="" class="form-control @error('keterangan') {{'is-invalid'}} @enderror">{{$kategori->keterangan ?? ''}}</textarea>
            @error('keterangan')
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
