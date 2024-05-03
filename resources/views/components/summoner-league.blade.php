@props(['titulo', 'class', 'rank', 'lp', 'wins', 'losses', 'winrate'])

<div class="flex flex-col text-text_light border-2 border-primary border-solid rounded-lg p-4 bg-transparent h-[130px] bg-opacity-60 bg-bg_dark {{ $class }}">
    <div class="flex-1">
        <x-barra-titulos titulo="{{ $titulo }}" />
    </div>
    <div class="flex flex-row flex-wrap justify-center items-center">
        <img src="{{ asset('images/ranks/' . substr(strtolower($rank), 0, -2)  . '.webp') }}" alt="league rank" class="w-[20%] mr-3">
        <div class="flex-1 flex flex-col">
            <div class="text-xl font-semibold text-{{ substr(strtolower($rank), 0, -2) }}">{{ $rank }}</div>
            <div>{{ $lp }} LP</div>
        </div>
        <div class="flex-1 flex flex-col justify-end">
            <div class="text-right">{{ $wins }}W {{ $losses }}L</div>
            <div class="text-right">WinRate {{ $winrate }}%</div>
        </div>
    </div>
</div>

