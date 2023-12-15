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
    <span class="text-muted fw-light">User Management /</span> {{$button}} User
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
            <input type="text" value="{{$user->username ?? ''}}" name="username" id="" placeholder="Nama pengguna/username user" class="form-control @error('username') {{'is-invalid'}} @enderror">
            @error('username')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="" class="form-label">Email</label>
            <input type="email" value="{{$user->email ?? ''}}" name="email" id="" placeholder="Email user" class="form-control @error('email') {{'is-invalid'}} @enderror">
            @error('email')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div class="form-password-toggle">
            <label for="" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" name="password" value="{{$user->password ?? ''}}" class="form-control @error('password') {{'is-invalid'}} @enderror" id="basic-default-password32" placeholder="············" aria-describedby="basic-default-password">
              <span class="input-group-text cursor-pointer" id="basic-default-password"><i class="ti ti-eye-off"></i></span>

          </div>
                @error('password')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>

          <div>
            <label for="status" class="form-label">Role</label>
            <select name="roles" id="roles" class="form-control @error('roles') {{'is-invalid'}} @enderror" value="{{ old('roles') ?? $user->roles ?? ''}}">
                <option @if(isset($user->roles) == 'guest') {{'selected'}} @endif value="guest">Guest</option>
                <option @if(isset($user->roles) == 'editor') {{'selected'}}  @endif value="editor">Editor</option>
                <option @if(isset($user->roles) == 'guru') {{'selected'}}  @endif value="guru">Guru</option>
                <option @if(isset($user->roles) == 'admin') {{'selected'}}  @endif value="admin">Admin</option>
            </select>
            @error('roles')
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
