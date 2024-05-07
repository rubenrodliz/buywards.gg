@props(['class'])

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
                <canvas id="PorcentajeWinRate" width="75" height="70"></canvas>
                <x-historial-wins-loses wins="5" loses="8" />
            </div>

            <x-historial-k-d-a kills="5" deaths="4" assists="10" />
        </div>
        <div class="flex w-[45%] justify-between items-center">
            <!-- ToDo: Cuando la respuesta de la API esté creada, pasar esto
                a un foreach para que se creen los componentes de manera dinámica
             -->
            <x-historial-champ-stats champName="Kai'sa" champKDA="5,43" champWinRate="50" champWins="5" champLoses="5" champImage="kaisa" />
            <x-historial-champ-stats champName="Kai'sa" champKDA="5,43" champWinRate="30" champWins="5" champLoses="5" champImage="kaisa" />
            <x-historial-champ-stats champName="Kai'sa" champKDA="5,43" champWinRate="70" champWins="5" champLoses="5" champImage="kaisa" />
        </div>
    </div>
</div>
