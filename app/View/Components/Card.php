<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public $altText;
    public $foodName;
    public $rate;
    public $price;
    public function __construct($image, $altText, $foodName, $rate, $price)
    {
        //
        $this->image = $image;
        $this->altText = $altText;
        $this->foodName = $foodName;
        $this->rate = $rate;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
