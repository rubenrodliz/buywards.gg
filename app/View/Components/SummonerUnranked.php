<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SummonerUnranked extends Component
{
    /**
     * Create a new component instance.
     */
    protected $titulo;
    public function __construct($titulo)
    {
        $this->titulo=$titulo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.summoner-unranked',['titulo'=>$this->titulo]);
    }
}
