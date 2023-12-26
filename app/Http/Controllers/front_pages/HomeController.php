<?php

namespace App\Http\Controllers\front_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\User;
use Str;
use Image;

class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $daftar_slider = Slider::get();
    $daftar_blog = Blog::get();

    return view('content.front-pages.index', compact('daftar_slider', 'daftar_blog'));

    // return redirect()->route('home.informasi');
  }

  public function terimaKasih(){

    return view('content.front-pages.terima-kasih');
  }

  public function informasi(){

    return view('content.front-pages.informasi');
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
