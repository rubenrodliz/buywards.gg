@props(['win_lose','titulo','rank','tier'])
@php
    if ($win_lose=="Victoria") {
        $color="kda_blue";
    }else{
        $color="kda_red";
    }
@endphp

<div {{ $attributes->merge(['class'=>"mt-[10px] border-$color border-solid border-[1px] rounded-[10px] flex justify-between bg-transparent text-$color h-[20]"]) }}>
    <div class="w-8 h-full bg-{{$color}} rounded-l-[10px]"></div>
    <div class="w-[17%] h-[80%] self-center text-[#FFFFFF] text-[16px] font-medium">
        <h2 class="text-[20px] font-bold">{{$titulo}}</h2>
        <p>Hace 7 días</p>
        <hr class="text-{{$color}} my-[10px]">
        <p><span class="text-{{$color}}">{{$win_lose}}</span> 20:41</p>
        <p>{{$rank}} {{ $tier }}</p>
    </div>
    <div class="w-[30%] h-[80%] self-center text-[#FFFFFF] text-[16px] font-medium flex flex-wrap">
        <div class="w-[70px] h-[50%]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-full rounded-[10px]">
        </div>
        <div class="ml-[5%] w-[70%] h-[50%] flex">
            <div class="flex flex-wrap w-[40%]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[40px] rounded-[10px]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[40px] rounded-[10px]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[40px] rounded-[10px]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[40px] rounded-[10px]">
            </div>
            <div class="ml-[15px]">
                <h2 class="text-[20px]">9 / <span class="text-[#F54B4E]">4</span> / 7</h2>
                <p class="text-[16px] text-{{$color}}">5,45 KDA</p>
                <p class="text-[16px]">140 CS (7,9)</p>
            </div>
        </div>
        <div class="w-full h-[35%] flex">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[40px] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[40px] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[40px] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[40px] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[40px] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[40px] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-[40px] rounded-[10px] ml-[1px]">
        </div>
    </div>
    <div class="w-[30%] flex flex-wrap my-[20px]">
        @for ($i=1;11>$i;$i++)
            <div class="flex items-center w-[50%]">
                <img src="{{ asset('images/kaisa.png') }}" class="w-[30px] rounded-[10px] ml-[1px]">
                <p class="text-[#FFFFFF]">Summoner1</p>
            </div>
        @endfor
    </div>
    <div class="w-8 h-full bg-{{$color}} rounded-r-[10px] flex items-end"><img src="{{ asset('images/flechaAbajo.svg') }}" alt="fecha abajo" class="w-full"></div>
</div>
