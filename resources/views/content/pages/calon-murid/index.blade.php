@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Calon Murid')

{{-- @section('content')
<h4>Home Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection --}}

@section('content')

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Calon Murid</span>
  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    {{-- <button class="dt-button create-new btn btn-primary"><span><span class="d-none d-sm-inline-block"></span></span></button> --}}

    <h5 class="card-header">Data Calon Murid</h5>

    <div class="table-responsive text-nowrap">
        {{-- <a href="{{route('dashboard.user.create')}}" class="btn btn-primary m-3"><i class="ti ti-plus me-sm-1"></i> Tambah Data</a> --}}
      <table class="table">
        <thead>
          <tr>
            <th>Nama Anak</th>
            <th>Tanggal Lahir Anak</th>
            <th>Nama Orang Tua</th>
            <th>Nomor WA</th>
            {{-- <th>Status</th> --}}
            <th>Link Tahap Kedua</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($daftar_calon_murid as $calon_murid)
          <tr>
          <td>{{$calon_murid->nama_anak}}</td>
          <td>{{$calon_murid->tgl_lahir_anak}}</td>
          <td class="desc">{{$calon_murid->nama_orangtua}}</td>
          <td>{{ucfirst($calon_murid->nomor_hp)}}</td>

            <td>
              {{-- <a href="{{route('dashboard.user.edit', $calon_murid->id)}}" class="btn btn-sm btn-success">Edit</a> --}}
              {{-- <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal{{$calon_murid->id}}"> Hapus</button> --}}
              <input type="text" class="form-control" value="https://simik.id/dashboard/daftar-tahap-kedua/{{$calon_murid->id}}" id="myInput{{$calon_murid->id}}">
              <button class="btn btn-sm btn-secondary" type="button" onclick="myFunction()">Copy link</button>

              <!-- Modal -->
          <div class="modal fade" id="basicModal{{$calon_murid->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('dashboard.user.delete', $calon_murid->id ?? '')}}" method="post">
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

          <script>
            function myFunction() {
          // Get the text field
          var copyText = document.getElementById("myInput{{$calon_murid->id}}");

          // Select the text field
          copyText.select();
          copyText.setSelectionRange(0, 99999); // For mobile devices

           // Copy the text inside the text field
          navigator.clipboard.writeText(copyText.value);

          // Alert the copied text
          alert("Copied the text: " + copyText.value);
        }
          </script>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection

{{-- @section('page-script')
  <script>
    function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
  </script>
@endsection --}}
