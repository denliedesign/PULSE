<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Clarification extends Component
{
    public $location;
    /**
     * Create a new component instance.
     */
    public function __construct($location)
    {
        $this->location = $location;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.clarification');
    }
}
