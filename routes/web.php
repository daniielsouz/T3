<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHistorico;

Route::get('/', function () {
    return view('login.index');
});


Route::get('/home', function(){
    return view('home.index');
});

Route::get('/historico', [ControllerHistorico::class, 'index']);

Route::get('/suporte', function(){
    return view('suporte.index');
});