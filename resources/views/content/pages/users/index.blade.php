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
    <span class="text-muted fw-light">User Management</span>
  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    {{-- <button class="dt-button create-new btn btn-primary"><span><span class="d-none d-sm-inline-block"></span></span></button> --}}

    <h5 class="card-header">Data User</h5>

    <div class="table-responsive text-nowrap">
        <a href="{{route('dashboard.user.create')}}" class="btn btn-primary m-3"><i class="ti ti-plus me-sm-1"></i> Tambah Data</a>
      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($daftar_user as $user)

          <tr>
          <td>{{$user->nama}}</td>
          <td>{{$user->username}}</td>
          {{-- <td>
              <span class="block-email">lori@example.com</span>
          </td> --}}
          <td class="desc">{{$user->email}}</td>
          <td>{{ucfirst($user->roles)}}</td>
          <td>
              <span class="status--process">{{ucfirst($user->status)}}</span>
          </td>
          @if(Auth::user()->id != $user->id)
            <td>
              <a href="{{route('dashboard.user.edit', $user->id)}}" class="btn btn-sm btn-success">Edit</a>
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal{{$user->id}}">
                Hapus
              </button>

              <!-- Modal -->
          <div class="modal fade" id="basicModal{{$user->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('dashboard.user.delete', $user->id ?? '')}}" method="post">
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
            @endif
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection
