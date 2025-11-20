<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Services extends Component
{
    public $title;
    public $subtitle;
    public $items;

    public function __construct(
        $title,
        $subtitle = null,
        $items = null
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->items = $items;
    }

    public function render()
    {
        return view('components.services.default');
    }
}