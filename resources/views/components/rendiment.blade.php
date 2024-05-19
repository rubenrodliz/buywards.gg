@props(['class' => '', 'summonerData'])
@php
    // dd($summonerData);
@endphp
{{-- @dd($data->champ1) --}}
<div class="py-4 px-4 w-[100%] border-primary border-solid border-2 rounded-[10px] flex flex-col bg-transparent text-text_light bg-opacity-60 bg-bg_dark {{ $class }}">
{{-- <div class="w-[390px] h-[381px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent  text-white"> --}}
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
        @dd($champData)
            <div class="w-full h-fit mb-4 flex justify-between items-center font-semibold">
                <x-champ-performance champName="{{$champData['champid']}}" champKDA="{{$champData["4.89"]}}" champWinRate="{{$champData['winrate']}}" champWins="{{$champData['totalWins']}}" champLoses="{{$data->$champ->loses}}" champImage="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$data->$champ->champLogo}}.png" />
            </div>
        @endforeach
    </div>
</div>
