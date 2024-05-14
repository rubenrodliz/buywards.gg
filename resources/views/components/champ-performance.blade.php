@props(['champName', 'champKDA', 'champWinRate', 'champWins', 'champLoses', 'champImage'])

<div class="w-[80px]"><img src="{{ $champImage }}" alt="{{ $champName }} lol character" class="w-full rounded-[10px]"></div>
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
        {{ $champKDA }} KDA
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
    <p class="text-sm">{{ $champWins }}V - {{ $champLoses }}D</p>
</div>
