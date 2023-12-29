<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;
use Validator;
use Image;
use Str;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Testimoni";

        $daftar_testimoni = Testimoni::get();

        return view('content.pages.testimoni.index', compact('daftar_testimoni', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Testimoni";

        $button = "Simpan";

        $url = 'dashboard.testimoni.store';

        return view('content.pages.testimoni.form', compact('title', 'url', 'button'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
          'foto' => 'file|mimes:jpeg,jpg,png',

          'nama' => 'required',

          'pesan' => 'required',

          'rating' => 'required',
        ];

        $message = [
          'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
          'nama.required' => 'Wajib diisi',
          'pesan.required' => 'Wajib diisi',
          'rating.required' => 'Wajib diisi',
        ];

        $validator = Validator::make($input, $rules, $message)->validate();

        $testimoni = Testimoni::create([
          'nama' => $request->nama,
          'pesan' => $request->pesan,
          'rating' => $request->rating,
        ]);

        if($request->hasFile('foto')) {
          $nama_file = Str::uuid();

          $path = 'testimoni/';
          $file_extension = $request->foto->extension();
          $testimoni->foto = $path . $nama_file . '.' . $file_extension;

          $gambar = $request->file('foto');
          $destinationPath = storage_path('/app/public/');

          $img = Image::make($gambar->path());
          $img->fit(200, 200, function ($cons) {
              $cons->aspectRatio();
            })
            ->save($destinationPath . $testimoni->foto);

            $testimoni->save();
        }

        return redirect()->route('dashboard.testimoni')
        ->with('messages', __('pesan.create', ['modules' => $request->input('nama')]));

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
    public function edit(Testimoni $testimoni)
    {
      $title = "Update Testimoni";

      $button = "Update";

      $url = 'dashboard.testimoni.update';

      return view('content.pages.testimoni.form', compact('title', 'url', 'button', 'testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
      $input = $request->all();

        $rules = [
          'foto' => 'file|mimes:jpeg,jpg,png',

          'nama' => 'required',

          'pesan' => 'required',

          'rating' => 'required',
        ];

        $message = [
          'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
          'nama.required' => 'Wajib diisi',
          'pesan.required' => 'Wajib diisi',
          'rating.required' => 'Wajib diisi',
        ];

        $validator = Validator::make($input, $rules, $message)->validate();

        $testimoni->nama = $request->nama;
        $testimoni->pesan = $request->pesan;
        $testimoni->rating = $request->rating;

        if($request->hasFile('foto')) {

          $foto_lama = $testimoni->foto;

          $nama_file = Str::uuid();

          $path = 'testimoni/';
          $file_extension = $request->foto->extension();
          $testimoni->foto = $path . $nama_file . '.' . $file_extension;

          $gambar = $request->file('foto');
          $destinationPath = storage_path('/app/public/');

          $img = Image::make($gambar->path());
          $img->fit(1300, 703, function ($cons) {
              $cons->aspectRatio();
            })
            ->save($destinationPath . $testimoni->foto);

           if($foto_lama != '')
           {
            Storage::disk('public')->delete($foto_lama);
           }

          }

          $testimoni->save();

      return redirect()->route('dashboard.testimoni')
      ->with('messages', __('pesan.update', ['module' => $request->input('nama')]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        try{

          $nama = $testimoni->nama;
          $foto_lama = $testimoni->foto;

          if($foto_lama != '')
          {
            Storage::disk('public')->delete($foto_lama);
          }

          $testimoni->delete();

        }catch(Exception $e) {

          return redirect()->route('dashboard.testimoni')
        ->with('messages', __('pesan.delete', ['module' => $nama]));
        }

        return redirect()->route('dashboard.testimoni')
        ->with('messages', __('pesan.delete', ['module' => $nama]));
    }
}
