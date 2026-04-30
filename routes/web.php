<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProdiControl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route ::get('/tentang', function(){
    return view('tentang');
});

Route::resource('/fakultas', FakultasController::class);
Route::resource('periodes', PeriodeController::class);
Route::get('/prodi', [ProdiController::class, 'index']);
