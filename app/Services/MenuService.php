<?php

namespace App\Services;

class MenuService
{
    protected array $links = [];

    public function __construct()
    {
        //
    }

    public function getActiveLinks()
    {
        // TODO: get from database
        if (count($this->links) < 1) {
            $this->links = ['Home' => '/', 'About' => '/about', 'Contact' => '/contact'];
        }

        return $this->links;
    }
}
