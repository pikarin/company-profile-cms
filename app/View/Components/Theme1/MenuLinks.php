<?php

namespace App\View\Components\Theme1;

use Illuminate\View\Component;

class MenuLinks extends Component
{
    protected $links;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $wrapperClass = '',
        public string $itemClass = '',
        )
    {
        //
    }

    public function getLinks()
    {
        // TODO: get from database
        if (!$this->links) {
            $this->links = ['Home' => '/', 'About' => '/about', 'Contact' => '/contact'];
        }

        return $this->links;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.theme1.menu-links');
    }
}
