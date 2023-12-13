@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Blog')

{{-- @section('content')
<h4>Home Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection --}}

@section('page-style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
@endsection

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Artikel /</span> {{$button}} Artikel
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">

        <h5 class="card-header">Formulir Artikel</h5>
        <div class="card-body">
          <form action="{{route($url, $blog->id ?? '')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @isset($blog)
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
            <label for="" class="form-label">Judul</label>
            <input type="text" name="judul" value="{{$blog->judul ?? ''}}" id="" placeholder="Judul blog" class="form-control @error('judul') {{'is-invalid'}} @enderror">
            @error('judul')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Abstrak</label>
            <textarea name="abstrak" placeholder="Masukkan abstrak blog" id="" cols="30" rows="10" class="form-control @error('abstrak') {{'is-invalid'}} @enderror">{{$blog->abstrak ?? ''}}</textarea>
            @error('abstrak')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Penulis</label>
            <input type="text" value="{{$blog->penulis ?? ''}}" name="penulis" id="" placeholder="Penulis blog" class="form-control @error('penulis') {{'is-invalid'}} @enderror">
            @error('penulis')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control @error('status') {{'is-invalid'}} @enderror" value="{{ old('status') ?? $blog->status ?? ''}}">
                <option @if(isset($blog->status) == 'aktif') {{'selected'}} @endif value="aktif">Aktif</option>
                <option @if(isset($blog->status) == 'nonaktif') {{'selected'}}  @endif value="nonaktif">Nonaktif</option>
            </select>
            @error('status')
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
        <h5 class="card-header">Konten</h5>
        <div class="card-body">
              <textarea id="summernote" name="konten"> </textarea>
            <hr>
            <button type="button" onclick="window.history.back()"  class="btn-sm btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-sm btn-success">{{$button}}</button>
        </div>
      </div>
    </div>
  </form>
  </div>


@endsection

@section('page-script')
{{-- <script src="{{ asset(mix('assets/js/forms-editors.js')) }}"></script> --}}
{{-- <script src="summernote-bs5.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
  $('#summernote').summernote({
    placeholder: 'Isi Konten Blog Disini',
    tabsize: 2,
    height: 200
  });
</script>
@endsection
