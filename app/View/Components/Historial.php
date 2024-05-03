<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class Historial extends Component
{
    static public function getKdaClassByKda(int $kda): string {
        if ($kda < 3) {
            return 'text-kda_red';
        } elseif ($kda >= 3 && $kda <= 5) {
            return 'text-kda_blue';
        } else {
            return 'text-kda_orange';
        }
    }

    static public function getKdaClassByWinrate(int $winrate): string {
        if ($winrate < 50) {
            return 'text-kda_red';
        } elseif ($winrate >= 50 && $winrate <= 60) {
            return 'text-kda_blue';
        } else {
            return 'text-kda_orange';
        }
    }
}
