<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class FrontLayout extends Component
{
    private $metaTitle;

    public function __construct($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    }


    public function render()
    {
        return view('components.front-layout', 
            ['metaTitle' => $this->metaTitle]
        );
    }
}