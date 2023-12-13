@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

{{-- @section('content')
<h4>Home Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection --}}

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Basic Tables
  </h4>
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    {{-- <button class="dt-button create-new btn btn-primary"><span><span class="d-none d-sm-inline-block"></span></span></button> --}}
    
    <h5 class="card-header">Table Basic</h5>
    
    <div class="table-responsive text-nowrap">
        <a href="" class="btn btn-primary m-3"><i class="ti ti-plus me-sm-1"></i> Tambah Data</a>    
      <table class="table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Judul Blog</th>
            <th>Tanggal</th>
            <th>Nama Penulis</th>
            <th>Kategori</th>
            <th>status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          
          <tr>
            <td><i class="ti ti-brand-bootstrap ti-lg text-primary me-3"></i> <span class="fw-medium">Bootstrap Project</span></td>
            <td>Jerry Milton</td>
            <td>
              10-10-23
            </td>
            <td>John Doe</td>
            <td>Blog</td>
            <td><span class="badge bg-label-warning me-1">Pending</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-2"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
  
@endsection
