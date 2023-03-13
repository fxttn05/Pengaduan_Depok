<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;

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
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'officer']], function(){
    Route::get('/pengaduan', [PengaduanController::class, 'allList'])->name('all.list');
    Route::get('/pengaduan/verified', [PengaduanController::class, 'allListVerified'])->name('all.list.verified');
    Route::get('/pengaduan/replied', [PengaduanController::class, 'allListReplied'])->name('all.list.replied');
    Route::get('/tanggapan/{id}', [TanggapanController::class, 'show'])->name('tanggapan');
    Route::put('/replied/{id}', [TanggapanController::class, 'update'])->name('replied');
    Route::put('/edit/{id}', [TanggapanController::class, 'edit'])->name('edit');
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas');
});