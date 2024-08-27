<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderPlacas;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [ProviderPlacas::class , 'ProviderPlacas']);

Route::get('/home', function(){
    return view('home.index');
});

Route::get('/historico', function(){
    return view('historico.index');
});

Route::get('/suporte', function(){
    return view('suporte.index');
});

Route::get('/login', function (){
    return view('login.index');
});

Route::get('/cadastro', function(){
    return view('cadastro.index');
});