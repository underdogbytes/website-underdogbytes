<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\Aleatoriedades;

Route::get('/', function () {
    return view('welcome');
});

Route::get('aleatoriedades', [Aleatoriedades::class, 'index']);

Route::get('blog', function () {
    return view('paginas.blog');
});

Route::get('contato', function () {
    return view('paginas.contato');
});
