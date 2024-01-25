<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalonMurid;
use Auth;
use Image;
use Str;

class CalonMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      if(Auth::user()->roles == 'admin'){

          $daftar_calon_murid = CalonMurid::get();

        }else if(Auth::user()->roles == 'guest'){

          $daftar_calon_murid = CalonMurid::where('user_id', Auth::user()->id)->get();
        }

        return view('content.pages.calon-murid.index', compact('daftar_calon_murid'));
    }

    public function daftarTahapKedua(CalonMurid $calon_murid)
    {
      $title = 'Pendaftaran Tahap Kedua';
      $url = 'dashboard.calon-murid.tahap-kedua.update';
      $button = 'Simpan';
      return view('content.pages.calon-murid.daftar-kedua', compact('calon_murid','button', 'title', 'url'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    public function lampiranBerkas(CalonMurid $calon_murid){
      $title = 'Lampiran Berkas Anak';
      $url = 'dashboard.calon-murid.tahap-kedua.update';
      $button = 'Simpan';
      return view('content.pages.calon-murid.lampiran-berkas', compact('calon_murid','button', 'title', 'url'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalonMurid $calon_murid)
    {
      $input = $request->all();

      $rules = [
        'nama_anak' => ['required', 'string'],
        'nama_orangtua' => ['required', 'string'],
        'tgl_lahir_anak' => ['required'],
        'alamat' => ['required'],
        'nomor_hp' => ['required', 'regex:/^(^\+628\s?|^628)(\d{3,4}?){2}\d{2,4}$/','max:13'],
        'pas_foto' => ['file', 'mimes:jpeg,jpg,pdf', 'required', 'max:1024'],
        'kartu_keluarga' => ['file', 'mimes:jpeg,jpg,pdf', 'required'],
        'akte_kelahiran' => ['file', 'mimes:jpeg,jpg,pdf', 'required'],
      ];

      $messages = [
        'nama_anak.required' => 'Nama anak wajib diisi',
        'nama_orangtua.required' => 'Nama anak wajib diisi',
        'nomor_hp.required' => 'Nomor handphone wajib diisi',
        'nomor_hp.regex' => 'Format nomor handphone salah. Contoh: 6282273318016',
        'nomor_hp.max' => 'Nomor handphone maksimal 13 digit',
        'tgl_lahir_anak.required' => 'Tanggal lahir anak wajib diisi',
        'alamat.required' => 'Alamat lengkap wajib diisi',
        'pas_foto.required' => 'Pas foto wajib diisi',
        'pas_foto.mimes' => 'Pas foto harus berformat JPEG/JPG/PDF',
        'pas_foto.max' => 'Pas foto maksimal berukuran 1MB',
        'kartu_keluarga.required' => 'Pas foto wajib diisi',
        'kartu_keluarga.mimes' => 'Pas foto harus berformat JPEG/JPG/PDF',
        'akte_kelahiran.required' => 'Pas foto wajib diisi',
        'akte_kelahiran.mimes' => 'Pas foto harus berformat JPEG/JPG/PDF',
      ];
      $validator = Validator::make($input, $rules, $messages)->validate();

      $calon_murid->nama_anak = $request->nama_anak;
      $calon_murid->nama_orangtua = $request->nama_orangtua;
      $calon_murid->tgl_lahir_anak = $request->tgl_lahir_anak;
      $calon_murid->nomor_hp = $request->nomor_hp;
      $calon_murid->alamat = $request->alamat;

      if($request->hasFile('pas_foto')){
        $pas_foto = $request->file('pas_foto');
        $filename = 'Pas Foto'.$calon_murid->nama_anak.$pas_foto->getClientOriginalExtension();
        Storage::disk('local')->putFileAs('public/calon_murid/pas_foto', $pas_foto, $filename);
        $calon_murid->pas_foto = $filename;
      }

      if($request->hasFile('kartu_keluarga')){
        $kartu_keluarga = $request->file('kartu_keluarga');
        $filename = 'Kartu Keluarga'.$calon_murid->nama_anak.$kartu_keluarga->getClientOriginalExtension();
        Storage::disk('local')->putFileAs('public/calon_murid/kartu_keluarga', $kartu_keluarga, $filename);
        $calon_murid->kartu_keluarga = $filename;
      }

      if($request->hasFile('akte_kelahiran')){
        $akte_kelahiran = $request->file('akte_kelahiran');
        $filename = 'Akte Kelahiran'.$calon_murid->nama_anak.$akte_kelahiran->getClientOriginalExtension();
        Storage::disk('local')->putFileAs('public/calon_murid/akte_kelahiran', $akte_kelahiran, $filename);
        $calon_murid->akte_kelahiran = $filename;
      }

      $calon_murid->save();

      return redirect()->route('dashboard.calon-murid')
      ->with('messages', __('pesan.update', ['module' => $request->input('nama_anak')]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
