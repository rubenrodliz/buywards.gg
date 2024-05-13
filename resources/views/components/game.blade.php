@props(['win_lose','titulo','rank','tier'])
@vite(['/resources/css/summoner.css'])
@php
    if ($win_lose=="Victoria") {
        $color="kda_blue";
        $bgColor="bg-kda_blue";
    }else{
        $color="kda_red";
        $bgColor="bg-kda_red";
    }
@endphp

<div {{ $attributes->merge(['class'=>"bg-opacity-60 bg-bg_dark mt-[20px] border-$color border-solid border-[1px] rounded-xl flex justify-between text-$color h-[20]"]) }}>
    <div class="w-8 h-full {{$bgColor}} rounded-l-[10px]"></div>
    <div class="w-[17%] self-center text-text_light text-[16px] font-medium">
        <h2 class="text-[20px] font-bold">{{$titulo}}</h2>
        <p>Hace 7 días</p>
        <hr class="text-{{$color}} my-[10px]">
        <p><span class="text-{{$color}}">{{$win_lose}}</span> 20:41</p>
        <p>{{$rank}} {{ $tier }}</p>
    </div>
    <div class="w-[30%] h-[80%] self-center text-text_light text-[16px] font-medium flex flex-wrap items-center justify-center">
        <div class="w-[70px] h-[50%]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-full rounded-lg">
        </div>
        <div class="ml-[5%] w-[70%] h-fit flex">
            <div class="flex flex-wrap w-[40%] gap-1">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[35px] rounded-lg">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[35px] rounded-lg">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[35px] rounded-lg">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[35px] rounded-lg">
            </div>
            <div class="ml-[15px]">
                <h2 class="text-[20px]">9 / <span class="text-kda_red">4</span> / 7</h2>
                <p class="text-[16px] text-{{$color}}">5,45 KDA</p>
                <p class="text-[16px]">140 CS (7,9)</p>
            </div>
        </div>
        <div class="w-full h-[35%] flex items-center justify-start gap-1">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[35px] rounded-lg">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[35px] rounded-lg">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[35px] rounded-lg">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[35px] rounded-lg">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[35px] rounded-lg">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[35px] rounded-lg">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[35px] rounded-lg">
        </div>
    </div>
    <div class="m-2 w-[30%] flex flex-wrap">
        @for ($i=1;11>$i;$i++)
            <div class="flex items-center w-[50%] my-[2px]">
                <img src="{{ asset('images/kaisa.png') }}" class="w-[30px] rounded-lg">
                <p class="text-text_light">Summoner1</p>
            </div>
        @endfor
    </div>
    <div class="w-8 h-full {{$bgColor}} rounded-r-[10px] flex items-end"><img src="{{ asset('images/flechaAbajo.svg') }}" alt="fecha abajo" class="w-full"></div>
</div>
