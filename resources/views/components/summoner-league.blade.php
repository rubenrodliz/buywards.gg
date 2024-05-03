@props(['titulo', 'class', 'rank', 'lp', 'wins', 'losses', 'winrate'])

<div class="flex flex-col text-text_light border border-primary border-solid rounded-lg p-4 bg-transparent h-[130px] {{ $class }}">
    <div class="flex-1">
        <x-barra-titulos titulo="{{ $titulo }}" />
    </div>
    <div class="flex flex-row flex-wrap justify-center items-center">
        <img src="
            @if (Str::contains(strtolower($rank), 'hierro'))
                {{ asset('images/ranks/iron.webp') }}
            @elseif (Str::contains(strtolower($rank), 'bronce'))
                {{ asset('images/ranks/bronze.webp') }}
            @elseif (Str::contains(strtolower($rank), 'plata'))
                {{ asset('images/ranks/silver.webp') }}
            @elseif (Str::contains(strtolower($rank), 'oro'))
                {{ asset('images/ranks/gold.webp') }}
            @elseif (Str::contains(strtolower($rank), 'platino'))
                {{ asset('images/ranks/platinum.webp') }}
            @elseif (Str::contains(strtolower($rank), 'diamante'))
                {{ asset('images/ranks/diamond.webp') }}
            @elseif (Str::contains(strtolower($rank), 'maestro'))
                {{ asset('images/ranks/master.webp') }}
            @elseif (Str::contains(strtolower($rank), 'gran maestro'))
                {{ asset('images/ranks/grandmaster.webp') }}
            @elseif (Str::contains(strtolower($rank), 'challenger'))
                {{ asset('images/ranks/challenger.webp') }}
            @endif
        " alt="league rank" class="w-[20%] mr-3">
        <div class="flex-1 flex flex-col">
            <div class="text-xl font-semibold
                @if (Str::contains(strtolower($rank), 'unranked'))
                    text-unraked
                @elseif (Str::contains(strtolower($rank), 'hierro'))
                    text-iron
                @elseif (Str::contains(strtolower($rank), 'bronce'))
                    text-bronze
                @elseif (Str::contains(strtolower($rank), 'plata'))
                    text-silver
                @elseif (Str::contains(strtolower($rank), 'oro'))
                    text-gold
                @elseif (Str::contains(strtolower($rank), 'platino'))
                    text-platinum
                @elseif (Str::contains(strtolower($rank), 'diamante'))
                    text-diamond
                @elseif (Str::contains(strtolower($rank), 'maestro'))
                    text-master
                @elseif (Str::contains(strtolower($rank), 'gran maestro'))
                    text-grandmaster
                @elseif (Str::contains(strtolower($rank), 'challenger'))
                    text-challenger
                @else
                    text-text_light
                @endif
            ">{{ $rank }}</div>
            <div>{{ $lp }} LP</div>
        </div>
        <div class="flex-1 flex flex-col justify-end">
            <div class="text-right">{{ $wins }}W {{ $losses }}L</div>
            <div class="text-right">WinRate {{ $winrate }}%</div>
        </div>
    </div>
</div>

