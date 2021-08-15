<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Theme1Layout extends Component
{
    public function __construct(
        public string $title,
        public string $bodyClass = ''
    ) {
        //
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.theme1');
    }
}
