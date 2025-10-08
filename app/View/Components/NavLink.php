<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $href, $active, $type;

    public function __construct($href = '#', $active = false, $type = 'a')
    {
        $this->href = $href;
        $this->active = $active;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.nav-link');
    }
}
