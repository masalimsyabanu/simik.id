@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'User Management')

{{-- @section('content')
<h4>Home Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection --}}

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">User Management /</span> {{$button}} Artikel
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">

        <h5 class="card-header">Form Data User</h5>
        <div class="card-body">
          <form action="{{route($url, $user->id ?? '')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @isset($user)
              @method('put')
            @endif

          {{-- <div>
            <label for="" class="form-label">Foto</label>
            <input type="file" name="foto" id="" class="form-control @error('foto') {{'is-invalid'}} @enderror">
            @error('foto')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div> --}}

          <div>
            <label for="" class="form-label">Nama</label>
            <input type="text" name="nama" value="{{$user->nama ?? ''}}" id="" placeholder="Nama user" class="form-control @error('nama') {{'is-invalid'}} @enderror">
            @error('nama')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>


          <div>
            <label for="" class="form-label">Username</label>
            <input type="text" value="{{$user->penulis ?? ''}}" name="username" id="" placeholder="Nama pengguna/username user" class="form-control @error('username') {{'is-invalid'}} @enderror">
            @error('username')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control @error('status') {{'is-invalid'}} @enderror" value="{{ old('status') ?? $user->status ?? ''}}">
                <option @if(isset($user->status) == 'aktif') {{'selected'}} @endif value="aktif">Aktif</option>
                <option @if(isset($user->status) == 'nonaktif') {{'selected'}}  @endif value="nonaktif">Nonaktif</option>
            </select>
            @error('status')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <hr>
          <button type="button" onclick="window.history.back()"  class="btn-sm btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-sm btn-success">{{$button}}</button>
          </form>
        </div>
      </div>
    </div>

  </div>


@endsection
