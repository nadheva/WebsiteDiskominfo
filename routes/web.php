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
    return view('kontak');
});
Route::get('/galerifoto', function () {
    return view('galerifoto');
});
Route::get('/galerividio', function () {
    return view('galerividio');
});
Route::get('/struktur-organisasi', function () {
    return view('struktur_organisasi');
});
Route::get('/visi-misi', function () {
    return view('visimisi');
});
Route::get('/tugas-dan-fungsi', function () {
    return view('tugasfungsi');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', [LandingpageController::class, 'landingPage'])->name('/');

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
