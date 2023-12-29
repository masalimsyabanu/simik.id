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
        <a href="{{route('dashboard.category.create')}}" class="btn btn-success"><i class="ti ti-pencil me-sm-1"></i> Edit Profil</a>


          <div>
            <label for="" class="form-label">Logo</label>
            <img src="{{Strage::url($profil->logo)}}" alt="" srcset="">
          </div>

        <div>
          <label for="" class="form-label">Judul Website</label>
          <p>{{$profil->judul_website}}</p>
        </div>

        <div>
          <label for="" class="form-label">Email Website</label>
          <p>{{$profil->website}}</p>
        </div>

        <div>
          <label for="" class="form-label">Nomor Handphone</label>
          <p>{{$profil->no_hp}}</p>
        </div>

        <div>
          <label for="" class="form-label">Deskripsi Website</label>
          <p>{{$profil->deskripsi}}</p>
        </div>

        <div>
          <label for="" class="form-label">Alamat</label>
          <p>{{$profil->alamat}}</p>
        </div>

        <hr>
          <button type="button" onclick="window.history.back()"  class="btn-sm btn btn-secondary">Kembali</button>

      </div>
    </div>
  </div>


</form>
</div>
@endsection
