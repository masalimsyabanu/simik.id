<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\BlogController;
use App\Http\Controllers\pages\CategoryBlogController;
use App\Http\Controllers\pages\UserController;
use App\Http\Controllers\pages\CalonMuridController;
use App\Http\Controllers\pages\SliderController;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;

use App\Http\Controllers\front_pages\HomeController;
use App\Http\Controllers\front_pages\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/terima-kasih', [HomeController::class, 'terimaKasih'])->name('home.terima-kasih');
Route::get('/informasi', [HomeController::class, 'informasi'])->name('home.informasi');
Route::get('/daftar', [PendaftaranController::class, 'index'])->name('home.daftar');
Route::post('/daftar', [PendaftaranController::class, 'store'])->name('home.daftar.store');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->prefix('dashboard')->
name('dashboard.')->namespace('Dashboard')->group(function () {
    // Main Page Route
    Route::get('/', [HomePage::class, 'index'])->name('pages-home');
    Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

    // locale
    Route::get('lang/{locale}', [LanguageController::class, 'swap']);

    // pages
    Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

    // authentication
    Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
    Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/tambah', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.delete');

    Route::get('/category', [CategoryBlogController::class, 'index'])->name('category');
    Route::get('/category/tambah', [CategoryBlogController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryBlogController::class, 'store'])->name('category.store');
    Route::get('/category/{kategori}', [CategoryBlogController::class, 'edit'])->name('category.edit');
    Route::put('/category/{kategori}', [CategoryBlogController::class, 'update'])->name('category.update');
    Route::delete('/category/{kategori}', [CategoryBlogController::class, 'destroy'])->name('category.delete');

    Route::get('/users', [UserController::class, 'index'])->name('user');
    Route::get('/users/tambah', [UserController::class, 'create'])->name('user.create');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::get('/slider/tambah', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{slider}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('/slider/{slider}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/{slider}', [SliderController::class, 'destroy'])->name('slider.delete');

    Route::get('/calon-murid', [CalonMuridController::class, 'index'])->name('calon-murid');
    // Route::get('/calon-murid', [CalonMuridController::class, 'index'])->name('calon-murid');

    Route::get('/daftar-tahap-kedua/{calon_murid}', [CalonMuridController::class, 'daftarTahapKedua'])->name('calon-murid.tahap-kedua');
    Route::post('/daftar-tahap-kedua/{calon_murid}', [CalonMuridController::class, 'daftarTahapKeduaStore'])->name('calon-murid.tahap-kedua.update');
  });

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//   Route::get('/dashboard', function () {
//     return view('terms');
//   })->name('dashboard');
// });
