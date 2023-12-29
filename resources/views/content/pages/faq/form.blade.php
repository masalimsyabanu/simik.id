@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">FAQ /</span> {{$title}}
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">

        <h5 class="card-header">Formulir FAQ</h5>
        <div class="card-body">
          <form action="{{route($url, $faq->id ?? '')}}" method="POST">
            @csrf

            @isset($faq)
              @method('put')
            @endif

          <div>
            <label for="" class="form-label">Pertanyaan</label>
            <input type="text" name="pertanyaan" value="{{$faq->pertanyaan ?? ''}}" id="" placeholder="Masukkan pertanyaan" class="form-control @error('pertanyaan') {{'is-invalid'}} @enderror">
            @error('pertanyaan')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Jawaban</label>
            <textarea name="jawaban" placeholder="Masukkan jawaban" id="" class="form-control @error('jawaban') {{'is-invalid'}} @enderror">{{$faq->jawaban ?? ''}}</textarea>
            @error('jawaban')
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
