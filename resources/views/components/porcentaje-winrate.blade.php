@props(['class','summonerData'])
{{-- @dd($summonerData) --}}
@php
    $wins=0;
    $loses=0;
    $kda=0;
    foreach ($summonerData as $champ) {
        $wins+=$champ["totalWins"]+$champ["totalWins"];
        $loses+=($champ["counts"]-$champ["totalWins"]);
        $kda+=($champ["totalKDA"]+$champ["totalKDA"]);
    }
    $kda=$kda/count($summonerData);
@endphp
<div class="border-solid border-2 border-primary rounded-[10px] flex flex-col bg-transparent text-text_light bg-opacity-60 bg-bg_dark h-fit {{ $class }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <div class="w-[1100px] h-[165px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent text-white"> --}}
    <div class="flex justify-center p-4">
        <div class="flex flex-row justify-between w-[50%]">
            <x-performance-selector-button isSelected="true" name="Total" />
            <x-performance-selector-button name="SoloQ" />
            <x-performance-selector-button name="Flex" />
        </div>
        <div class="w-[50%] flex justify-end">
            <x-search-champion />
        </div>

    </div>
    <hr class="text-primary">
    <div class="flex flex-wrap md:flex-nowrap p-4 justify-between">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex flex-wrap sm:flex-nowrap gap-8">
                <canvas id="PorcentajeWinRate" width="75" height="70" win="{{$wins}}" lose="{{$loses}}"></canvas>
                <div class="flex flex-wrap items-center">
                    <x-historial-wins-loses wins="{{$wins}}" loses="{{$loses}}" />
                    <p class="text-lg font-bold w-[80px] ml-0 2xl:ml-8 {{ round($kda,3) }}">{{ round($kda,3) }} KDA</p>
                </div>
            </div>
            {{-- <x-historial-k-d-a kda="{{($data->champ1->kda+$data->champ2->kda+$data->champ3->kda)/3}}"/> --}}
        </div>
        <div class="flex flex-wrap justify-center items-center">
            <div class="w-full h-fit mb-4 flex justify-between items-center font-semibold">
                @for ($i=0;$i<3;$i++)
                    {{-- @dd($summonerData[$i]) --}}
                    @if (isset($summonerData[$i]))
                        {{-- @dump($summonerData[$i]) --}}
                        @php
                                $championName=$summonerData[$i]['championName'];
                                $totalKDA=$summonerData[$i]['totalKDA'];
                                $winrate=round($summonerData[$i]['winrate'],2);
                                $totalWins=$summonerData[$i]['totalWins'];
                                $counts=$summonerData[$i]['counts'];
                                $championId=$summonerData[$i]['championId'];
                                $champLoses=$counts-$totalWins;
                        @endphp
                        <x-historial-champ-stats champName="{{$championName}}" champKDA="{{$totalKDA}}" champWinRate="{{$winrate}}" champWins="{{$totalWins}}" champLoses="{{$champLoses}}" champImage="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$championId}}.png"/>
                    @endif
                @endfor
            </div>
        </div>
    </div>
</div>
