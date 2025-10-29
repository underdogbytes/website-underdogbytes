<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class Projetos extends Controller
{
    public function index()
    {
        $data = collect([
            [
                'name'=> 'Olá Chico',
                'type'=> 'Website',
                'src'=> 'images/olachico.png',
                'alt'=> 'Artista curitibano Chico Luís sentado em frente ao mural pintado por ele. No rodapé da imagem, sua logo escrita "Olá Chico"'
            ],
            [
                'name' => 'Sorla DB',
                'type' => 'Design UI',
                'src' => 'images/sorla-db.png',
                'alt' => ''
            ],
            [
                'name' => 'EduEdu Alfabetização',
                'type' => 'Sistema',
                'src' => 'images/dislexia.png',
                'alt' => ''
            ],
            [
                'name' => 'Colégio Evangélico Jaraguá',
                'type' => 'Logo CEJ com fundo azul',
                'src' => 'images/cej.png',
                'alt' => 'Logo do Colégio Evangélico Jaraguá'
            ],
            [
                'name' => 'Coleções Fauna do Brasil',
                'type' => 'E-commerce',
                'src' => 'images/colecoes-fauna-do-brasil.png',
                'alt' => ''
            ],
            [
                'name' => 'Mais Futuro',
                'type' => 'Aplicativo',
                'src' => 'images/mais-futuro.png',
                'alt' => ''
            ],
            [
                'name' => 'Tempestade Criativa',
                'type' => 'Landing Page',
                'src' => 'images/tempestade-criativa.png',
                'alt' => ''
            ],
            [
                'name' => 'Escola Renovação',
                'type' => 'Landing Page',
                'src' => 'images/escola-renovacao.png',
                'alt' => ''
            ],
            [
                'name' => 'Show Gospel',
                'type' => 'Blog',
                'src' => 'images/show-gospel.png',
                'alt' => ''
            ]
        ]);
        // ,
        // [
        //     'name' => '',
        //     'type' => '',
        //     'src' => '',
        //     'alt' => ''
        // ]

        $perPage = 6;
        $currentPage = request()->get('page', 1);
        $projetos = new LengthAwarePaginator(
            $data->forPage($currentPage, $perPage),
            $data->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        return view('paginas.projetos.index', compact('projetos'));
    }
}
