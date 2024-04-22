<div {{ $attributes->merge(['class'=>"w-[390px] h-[381px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-[#1C1C1F] text-white"]) }}>
<div class="w-[390px] h-[381px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-[#1C1C1F] text-white">
    <div class="w-[94%] h-[10%] my-[3%] mx-[5%]">
        <x-barra-titulos titulo="Rendimiento" />
    </div>
    <div class="w-[94%] h-[12%] my-[3%] mx-[5%] flex">
        <div class="w-[30%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary bg-primary text-[15px] flex items-center text-center justify-center"><p>Total</p></div>
        <div class="w-[30%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center text-primary hover:bg-primary hover:text-[#FFFFFF]"><p>SoloQ</p></div>
        <div class="w-[30%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center text-primary hover:bg-primary hover:text-[#FFFFFF]"><p>Flex</p></div>
    </div>
    <div class="h-[70%] w-[90%] self-center flex flex-col">
        <div class="h-[20%] w-[100%] my-[1.5%] flex">
            <div class="h-full w-[15%]"><img src="{{asset('images/kaisa.png')}}" alt="kai'sa lol character" class="w-full rounded-[10px]"></div>
            <div class="h-full w-[50%] pl-[20px]"><p class="text-[15px]">Kai'sa</p><p class="text-[15px] text-[#2D62D7]">3.69 KDA</p></div>
            <div class="h-full w-[35%] text-end"><p class="text-[15px] text-[#2D62D7]">52%</p><p class="text-[15px]">8V - 7D</p></div>
        </div>
        <div class="h-[20%] w-[100%] my-[1.5%] flex">
            <div class="h-full w-[15%]"><img src="{{asset('images/kaisa.png')}}" alt="kai'sa lol character" class="w-full rounded-[10px]"></div>
            <div class="h-full w-[50%] pl-[20px]"><p class="text-[15px]">Kai'sa</p><p class="text-[15px] text-[#F54B4E]">0.8 KDA</p></div>
            <div class="h-full w-[35%] text-end"><p class="text-[15px] text-[#F54B4E]">30%</p><p class="text-[15px]">8V - 7D</p></div>
        </div>
        <div class="h-[20%] w-[100%] my-[1.5%] flex">
            <div class="h-full w-[15%]"><img src="{{asset('images/kaisa.png')}}" alt="kai'sa lol character" class="w-full rounded-[10px]"></div>
            <div class="h-full w-[50%] pl-[20px]"><p class="text-[15px]">Kai'sa</p><p class="text-[15px] text-[#F69601]">7.29 KDA</p></div>
            <div class="h-full w-[35%] text-end"><p class="text-[15px] text-[#F69601]">70%</p><p class="text-[15px]">8V - 7D</p></div>
        </div>
        <div class="h-[20%] w-[100%] my-[1.5%] flex">
            <div class="h-full w-[15%]"><img src="{{asset('images/kaisa.png')}}" alt="kai'sa lol character" class="w-full rounded-[10px]"></div>
            <div class="h-full w-[50%] pl-[20px]"><p class="text-[15px]">Kai'sa</p><p class="text-[15px] text-[#2D62D7]">2.49 KDA</p></div>
            <div class="h-full w-[35%] text-end"><p class="text-[15px] text-[#2D62D7]">62%</p><p class="text-[15px]">8V - 7D</p></div>
        </div>
    </div>
</div>
