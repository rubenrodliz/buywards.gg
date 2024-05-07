<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SummonerLeague extends Component
{
    /**
     * Create a new component instance.
     */
    protected $datos;
    
    protected $QueueType;
    protected $wins;
    protected $loses;
    protected $tier;
    protected $rank;
    protected $winrate;
    public function __construct($datos)
    {
        $this->datos=$datos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.summoner-league',['titulo'=>$this->titulo]);
    }

    private function getWins(){
        return $this->$datos['wins'];
    }
    private function getLoses(){
        return $this->$datos['losses'];
    }
    private function getRank(){
        return $this->$datos['rank'];
    }
    private function getTier(){
        return $this->$datos['tier'];
    }
    private function getQueueType(){
        return $this->$datos['queueType'];
    }





}
