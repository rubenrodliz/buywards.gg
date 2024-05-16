@props(['champName', 'champKDA', 'champWinRate', 'champWins', 'champLoses', 'champImage'])

<div class="flex h-[40px]">
    <img src="{{$champImage}}" alt="{{ $champName }} lol character" class="h-[50px] w-[50px] rounded-[10px] mr-[10px]">
    <div class="w-[160px]">
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
