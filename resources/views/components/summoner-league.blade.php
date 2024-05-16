@props(['data','class'])
@php
    $data = json_decode(str_replace("&quot;",'"',$data));
@endphp
<div class="flex flex-col text-text_light border-2 border-primary border-solid rounded-lg p-4 bg-transparent h-[130px] bg-opacity-60 bg-bg_dark {{ $class }}">
    <div class="flex-1">
        <x-barra-titulos titulo="{{ $data->queueType }}" />
        </div>
        <div class="flex flex-row flex-wrap justify-center items-center">
            <img src="{{ asset('images/ranks/' . strtolower($data->tier)  . '.webp') }}" alt="league rank" class="w-[20%] mr-3">
            <div class="flex-1 flex flex-col">
                <div class="text-xl font-semibold text-{{ strtolower($data->tier) }}">
                    {{ $data->tier }} {{ $data->rank }}
                </div>
            {{-- @dd($data->leaguePoints) --}}
            <div>{{$data->leaguePoints}} LP</div>
        </div>
        <div class="flex-1 flex flex-col justify-end">
            <div class="text-right">{{ $data->wins }}W {{ $data->loses }}L</div>
            <div class="text-right">WinRate {{ $data->winRate }}%</div>
        </div>
    </div>
</div>

