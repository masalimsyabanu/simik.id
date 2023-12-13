<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Validator;
use Image;
use Str;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Blog $daftar_blog)
  {
    $daftar_blog = Blog::get();

    return view('content.pages.blog.index', compact('daftar_blog'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Blog $blog)
  {
    $button = 'Simpan';

    $url = 'dashboard.blog.store';

    return view('content.pages.blog.form', compact('button', 'url'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $input = $request->all();

    $rules = [
      'foto' => 'file|mimes:jpeg,jpg,png|max:10240',

      'judul' => 'required|max:255',

      'penulis' => 'max:255',
    ];

    $messages = [
      'required' => ' :attribute wajib diisi.',
      'foto.size' => 'Ukuran foto minimal 1MB',
      'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
    ];

    $validator = Validator::make($input, $rules, $messages)->validate();

    $blog = Blog::create([
      'judul' => $request->judul,
      'abstrak' => $request->abstrak,
      'penulis' => $request->penulis,
      'konten' => $request->konten,
      'slug' => Str::slug($request->judul, '-'),
      'kategori_id' => $request->kategori_id,
      'status' => $request->status,
    ]);

    if ($request->hasFile('foto')) {
      // $nama_file = 'robot.'.$request->file('foto')->extension();
      $nama_file = Str::uuid();

      $path = 'blog/foto/';
      $file_extension = $request->foto->extension();
      $blog->foto = $path . $nama_file . '.' . $file_extension;
      $blog->thumbnail = $path . $nama_file . '-thumbnail.' . $file_extension;

      $gambar = $request->file('foto');
      $destinationPath = storage_path('/app/public/');

      $img = Image::make($gambar->path());
      $img
        ->fit(1000, 500, function ($cons) {
          $cons->aspectRatio();
        })
        ->save($destinationPath . $blog->foto);

      $img
        ->fit(600, 600, function ($cons) {
          $cons->aspectRatio();
        })
        ->save($destinationPath . $blog->thumbnail);

      $blog->save();
    }

    return redirect()
      ->route('content.pages.blog.index')
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
  public function edit(Blog $blog)
  {
    $button = 'Update';
    $url = 'dashboard.blog.update';

    return view('content.pages.blog.form', compact('button', 'url', 'blog'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Blog $blog)
  {
    $input = $request->all();

    $rules = [
      'foto' => 'file|mimes:jpeg,jpg,png|max:10240',

      'judul' => 'required|max:255',

      'penulis' => 'max:255',
    ];

    $messages = [
      'required' => ' :attribute wajib diisi.',
    ];

    $validator = Validator::make($input, $rules, $messages)->validate();
    $blog->judul = $request->judul;
    $blog->abstrak = $request->abstrak;
    $blog->penulis = $request->penulis;
    $blog->konten = $request->konten;
    $blog->kategori_id = $request->kategori_id;
    $blog->status = $request->status;

    if ($request->hasFile('foto')) {
      $foto_lama = $blog->foto;
      $thumbnail_lama = $blog->thumbnail;

      // $nama_file = 'robot.'.$request->file('foto')->extension();
      $nama_file = Str::uuid();

      $path = 'blog/foto/';
      $file_extension = $request->foto->extension();
      $blog->foto = $path . $nama_file . '.' . $file_extension;
      $blog->thumbnail = $path . $nama_file . '-thumbnail.' . $file_extension;

      $gambar = $request->file('foto');
      $destinationPath = storage_path('app/public/');

      $img = Image::make($gambar->path());
      $img
        ->fit(1000, 500, function ($cons) {
          $cons->aspectRatio();
        })
        ->save($destinationPath . $blog->foto);

      $img
        ->fit(600, 600, function ($cons) {
          $cons->aspectRatio();
        })
        ->save($destinationPath . $blog->thumbnail);

      Storage::disk('public')->delete($foto_lama);
      Storage::disk('public')->delete($thumbnail_lama);
    }

    $blog->save();
    return redirect()
      ->route('content.pages.blog.index')
      ->with('messages', __('pesan.update', ['module' => $request->input('judul')]));
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Blog $blog)
  {
    $title = $blog->judul;

    $blog->delete();
    // $blog->dd();

    return redirect()
      ->route('dashboard.blog')
      ->with('messages', __('pesan.delete', ['module' => $title]));
  }
}
