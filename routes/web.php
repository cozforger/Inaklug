<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LayananKamiController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang');
Route::get('/layanan-kami', [LayananKamiController::class, 'index'])->name('layanan');
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');
Route::post('/kontak', [ContactController::class, 'send'])->name('kontak.send');
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
