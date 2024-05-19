@props(['class' => '', 'summonerData'])
<div class="py-4 px-4 w-[100%] border-primary border-solid border-2 rounded-[10px] flex flex-col bg-transparent text-text_light bg-opacity-60 bg-bg_dark {{ $class }}">
    <div>
        <x-barra-titulos titulo="Rendimiento" />
    </div>
    <div class="h-[12%] flex flex-row justify-between mb-4 w-full">
        <x-performance-selector-button isSelected="true" name="Total" />
        <x-performance-selector-button name="SoloQ" />
        <x-performance-selector-button name="Flex" />
    </div>
    <div class="self-center flex flex-col w-full">
        @foreach ($summonerData as $champData)
        {{-- @dd($champData['championName']) --}}
            @php
                $championName=$champData['championName'];
                $totalKDA=$champData['totalKDA'];
                $winrate=round($champData['winrate'],2);
                $totalWins=$champData['totalWins'];
                $counts=$champData['counts'];
                $championId=$champData['championId'];
                $champLoses=$counts-$totalWins;
            @endphp
            <div class="w-full h-fit mb-4 flex justify-between items-center font-semibold">
                <x-champ-performance champName="{{$championName}}" champKDA="{{$totalKDA}}" champWinRate="{{$winrate}}" champWins="{{$totalWins}}" champLoses="{{$champLoses}}" champImage="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$championId}}.png" />
            </div>
        @endforeach
    </div>
</div>
