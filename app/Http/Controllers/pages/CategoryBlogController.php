<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriBlog;
use Illuminate\Support\Facades\Storage;
use Validator;
use Str;


class CategoryBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(KategoriBlog $daftar_kategori)
    {
        $title = 'Tabel Data Kategori';

        $daftar_kategori = KategoriBlog::get();

        return view('content.pages.category.index',compact('title','daftar_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $button = 'Simpan';
        $url = 'dashboard.category.store';
        $title = 'Tambah Data Kategori Blog';

        return view('content.pages.category.form', compact('button','url','title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $input = $request->all();

        $rules = [
          'nama' => 'required',

        ];

        $messages = [
          'nama.required' => 'Wajib diisi!'
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $kategori = KategoriBlog::create(
          [
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
          ]
          );

        return redirect()->route('dashboard.category')
        ->with('messages', __('pesan.create', ['module' => $request->input('nama')]));
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
    public function edit(KateogriBlog $kategori_blog)
    {
      $button = 'Update';
      $url = 'dashboard.category.update';
      $title = 'Edit Data Kategori Blog';

      return view('content.pages.category.form', compact('button','url','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriBlog $kategori)
    {
      $input = $request->all();

      $rules = [
        'nama' => 'required',

      ];

      $messages = [
        'nama.required' => 'Wajib diisi!'
      ];

      $validator = Validator::make($input, $rules, $messages)->validate();

      $kategori->nama = $request->nama;
      $kategori->keterangan = $request->keterangan;
      $kategori->save();

      return redirect()->route('dashboard.category')
      ->with('messages', __('pesan.create'. ['module' => $request->input('nama')]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriBlog $kategori)
    {
        try{
          $kategori->delete();

        }catch(Exception $e) {
          return redirect()->route('dashboard.category')
        ->with('messages', __('pesan.delete', ['module' => $kategori->nama]));
        }
        return redirect()->route('dashboard.category')
        ->with('messages', __('pesan.delete', ['module' => $kategori->nama]));
    }
}
