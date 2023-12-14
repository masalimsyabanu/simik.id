<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\BlogController;
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
Route::get('/daftar', [PendaftaranController::class, 'index'])->name('home.daftar');
Route::post('/daftar', [PendaftaranController::class, 'store'])->name('home.daftar.store');

// Route::prefix('dashboard')
//   ->name('dashboard.')
//   ->namespace('Dashboard')
//   ->group(function () {
//     // Main Page Route
//     Route::get('/', [HomePage::class, 'index'])->name('pages-home');
//     Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

//     // locale
//     Route::get('lang/{locale}', [LanguageController::class, 'swap']);

//     // pages
//     Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

//     // authentication
//     Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
//     Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

//     Route::get('/blog', [BlogController::class, 'index'])->name('blog');
//     Route::get('/blog/tambah', [BlogController::class, 'create'])->name('blog.create');
//     Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
//     Route::get('/blog/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
//     Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
//     Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.delete');
//   });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
  Route::get('/dashboard', function () {
    return view('terms');
  })->name('dashboard');
});
