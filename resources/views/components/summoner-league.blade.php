@props(['summonerData','class'])

<div class="flex flex-col text-text_light border-2 border-primary border-solid rounded-lg p-4 bg-transparent bg-opacity-60 bg-bg_dark {{ $class }}">
    <div class="flex-1">
        <x-barra-titulos titulo="{{ $summonerData['queueType'] == 'RANKED_SOLO_5x5' ? 'Ranked SoloQ' : 'Ranked Flex' }}" />
    </div>
    @if ($summonerData['queueType'] == 'UNRANKED')
        <div class="text-lg">
            Unranked
        </div>
    @else
        <div class="flex flex-row flex-wrap justify-center xl:justify-between items-center">
            <img src="{{ asset('images/ranks/' . strtolower($summonerData['tier'])  . '.webp') }}" alt="league rank" class="w-[20%] mr-3">
            <div class="flex flex-col">
                <div class="xl:text-xl lg:text-lg font-semibold text-{{ strtolower($summonerData['tier']) }}">
                    {{ $summonerData['tier'] }} {{ $summonerData['rank'] }}
                </div>
                <div>{{ $summonerData['leaguePoints'] }} LP</div>
            </div>
            <div class="flex flex-col justify-end">
                <div class="text-center xl:text-right">{{ $summonerData['wins'] }}W {{ $summonerData['losses'] }}L</div>
                <div class="text-center xl:text-right">WinRate {{ round($summonerData['winRatio'], 2) }}%</div>
            </div>
        </div>
    @endif
</div>
