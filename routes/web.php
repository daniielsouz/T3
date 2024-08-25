<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderPlacas;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [ProviderPlacas::class , 'ProviderPlacas']);