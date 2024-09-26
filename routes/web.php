<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerHistorico;
use App\Http\Controllers\ControllerPlacas;
use App\Http\Controllers\ControllerSuporte;
use App\Http\Controllers\ControllerViagens;

Route::get('/', function () {
    return view('login.index');
});


Route::get('/home', [ControllerHome::class,'index'])->name('home');

Route::get('/historico', [ControllerHistorico::class, 'index']);
Route::get('/suporte', [ControllerSuporte::class, 'index']);

Route::get('/login', function (){
    return view('login.index');
});
Route::get('/cadastro', function(){
    return view('cadastro.index');
});

Route::post('/placas', [ControllerPlacas::class, 'store'])->name('placas.store');
Route::post('/viagens', [ControllerViagens::class, 'store'])->name('viagens.store');

Route::delete('/viagens/{id}', [ControllerViagens::class, 'destroy'])->name('viagens.destroy');
Route::delete('/placas/{id}', [ControllerPlacas::class, 'destroy'])->name('placas.destroy');
Route::post('/historico/retorno/{id}', [ControllerHistorico::class, 'store'])->name('historico.store');