@props(['champName', 'champKDA', 'champWinRate', 'champWins', 'champLoses', 'champImage'])

<div class="flex h-[40px]">
    <img src="{{asset('images/' . $champImage .'.png')}}" alt="{{ $champName }} lol character" class="h-[40px] rounded-[10px] mr-[10px]">
    <div>
        <p class="text-sm font-bold">
            <span class="{{ $class::getKdaClassByWinrate($champWinRate) }}">
                {{ $champWinRate }}%
            </span>
            ({{ $champWins }}W {{ $champLoses }}L)
        </p>
        <p class="text-md font-bold">
            {{ $champKDA }} KDA
        </p>
    </div>
</div>
