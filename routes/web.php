<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PPIDController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\galeriVidioController;
use App\Http\Controllers\galeriFotoController;
use App\Http\Controllers\BeritaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/kontak', function () {
    return view('front.kontak');
});
Route::get('/galerifoto', function () {
    return view('front.galeri.galerifoto');
});
Route::get('/galerividio', function () {
    return view('front.galeri.galerividio');
});


Route::get('/berita', function () {
    return view('front.berita.berita');
});
Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/struktur-organisasi', [LandingpageController::class, 'struktur_organisasi'])->name('struktur_organisasi');
Route::get('/tugas-dan-fungsi', [LandingpageController::class, 'tugas_fungsi'])->name('tugas-dan-fungsi');
Route::get('/visi-misi', [LandingpageController::class, 'visi_misi'])->name('visi-misi');

// PPID
Route::get('/informasi-yang-diumumkan-secara-berkala', [LandingpageController::class, 'informasiyangdiumumkansecaraberkala'])->name('informasi-yang-diumumkan-secara-berkala');
Route::get('/informasi-yang-serta-merta', [LandingpageController::class, 'informasiyangsertamerta'])->name('informasi-yang-serta-merta');
Route::get('/informasi-yang-tersedia-setiap-saat', [LandingpageController::class, 'informasiyangtersediasetiapsaat'])->name('informasi-yang-tersedia-setiap-saat');
Route::get('/daftar-informasi-publik', [LandingpageController::class, 'daftarinformasipublik'])->name('daftar-informasi-publik');
Route::get('/SOP', [LandingpageController::class, 'SOP'])->name('SOP');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth'])->name('dashboard');
    Route::resource('landingPage', LandingpageController::class);
    Route::resource('galeriVidio', galeriVidioController::class);
    Route::resource('galeriFoto', galeriFotoController::class);
    Route::resource('Profil', ProfilController::class);
    Route::resource('PPID', PPIDController::class);
    Route::resource('Berita', BeritaController::class);
});

require __DIR__.'/auth.php';
