<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GaleriaCertificados extends Component
{
    public array $certificados;
    public array $categorias;

    public function __construct()
    {
        $jsonPath = resource_path('data/certificados.json');
        $this->certificados = json_decode(file_get_contents($jsonPath), true) ?? [];
        $this->categorias = array_unique(array_column($this->certificados, 'categoria'));
    }

    public function render()
    {
        return view('components.galeria-certificados');
    }
}