<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class recipeview extends Component
{
    /**
     * Create a new component instance.
     */
    public $recipeImage;
    public $recipeName;
    public $duration;
    public $level;

    public function __construct($recipeImage, $recipeName, $duration, $level)
    {
        //
        $this->recipeImage = $recipeImage;
        $this->recipeName = $recipeName;
        $this->duration = $duration;
        $this->level = $level;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recipeview');
    }
}
