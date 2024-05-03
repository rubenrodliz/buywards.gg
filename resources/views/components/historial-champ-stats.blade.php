@props(['champName', 'champKDA', 'champWinRate', 'champWins', 'champLoses', 'champImage'])

<div class="flex h-[40px]">
    <img src="{{asset('images/' . $champImage .'.png')}}" alt="{{ $champName }} lol character" class="h-[40px] rounded-[10px] mr-[10px]">
    <div>
        <p class="text-sm font-bold">
            <span class="
                @if($champWinRate < 50)
                    {{ 'text-kda_red' }}
                @elseif($champWinRate >= 50 && $champWinRate <= 60)
                    {{ 'text-kda_blue' }}
                @else
                    {{ 'text-kda_orange' }}
                @endif
            ">
                {{ $champWinRate }}%
            </span>
            ({{ $champWins }}W {{ $champLoses }}L)
        </p>
        <p class="text-md font-bold">
            {{ $champKDA }} KDA
        </p>
    </div>
</div>
