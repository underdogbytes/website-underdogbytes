<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aleatoriedades extends Controller
{
    public function index()
    {
        $aleatoriedades = [
            ['src' => 'imagens/aleatoriedades/pirate.webp', 'alt' => 'anime girl pirata com a frase "contra pirataria? meu mano, vivemos em um país subdesenvolvido de difícil acesso à cultura, deixa o meu torrent em paz"'],
            ['src' => 'imagens/aleatoriedades/smooth-brain.webp', 'alt' => 'lagarto e um cérebro com  frase "insult me all you wish, my brain is too smooth, the smoothest there is, your words simply slide right off"'],
            ['src' => 'imagens/aleatoriedades/dog-he-is-getting-closer.webp', 'alt' => 'cachorro com frase "every second you arent running he is getting closer"'],
            ['src' => 'imagens/aleatoriedades/shrek-all-star-stops.webp', 'alt' => 'Shrek All Star Stops'],
            ['src' => 'imagens/aleatoriedades/iroh-wisdom-has-been-chasing-you.webp', 'alt' => 'tio Iroh do Avatar com a frase "wisdom has been chasing you but you have always been faster"']
        ];

        $imagemAleatoria = $aleatoriedades[array_rand($aleatoriedades)];

        return view('paginas.aleatoriedades', ['imagem' => $imagemAleatoria]);
    }
}
