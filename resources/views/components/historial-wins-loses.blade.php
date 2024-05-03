@props(['wins', 'loses'])

@php
    $totalGames = $wins + $loses;
    $winrate = ($totalGames > 0) ? ($wins / $totalGames) * 100 : 0;
@endphp

<div class="flex flex-col align-middle justify-center">
    <p class="text-md font-bold">{{ $wins }}V - {{ $loses }}D</p>
    <p class="text-lg font-bold
        @if($winrate < 50)
        {{ 'text-kda_red' }}
        @elseif($winrate >= 50 && $winrate <= 60)
            {{ 'text-kda_blue' }}
        @else
            {{ 'text-kda_orange' }}
        @endif
    ">{{ number_format($winrate, 2) }}% WR</p>
</div>
