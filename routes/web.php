<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SwalController;
use App\Http\Controllers\LaporanController;

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

Route::get('/', function () {
    return view('home');
});


// Route Kartu Keluarga
Route::get('/kartuKeluarga', [KartuKeluargaController::class, 'index'])->name('kartuKeluarga.index');
Route::get('/kartuKeluarga/create', [KartuKeluargaController::class, 'create'])->name('kartuKeluarga.create');
Route::post('/kartuKeluarga/create', [KartuKeluargaController::class, 'store'])->name('kartuKeluarga.store');
Route::get('/kartuKeluarga/{id}/edit', [KartuKeluargaController::class, 'edit'])->name('kartuKeluarga.edit');
Route::patch('/kartuKeluarga/edit/{id}', [KartuKeluargaController::class, 'update'])->name('kartuKeluarga.update');
Route::delete('/kartuKeluarga/{id}', [KartuKeluargaController::class, 'destroy'])->name('kartuKeluarga.destroy');
Route::get('/kartuKeluarga/{id}', [KartuKeluargaController::class, 'show'])->name('kartuKeluarga.show');


// Route tambah anggota keluarga
Route::get('/anggotaKeluarga/create/{id}', [KartuKeluargaController::class, 'createAnggotaKeluarga'])->name('anggotaKeluarga.create');
Route::post('/anggotaKeluarga/create', [KartuKeluargaController::class, 'storeAnggotaKeluarga'])->name('anggotaKeluarga.store');
Route::delete('/anggotaKeluarga/{id}', [KartuKeluargaController::class, 'destroyAnggotaKeluarga'])->name('anggotaKeluarga.destroy');



// Route Penduduk
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
Route::post('/penduduk/create', [PendudukController::class, 'store'])->name('penduduk.store');
Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('penduduk.edit');
Route::patch('/penduduk/edit/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
Route::get('/penduduk/{id}', [PendudukController::class, 'show'])->name('penduduk.show');


// Route Laporan
Route::get('/pendudukUsiaProduktif', [LaporanController::class, 'pendudukProduktif'])->name('pendudukUsiaProduktif');
Route::get('/cetakPendudukUsiaProduktif', [LaporanController::class, 'cetakPendudukProduktif'])->name('cetakPendudukUsiaProduktif');
Route::get('/pendudukLevelPendidikan', [LaporanController::class, 'pendudukLevelPendidikan'])->name('pendudukLevelPendidikan');
Route::get('/cetakPendudukLevelPendidikan', [LaporanController::class, 'cetakPendudukLevelPendidikan'])->name('cetakPendudukLevelPendidikan');
Route::get('/pendudukNagari', [LaporanController::class, 'pendudukNagari'])->name('pendudukNagari');
Route::get('/cetakPendudukNagari', [LaporanController::class, 'cetakPendudukNagari'])->name('cetakPendudukNagari');
Route::post('/pendudukNagari', [LaporanController::class, 'pendudukPerNagari'])->name('pendudukPerNagari');
Route::get('/cetakPendudukPerNagari/{id}', [LaporanController::class, 'cetakPendudukPerNagari'])->name('cetakPendudukPerNagari');