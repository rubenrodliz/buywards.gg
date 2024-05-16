@props(['class','data'])
@php
    $data = json_decode(str_replace("&quot;",'"',$data));
@endphp
{{-- @dd($data->champ1->champLogo) --}}
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
    <div class="flex p-4 justify-between">
        <div class="flex justify-between items-center w-[30%]">
            <div class="flex gap-8">
                <canvas id="PorcentajeWinRate" width="75" height="70" win="{{$data->champ1->wins+$data->champ2->wins+$data->champ3->wins}}" lose="{{$data->champ1->loses+$data->champ2->loses+$data->champ3->loses}}"></canvas>
                <x-historial-wins-loses wins="{{$data->champ1->wins+$data->champ2->wins+$data->champ3->wins}}" loses="{{$data->champ1->loses+$data->champ2->loses+$data->champ3->loses}}" />
            </div>

            <x-historial-k-d-a kda="{{($data->champ1->kda+$data->champ2->kda+$data->champ3->kda)/3}}"/>
        </div>
        <div class="flex w-[50%] justify-between items-center">
            <!-- ToDo: Cuando la respuesta de la API esté creada, pasar esto
                a un foreach para que se creen los componentes de manera dinámica
             -->
            <x-historial-champ-stats champName="{{$data->champ1->champName}}" champKDA="{{$data->champ1->kda}}" champWinRate="{{$data->champ1->winrate}}" champWins="{{$data->champ1->wins}}" champLoses="{{$data->champ1->loses}}" champImage="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$data->champ1->champLogo}}.png" />
            <x-historial-champ-stats champName="{{$data->champ2->champName}}" champKDA="{{$data->champ2->kda}}" champWinRate="{{$data->champ2->winrate}}" champWins="{{$data->champ2->wins}}" champLoses="{{$data->champ2->loses}}" champImage="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$data->champ2->champLogo}}.png" />
            <x-historial-champ-stats champName="{{$data->champ3->champName}}" champKDA="{{$data->champ3->kda}}" champWinRate="{{$data->champ3->winrate}}" champWins="{{$data->champ3->wins}}" champLoses="{{$data->champ3->loses}}" champImage="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/{{$data->champ3->champLogo}}.png" />
        </div>
    </div>
</div>
