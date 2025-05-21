<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\Aleatoriedades;
use App\Http\Middleware\ContentSecurityPolicy;

Route::middleware([ContentSecurityPolicy::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('aleatoriedades', [Aleatoriedades::class, 'index']);
    
    Route::get('blog', function () {
        return view('paginas.blog');
    });
    
    Route::get('sobre', function () {
        return view('paginas.sobre');
    });
});