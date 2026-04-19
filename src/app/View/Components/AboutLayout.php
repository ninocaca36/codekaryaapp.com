<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AboutLayout extends Component
{
    public $title;

    public function __construct($title = 'Tentang Kami')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.about-layout');
    }
}