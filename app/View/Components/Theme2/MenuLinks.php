<?php

namespace App\View\Components\Theme2;

use App\Services\MenuService;
use Illuminate\View\Component;

class MenuLinks extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $wrapperClass = '',
        public string $itemClass = '',
        public string $itemActiveClass = '',
        protected MenuService $menuService,
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
        return view('components.theme2.menu-links');
    }
}
