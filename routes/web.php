<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::group(['prefix' => 'pengaduan', 'as' => 'pengaduan.'], function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('index');
    Route::post('/post', [PengaduanController::class, 'store'])->name('post');
    Route::get('/{id}', [PengaduanController::class, 'show'])->name('detail');
    Route::get('/me/list', [PengaduanController::class, 'list'])->name('list'); 
    Route::put('/verified/{id}', [PengaduanController::class, 'verified'])->name('verification')->middleware('auth', 'officer');
});

Route::group(['prefix' => 'tanggapan', 'as' => 'tanggapan.'], function(){
    // Route::get('/', ])
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'officer']], function(){
    Route::get('/pengaduan', [PengaduanController::class, 'allList'])->name('all.list');
    Route::get('/tanggapan/{id}', [TanggapanController::class, 'show'])->name('tanggapan');
    Route::put('/replied/{id}', [TanggapanController::class, 'update'])->name('replied');
    Route::put('/edit/{id}', [TanggapanController::class, 'edit'])->name('edit');
});