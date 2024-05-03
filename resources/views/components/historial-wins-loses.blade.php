@props(['wins', 'loses'])

@php
    $totalGames = $wins + $loses;
    $winrate = ($totalGames > 0) ? ($wins / $totalGames) * 100 : 0;
@endphp

<div class="flex flex-col align-middle justify-center">
    <p class="text-md font-bold">{{ $wins }}V - {{ $loses }}D</p>
    <p class="text-lg font-bold {{ $class::getKdaClassByWinrate($winrate) }}">{{ number_format($winrate, 2) }}% WR</p>
</div>
