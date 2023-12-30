<?php

namespace App\Http\Controllers\front_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\KategoriBlog;
use App\Models\ProfilWebsite;
use Storage;
use Image;

class FrontBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $daftar_blog = Blog::get();

      $daftar_kategori = KategoriBlog::get();

      return view('content.front-pages.blog', compact('daftar_blog', 'daftar_kategori'));
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
    public function show($slug)
    {
        $daftar_blog = Blog::get();

        $blog = Blog::where('slug', $slug)->get();

        $daftar_kategori = KategoriBlog::get();

        // dd($blog);

        return view('content.front-pages.blog-detail', compact('blog', 'daftar_blog', 'daftar_kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
