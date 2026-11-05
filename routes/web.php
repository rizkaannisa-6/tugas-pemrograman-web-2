<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/{pasien}/update', [PasienController::class, 'update'])->name('pasien.update');
