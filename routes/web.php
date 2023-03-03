<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;

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
});