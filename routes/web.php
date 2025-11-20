<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\Aleatoriedades;
use App\Http\Controllers\Pages\Projetos;
use App\Http\Middleware\ContentSecurityPolicy;

Route::middleware([ContentSecurityPolicy::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});