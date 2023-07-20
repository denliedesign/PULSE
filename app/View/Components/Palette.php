<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Palette extends Component
{
    public $background;
    public $btnBackground;
    public $text;
    public $btnText;
    /**
     * Create a new component instance.
     */
    public function __construct($background, $text, $btnBackground, $btnText)
    {
        $this->background = $background;
        $this->btnBackground = $btnBackground;
        $this->text = $text;
        $this->btnText = $btnText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.palette');
    }
}
