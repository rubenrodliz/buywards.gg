@props(['class' => ''])

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
