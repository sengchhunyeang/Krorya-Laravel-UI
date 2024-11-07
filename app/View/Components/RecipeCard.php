<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecipeCard extends Component
{
    public $recipeImage;
    public $recipeName;
    public $duration;
    public $level;
    public $altText;
    public $liked;
    /**
     * Create a new component instance.
     */
    public function __construct($recipeImage, $recipeName, $duration, $level, $altText,$liked)
    {
        $this->recipeImage = $recipeImage;
        $this->recipeName = $recipeName;
        $this->duration = $duration;
        $this->level = $level;
        $this->altText = $altText;
        $this-> liked = $liked;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recipe-card');
    }
}
