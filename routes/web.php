<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien', function () {
    return view('pasien.index', ['title' => 'Pasien']);   ;
});

Route::get('/pasien/create', function () {
    return view('pasien.create', ['title' => 'Create Pasien']);   ;
});
