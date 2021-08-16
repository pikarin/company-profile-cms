<?php

namespace App\View\Components\Theme1;

use App\Services\MenuService;
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
        protected MenuService $menuService,
        public string $wrapperClass = '',
        public string $itemClass = '',
    ) {
        //
    }

    public function getLinks()
    {
        return $this->menuService->getActiveLinks();
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
