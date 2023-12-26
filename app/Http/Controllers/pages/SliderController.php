<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Str;
use Validator;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $title = "Data Konten Slider";

      $daftar_slider = Slider::get();

        return view('content.pages.slider.index', compact('title', 'daftar_slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

      $button = 'Simpan';
      $url = 'dashboard.slider.store';
      $title = 'Simpan data konten slider';


      return view('content.pages.slider.form', compact('button', 'url', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $input = $request->all();

       $rules = [
        'foto' => 'file|mimes:jpeg,jpg,png',
        'judul' => 'required',
        'deskripsi' => 'required',
        'url' => 'required'
       ];

       $messages = [
        'judul.required' => 'Wajib diisi',
        'deskripsi.required' => 'Wajib diisi',
        'url.required' => 'Wajib diisi',
        'foto.size' => 'Ukuran foto minimal 1MB',
        'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
       ];

       $validator = Validator::make($input, $rules, $messages)->validate();

       $slider = Slider::create([
         'judul' => $request->judul,
         'deskripsi' => $request->deskripsi,
         'url' => $request->url
       ]);

       if($request->hasFile('foto'))
       {
            $nama_file = Str::uuid();

            $path = 'slider/';
            $file_extension = $request->foto->extension();
            $slider->foto = $path . $nama_file . '.' . $file_extension;

            $gambar = $request->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img ->fit(710, 711, function ($cons) {
                $cons->aspectRatio();
              })
              ->save($destinationPath . $slider->foto);

              $slider->save();
       }

       return redirect()->route('dashboard.slider')
       ->with('messages', __('pesan.create', ['module' => $request->input('judul')]));
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
    public function edit(Slider $slider)
    {
      $button = 'Update';
      $url = 'dashboard.slider.update';
      $title = 'Update data konten slider';


      return view('content.pages.slider.form', compact('button', 'url', 'title', 'slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
      $input = $request->all();

      $rules = [
       'foto' => 'file|mimes:jpeg,jpg,png|max:10240',
       'judul' => 'required',
       'deskripsi' => 'required',
       'url' => 'required'
      ];

      $messages = [
       'judul.required' => 'Wajib diisi',
       'deskripsi.required' => 'Wajib diisi',
       'url.required' => 'Wajib diisi',
       'foto.size' => 'Ukuran foto minimal 1MB',
       'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
      ];

      $validator = Validator::make($input, $rules, $messages)->validate();

      $slider->judul = $request->judul;
      $slider->deskripsi = $request->deskripsi;
      $slider->url = $request->url;


      if($request->hasFile('foto'))
       {
          $foto_lama = $slider->foto;

            $nama_file = Str::uuid();

            $path = 'slider/';
            $file_extension = $request->foto->extension();
            $slider->foto = $path . $nama_file . '.' . $file_extension;

            $gambar = $request->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img
              ->fit(710, 711, function ($cons) {
                $cons->aspectRatio();
              })
              ->save($destinationPath . $slider->foto);

              Storage::disk('public')->delete($foto_lama);
            }

            $slider->save();

      return redirect()->route('dashboard.slider')
       ->with('messages', __('pesan.create', ['module' => $request->input('judul')]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {

          if($slider->foto != ''){

            Storage::disk('public')->delete($slider->foto);
          }
          $slider->delete();

        }catch(Exception $e){

          return redirect()->route('dashboard.slider')
          ->with('messages', __('pesan.delete', ['modules' => $slider->judul]));

        }

        return redirect()->route('dashboard.slider')
          ->with('messages', __('pesan.delete', ['modules' => $slider->judul]));
    }
}
