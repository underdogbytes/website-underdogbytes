<?php

namespace App\View\Components\projetos;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $imgSrc,
        public ?string $imgAlt = "",
        public ?string $nome,
        public ?string $tipo,
        public ?string $linkHref,
        public ?string $linkTexto,
        public ?string $descricao,
        public ?string $dataTrabalho
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.projetos.item');
    }
}
