@props(['data','class'])
@php
    $data = json_decode(str_replace("&quot;",'"',$data));
@endphp
<div class="flex flex-col text-text_light border-2 border-primary border-solid rounded-lg p-4 bg-transparent bg-opacity-60 bg-bg_dark {{ $class }}">
    <div class="flex-1">
        <x-barra-titulos titulo="{{ $data->queueType == 'RANKED_SOLO_5x5' ? 'Ranked SoloQ' : 'Ranked Flex' }}" />
    </div>
    <div class="flex flex-row flex-wrap justify-center xl:justify-between items-center">
        <img src="{{ asset('images/ranks/' . strtolower($data->tier)  . '.webp') }}" alt="league rank" class="w-[20%] mr-3">
        <div class="flex flex-col">
            <div class="xl:text-xl lg:text-lg font-semibold text-{{ strtolower($data->tier) }}">
                {{ $data->tier }} {{ $data->rank }}
            </div>
        {{-- @dd($data->leaguePoints) --}}
        <div>{{$data->leaguePoints}} LP</div>
        </div>
        <div class="flex flex-col justify-end">
            <div class="text-center xl:text-right">{{ $data->wins }}W {{ $data->loses }}L</div>
            <div class="text-center xl:text-right">WinRate {{ $data->winRate }}%</div>
        </div>
    </div>
</div>

