@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', $title)

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Testimoni </span>
  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    {{-- <button class="dt-button create-new btn btn-primary"><span><span class="d-none d-sm-inline-block"></span></span></button> --}}

    <h5 class="card-header">Tabel Testimoni</h5>

    <div class="table-responsive text-nowrap">
      <a href="{{route('dashboard.testimoni.create')}}" class="btn btn-primary m-3"><i class="ti ti-plus me-sm-1"></i> Tambah Data</a>

      @if(count($daftar_testimoni) > 0)
      <table class="table">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Pesan</th>
            <th>Rating</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($daftar_testimoni as $testimoni)
          <tr>
          <td><img src="{{Storage::url($testimoni->foto)}}" alt="" class="img-fluid"></td>
          <td>{{$testimoni->pesan}}</td>
          <td class="desc">{{$testimoni->rating}}</td>
            <td>
              <a href="{{route('dashboard.testimoni.edit', $testimoni->id)}}" class="btn btn-sm btn-success">Edit</a>
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal{{$testimoni->id}}">
                Hapus
              </button>

              <!-- Modal -->
                    <div class="modal fade" id="basicModal{{$testimoni->id}}" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="{{route('dashboard.testimoni.delete', $testimoni->id ?? '')}}" method="post">
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
        <h4 class="text-center">Testimoni Kosong</h4>
      @endif
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection
