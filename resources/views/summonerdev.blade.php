<x-summoner-layout >
    @section('scripts')
        @vite(['resources/css/summoner.css'])
        @vite(['resources/js/porcentajeWinRate.js'])
        @vite(['resources/js/dataSummoner.js'])
    @endsection
    @php
        $jsonPath = resource_path('data/mock.json');
        if (file_exists($jsonPath)) {
            $jsonContent = file_get_contents($jsonPath);
            $data = json_decode($jsonContent);
        } else {
            $data = null;
        }

        $prueba = new \App\Models\Summoner('KillerChino800', 'EUW', 'EUW1');
        $prueba->execute();

        $data_rankSolo=json_encode($data->rankedSolo);
        $data_rankFlex=json_encode($data->rankedFlex);
        $data_performance_total=json_encode($data->performance->total);
        $data_performance_solo=json_encode($data->performance->solo);
        $data_performance_flex=json_encode($data->performance->flex);
    // $data_games=json_encode($data->games->game0);
    @endphp
    @php

    @endphp
    <main class="flex w-full flex-col">
        <x-top-navbar />
        <section class="flex flex-1 flex-col items-center p-[40px] bg-cover bg-fixed" style="background-image: linear-gradient(to right, #1c1c1f, #1c1c1f85, #1c1c1f), url('https://cdn.communitydragon.org/14.8.1/champion/{{$data->performance->total->champ1->champName}}/splash-art');">
            <section class="w-[90%] mt-7">
                <div class="flex justify-between items-center pb-[50px]">
                    <div class="flex justify-start gap-[30px]">
                        <div class="w-[150px] h-[150px] p-[100px] bg-primary rounded-lg py-2 px-4" id="img">
                            <img src="https://ddragon.leagueoflegends.com/cdn/14.9.1/img/profileicon/{{$data->profileIconId}}.png" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-[50px]">
                            <h1 id="user_name" class="text-5xl text-text_light">
                                {{$data->gameName}}<span id='hastag' class='text-primary'>#{{$data->tagLine}}</span>
                            </h1>
                            <a href="#" class="text-center font-bold text-2xl bg-primary rounded-lg py-2 px-4 w-40">
                                Update
                            </a>
                        </div>
                    </div>
                    <div class="justify-end"></div>
                </div>

                @php
                // $prueba = new \App\Models\Summoner('OkasarRP', 'LSG', 'EUW1');
                // $prueba->execute();
            @endphp
                <div class="flex gap-[50px] pt-[30px] pb-[30px]">
                    <div class="w-[100px]">
                        <h4 class="active font-bold text-text_light text-2xl text-left">
                            Resumen
                        </h4>
                    </div>
                    <div class="w-[200px]">
                        <h4 class=" text-text_light text-2xl text-left">
                            Juego en vivo
                        </h4>
                    </div>
                </div>
                <div id="data_summoner" class="grid grid-cols-12 gap-5">
                    <x-summoner-league data="{{$data_rankSolo}}" class="col-start-1 col-span-3 row-start-1" />
                    <x-summoner-league data="{{$data_rankFlex}}" class="col-start-1 col-span-3 row-start-2"/>
                    <x-rendiment class="col-start-1 col-span-3 row-start-3" data="{{$data_performance_total}}"/>
                    <div class=" grid grid-cols-12 grid-rows-6 col-start-4 col-span-9 row-start-1 row-span-12" >
                        <x-porcentaje-winrate data="{{$data_performance_total}}" class="col-start-1 col-span-12 row-start-1"/>
                        @for ($i=0;$i<5;$i++)
                            @php
                                $game="game".$i;
                            @endphp
                            <x-game data="{{json_encode($data->games->$game)}}" class="col-start-1 col-span-12" />
                            <x-game-open data="{{json_encode($data->games->$game)}}" class="col-start-1 col-span-12 hidden" />
                        @endfor
                        {{-- <x-game class="col-start-1 col-span-12" win_lose="Derrota" titulo="Clasificatoria Flexible" rank="Diamond" tier="4"/> --}}
                    </div>
                </div>
            </section>
        </section>
    </main>
</x-summoner-layout>


