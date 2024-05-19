<x-summoner-layout >
    @section('scripts')
        @vite(['resources/css/summoner.css'])
        @vite(['resources/js/porcentajeWinRate.js'])
        @vite(['resources/js/summonerDataSummoner.js'])
    @endsection
    @php
        /* $jsonPath = resource_path('summonerData/mock.json');
        if (file_exists($jsonPath)) {
            $jsonContent = file_get_contents($jsonPath);
            $summonerData = json_decode($jsonContent);
        } else {
            $summonerData = null;
        } */



        // dd($summonerData);
        $summonerData_rankSolo = $summonerData['rankedSolo'];
        $summonerData_rankFlex = $summonerData['rankedFlex'];
        $summonerData_performance_total = $summonerData['performance']['total'];
        $summonerData_performance_solo = $summonerData['performance'];
        $summonerData_performance_flex = $summonerData['performance'];
        // dd($summonerData_rankSolo);
        // dd($summonerData, $summonerData_rankSolo, $summonerData_rankFlex, $summonerData_performance_total, $summonerData_performance_solo, $summonerData_performance_flex);
    @endphp
    <main class="flex w-full flex-col">
        <x-top-navbar />
        <section class="flex flex-1 flex-col items-center p-0 lg:p-[40px] bg-cover bg-fixed" style="background-image: linear-gradient(to right, #1c1c1f, #1c1c1f85, #1c1c1f), url('https://cdn.communitydragon.org/14.8.1/champion/{{$summonerData['performance']['total'][0]['champId']}}/splash-art');">
            <section class="w-[90%] mt-7">
                <div class="flex justify-between items-center pb-[50px]">
                    <div class="flex justify-start gap-[30px]">
                        <div class="relative w-[150px]">
                            <div class="w-[150px] h-[150px] bg-primary rounded-lg bg-cover border-2 border-primary"
                                style="background-image: url('https://ddragon.leagueoflegends.com/cdn/14.9.1/img/profileicon/{{ $summonerData['profileIconId'] }}.png');">
                            </div>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 px-2 py-1 bg-bg_dark text-text_light font-semibold border-2 border-primary rounded-lg">
                                {{ $summonerData['summonerLevel'] }}
                            </div>
                        </div>


                        <div class="flex flex-col gap-[50px]">
                            <h1 id="user_name" class="text-5xl text-text_light">
                                {{$summonerData['gameName']}}<span id='hastag' class='text-primary font-semibold'> #{{$summonerData['tagLine']}}</span>
                            </h1>
                            <a href="#" class="text-center font-bold text-2xl bg-primary rounded-lg py-2 px-4 w-40">
                                Update
                            </a>
                        </div>
                    </div>
                    <div class="justify-end"></div>
                </div>
                <div class="flex gap-[50px] pt-[30px] pb-[30px]">
                    <div class="w-[100px]">
                        <h4 class="active font-bold text-text_light text-2xl text-left">
                            Resumen
                        </h4>
                    </div>
                    <div class="w-[200px]">
                        <h4 class=" text-text_light text-2xl text-left">
                            Live game
                        </h4>
                    </div>
                </div>
                <div id="summonerData_summoner" class="grid grid-cols-12 gap-5">
                    <x-summoner-league :summonerData="$summonerData_rankSolo" class="col-start-1 col-span-12 lg:col-span-3 row-start-1" />
                    <x-summoner-league :summonerData="$summonerData_rankFlex" class="col-start-1 col-span-12 lg:col-span-3 row-start-2" />
                    <x-rendiment class="col-start-1 col-span-12 lg:col-span-3 row-start-3" :summonerData="$summonerData_performance_total" />
                    <div class="grid grid-cols-12 lg:col-start-4 col-start-1 lg:col-span-9 col-span-12 lg:row-start-1 row-start-4 row-span-12">
                        {{-- <x-porcentaje-winrate :summonerData="$summonerData_performance_total" class="col-start-1 col-span-12 row-start-1" /> --}}
                        @dd($summonerData['games'])
                        @foreach ($summonerData['games'] as $game)
                            <x-game :summonerData="$game['game'][10]" class="col-start-1 col-span-12 mt-4"/>
                            <x-game-open :summonerData="$game" class="col-start-1 col-span-12 mt-4"/>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>
    </main>
</x-summoner-layout>


