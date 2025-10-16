<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GradientBox extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(

        public string $hClass,
        public string $wClass,
        public string $radiusClass,
        public string $addClass,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gradient-box');
    }
}
