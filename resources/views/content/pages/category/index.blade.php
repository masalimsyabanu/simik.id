@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Blog /</span> Kategori Blog
  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    {{-- <button class="dt-button create-new btn btn-primary"><span><span class="d-none d-sm-inline-block"></span></span></button> --}}

    <h5 class="card-header">Tabel Kategori Blog</h5>

    <div class="table-responsive text-nowrap">
      <button type="button" onclick="window.history.back()" class="btn btn-secondary m-2"> Kembali</button>
      <a href="{{route('dashboard.category.create')}}" class="btn btn-primary"><i class="ti ti-plus me-sm-1"></i> Tambah Data</a>

      @if(count($daftar_kategori) > 0)
      <table class="table">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($daftar_kategori as $kategori)
          <tr>
          <td>{{$kategori->nama}}</td>
          <td class="desc">{{$kategori->keterangan}}</td>
            <td>
              <a href="{{route('dashboard.category.edit', $kategori->id)}}" class="btn btn-sm btn-success">Edit</a>
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal{{$kategori->id}}">
                Hapus
              </button>

              <!-- Modal -->
          <div class="modal fade" id="basicModal{{$kategori->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('dashboard.category.delete', $kategori->id ?? '')}}" method="post">
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
      @else
        <h4 class="text-center">Kategori Blog Kosong</h4>
      @endif
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection
