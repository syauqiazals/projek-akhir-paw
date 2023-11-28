<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', [AdminController::class,'index']);

Route::get('/rekapan', [AdminController::class,'rekap']);

Route::get('/tables-basic', [pegawaiController::class, 'index']);
Route::get('/pegawai', [pegawaiController::class, 'index']);
Route::get('/create', [pegawaiController::class, 'create']);
Route::post('/pegawai', [pegawaiController::class, 'store']);
Route::get('/pegawai/{nik}/edit', [pegawaiController::class, 'edit']);
Route::get('/pegawai/{nik}/show', [pegawaiController::class, 'show']);
Route::put('/pegawai/{id}', [pegawaiController::class, 'update']);
Route::delete('/pegawai/{id}', [pegawaiController::class, 'destroy']);

// Route::get('/rekappegawai', [AdminController::class,'pegawai']);

Route::middleware(['auth'])->group(function(){
    Route::get('/main', [AdminController::class,'index']);
    Route::get('/logout', [SesiController::class,'logout']);
});
