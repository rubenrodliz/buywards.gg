<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;

class historialWinsLoses extends Historial
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.historial-wins-loses', [
            'class' => $this
        ]);
    }
}
