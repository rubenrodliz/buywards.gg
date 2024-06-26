@props(['champName', 'champKDA', 'champWinRate', 'champWins', 'champLoses', 'champImage'])

<div class="w-[50px] h-[50px]"><img src="{{ $champImage }}" alt="{{ $champName }} lol character" class="w-full h-full rounded-[10px]"></div>
<div class="h-full w-[50%] pl-[20px]">
    <p class="">{{ $champName ?? ''}}</p>
    <p class="
        @if($champKDA < 3)
            {{ 'text-kda_red' }}
        @elseif($champKDA >= 3 && $champKDA <= 5)
            {{ 'text-kda_blue' }}
        @else
            {{ 'text-kda_orange' }}
        @endif
    ">
        {{ round($champKDA, 2) }} KDA
    </p>
</div>
<div class="h-full w-[35%] text-end">
    <p class="
        @if($champWinRate < 50)
            {{ 'text-kda_red' }}
        @elseif($champWinRate >= 50 && $champWinRate <= 60)
            {{ 'text-kda_blue' }}
        @else
            {{ 'text-kda_orange' }}
        @endif
    ">
        {{ $champWinRate }}%
    </p>
    <p class="text-sm">{{ $champWins }}W - {{ $champLoses }}L</p>
</div>
