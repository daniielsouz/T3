<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerHistorico;
use App\Http\Controllers\ControllerSuporte;

Route::get('/', function () {
    return view('login.index');
});


Route::get('/home', [ControllerHome::class,'index']);

Route::get('/historico', [ControllerHistorico::class, 'index']);
Route::get('/suporte', [ControllerSuporte::class, 'index']);

Route::get('/login', function (){
    return view('login.index');
});

Route::get('/cadastro', function(){
    return view('cadastro.index');
});




