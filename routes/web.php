<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\PengetahuanController;
use App\Http\Controllers\AreaLayananController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/',               [HomeController::class,       'index'])->name('home');
Route::get('/layanan',        [LayananController::class,    'index'])->name('layanan');
Route::get('/tentang-kami',   [TentangKamiController::class,'index'])->name('tentang-kami');
Route::get('/pengetahuan',    [PengetahuanController::class,'index'])->name('pengetahuan');
Route::get('/pengetahuan/{slug}', [PengetahuanController::class,'show'])->name('pengetahuan.show');
Route::get('/area-layanan',   [AreaLayananController::class,'index'])->name('area-layanan');
Route::get('/kontak',         [KontakController::class,     'index'])->name('kontak');
Route::post('/kontak',        [KontakController::class,     'store'])->name('kontak.store');
