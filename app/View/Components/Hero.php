<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    public $title;
    public $subtitle;
    public $primaryText;
    public $primaryLink;
    public $secondaryText;
    public $secondaryLink;
    public $image;
    public $eyebrow;

    public function __construct(
        $title,
        $subtitle = null,
        $primaryText = null,
        $primaryLink = null,
        $secondaryText = null,
        $secondaryLink = null,
        $image = null,
        $eyebrow = null
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->primaryText = $primaryText;
        $this->primaryLink = $primaryLink;
        $this->secondaryText = $secondaryText;
        $this->secondaryLink = $secondaryLink;
        $this->image = $image;
        $this->eyebrow = $eyebrow;
    }

    public function render()
    {
        return view('components.hero.default');
    }
}