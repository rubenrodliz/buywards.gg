{{-- <div {{ $attibutes->merge(['class'=>"w-[390px] h-[381px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col m-[200px] bg-dark"]) }}> --}}
<div class="w-[390px] h-[381px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col m-[200px] bg-dark">
    <div class="w-[94%] h-[10%] my-[3%] mx-[5%]">
        @php
            $titulo="Rendimiento";
        @endphp
        @include("components.barra-titulos")
    </div>
    <div class="w-[94%] h-[12%] my-[3%] mx-[5%] flex">
        <div class="w-[30%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary bg-primary text-[15px] flex items-center text-center justify-center"><p>Total</p></div>
        <div class="w-[30%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center"><p class="text-primary">SoloQ</p></div>
        <div class="w-[30%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center"><p class="text-primary">Flex</p></div>
    </div>
</div>
