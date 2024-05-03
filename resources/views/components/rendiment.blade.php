<div {{ $attributes->merge(['class'=>"py-4 px-4 w-[100%] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent text-text_light"]) }}>
{{-- <div class="w-[390px] h-[381px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent  text-white"> --}}
    <div class="h-[10%] mb-4">
        <x-barra-titulos titulo="Rendimiento" />
    </div>
    <div class="h-[12%] flex flex-row justify-between mb-4 w-full">
        <div class="py-2 w-[25%] rounded-[10px] border-2 border-solid border-primary bg-primary text-md flex items-center text-center justify-center text-text_dark font-semibold"><p>Total</p></div>
        <div class="py-2 w-[25%] rounded-[10px] border-2 border-solid border-primary text-md flex items-center text-center justify-center text-primary hover:bg-primary hover:text-text_dark hover:font-semibold hover:cursor-pointer"><p>SoloQ</p></div>
        <div class="py-2 w-[25%] rounded-[10px] border-2 border-solid border-primary text-md flex items-center text-center justify-center text-primary hover:bg-primary hover:text-text_dark hover:font-semibold hover:cursor-pointer"><p>Flex</p></div>
    </div>
    <div class="self-center flex flex-col w-full">
        <div class="w-full h-fit mb-4 flex justify-between items-center font-semibold">
            <x-champ-performance champName="Kai'sa" champKDA="3.69" champWinRate="52" champWins="8" champLoses="7" champImage="{{asset('images/kaisa.png')}}" />
        </div>
        <div class="w-full h-fit mb-4 flex justify-between items-center font-semibold">
            <x-champ-performance champName="Kai'sa" champKDA="0.8" champWinRate="30" champWins="8" champLoses="7" champImage="{{asset('images/kaisa.png')}}" />
        </div>
        <div class="w-full h-fit mb-4 flex justify-between items-center font-semibold">
            <x-champ-performance champName="Kai'sa" champKDA="2.49" champWinRate="62" champWins="8" champLoses="7" champImage="{{asset('images/kaisa.png')}}" />
        </div>
        <div class="w-full h-fit flex justify-between items-center font-semibold">
            <x-champ-performance champName="Kai'sa" champKDA="6.77" champWinRate="52" champWins="8" champLoses="7" champImage="{{asset('images/kaisa.png')}}" />
        </div>
    </div>
</div>
