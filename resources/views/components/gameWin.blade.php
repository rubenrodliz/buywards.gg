<div {{ $attributes->merge(['class'=>"mt-[10px] border-[#2D62D7] border-solid border-[1px] rounded-[10px] flex justify-between bg-transparent text-[#2D62D7] h-[20]"]) }}>
    <div class="w-8 h-full bg-[#2D62D7] rounded-l-[10px]"></div>
    <div class="w-[17%] h-[80%] self-center text-[#FFFFFF] text-[16px] font-medium">
        <h2 class="text-[20px] font-bold">Ranqued SoloQ</h2>
        <p>Hace 7 días</p>
        <hr class="text-[#2D62D7] my-[10px]">
        <p><span class="text-[#2D62D7]">Victoria</span> 20:41</p>
        <p>Diamante 2</p>
    </div>
    <div class="w-[30%] h-[80%] self-center text-[#FFFFFF] text-[16px] font-medium flex flex-wrap">
        <div class="w-[30%] h-[60%]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="h-full">
        </div>
        <div class="w-[70%] h-[60%] flex">
            <div class="flex flex-wrap w-[40%]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[50%] rounded-[10px]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[50%] rounded-[10px]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[50%] rounded-[10px]">
                <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[50%] rounded-[10px]">
            </div>
            <div class="ml-[15px]">
                <h2 class="text-[20px]">9 / <span class="text-[#F54B4E]">4</span> / 7</h2>
                <p class="text-[16px] text-[#2D62D7]">5,45 KDA</p>
                <p class="text-[16px]">140 CS (7,9)</p>
            </div>
        </div>
        <div class="w-full h-[35%] flex">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[14%] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[14%] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[14%] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[14%] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[14%] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[14%] rounded-[10px] ml-[1px]">
            <img src="{{ asset('images/kaisa.png') }}" alt="" class="w-[14%] rounded-[10px] ml-[1px]">
        </div>
    </div>
    <div class="w-[30%] flex flex-wrap my-[20px]">
        @for ($i=1;11>$i;$i++)
            <div class="flex w-[50%]">
                <img src="{{ asset('images/kaisa.png') }}" class="w-[20%] rounded-[10px] ml-[1px]">
                <p class="text-[#FFFFFF]">Summoner1</p>
            </div>
        @endfor
    </div>
    <div class="w-8 h-full bg-[#2D62D7] rounded-r-[10px] flex items-end"><img src="{{ asset('images/flechaAbajo.svg') }}" alt="fecha abajo" class="w-full"></div>
</div>
