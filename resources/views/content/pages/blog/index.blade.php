@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Blog')

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
        <a href="{{route('dashboard.blog.create')}}" class="btn btn-primary m-3"><i class="ti ti-plus me-sm-1"></i> Tambah Data</a>
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
          @foreach($daftar_blog as $blog)
          <tr>
            <td>
              <img src="{{Storage::url($blog->thumbnail)}}" alt="">
          </td>
          <td>{{$blog->judul}}</td>
          <td>{{$blog->created_at}}</td>
          {{-- <td>
              <span class="block-email">lori@example.com</span>
          </td> --}}
          <td>{{$blog->penulis}}</td>
          <td class="desc">Samsung S8 Black</td>
          <td>
              <span class="status--process">{{$blog->status}}</span>
          </td>
            <td>
              <a href="{{route('dashboard.blog.edit', $blog->id)}}" class="btn btn-sm btn-success">Edit</a>
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal{{$blog->id}}">
                Hapus
              </button>

              <!-- Modal -->
          <div class="modal fade" id="basicModal{{$blog->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('dashboard.blog.delete', $blog->id ?? '')}}" method="post">
                @csrf
                @method('delete')
                  <div class="modal-body">
                    Yakin ingin hapus data ini?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection
