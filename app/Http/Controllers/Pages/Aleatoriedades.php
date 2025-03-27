<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aleatoriedades extends Controller
{
    public function index()
    {
        $aleatoriedades = [
            ['src' => 'imagens/aleatoriedades/shrek-all-star-stops.webp', 'alt' => 'Shrek All Star Stops'],
            ['src' => 'imagens/aleatoriedades/iroh-wisdom-has-been-chasing-you.webp', 'alt' => 'tio Iroh do Avatar com a frase "wisdom has been chasing you but you have always been faster"']
        ];

        $imagemAleatoria = $aleatoriedades[array_rand($aleatoriedades)];

        return view('paginas.aleatoriedades', ['imagem' => $imagemAleatoria]);
    }
}
