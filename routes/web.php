<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\LaporanController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes();

Route::group(['prefix' => 'profile',], function(){
    Route::get('/', [HomeController::class, 'profile'])->name('profile');
    Route::put('/{id}', [HomeController::class, 'profileEdit'])->name('profile.edit');
});

Route::group(['prefix' => 'pengaduan', 'as' => 'pengaduan.'], function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('index');
    Route::post('/post', [PengaduanController::class, 'store'])->name('post');
    Route::get('/{id}', [PengaduanController::class, 'show'])->name('detail');
    Route::get('/me/list', [PengaduanController::class, 'list'])->name('list'); 
    Route::put('/verified/{id}', [PengaduanController::class, 'verified'])->name('verification')->middleware('auth', 'officer');
    Route::get('/detail/{id}', [PengaduanController::class, 'detail'])->name('detil')->middleware('auth', 'officer');
    Route::get('/detail/pdf/{id}', [PengaduanController::class, 'pdf'])->name('detil.pdf')->middleware('auth', 'officer');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'officer']], function(){
    Route::get('/pengaduan', [PengaduanController::class, 'allList'])->name('all.list');
    Route::get('/pengaduan/verified', [PengaduanController::class, 'allListVerified'])->name('all.list.verified');
    Route::get('/pengaduan/replied', [PengaduanController::class, 'allListReplied'])->name('all.list.replied');
    Route::get('/tanggapan/{id}', [TanggapanController::class, 'show'])->name('tanggapan');
    Route::put('/replied/{id}', [TanggapanController::class, 'update'])->name('replied');
    Route::put('/edit/{id}', [TanggapanController::class, 'edit'])->name('edit');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::post('/getLaporan', [LaporanController::class, 'getLaporan'])->name('laporan.get.laporan');
    Route::get('/laporan/cetak/{from}/{to}', [LaporanController::class, 'cetakLaporan'])->name('laporan.cetak.laporan');

    // petugas
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas');
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
    Route::post('/petugas/store', [PetugasController::class, 'store'])->name('petugas.store');
    Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit'])->name('petugas.edit');
    Route::put('/petugas/update/{id}', [PetugasController::class, 'update'])->name('petugas.update');
    Route::delete('/petugas/deactive/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

    // masyarakat
    Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat');
    Route::get('/masyarakat/edit/{id}', [PetugasController::class, 'edit'])->name('masyarakat.edit');
    Route::put('/masyarakat/update/{id}', [PetugasController::class, 'update'])->name('masyarakat.update');
    Route::delete('/masyarakat/deactive{id}', [PetugasController::class, 'destroy'])->name('masyarakat.destroy');
});
