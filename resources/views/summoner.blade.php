


<x-main-layout >
    @section('scripts')
    @vite(['resources/css/summoner.css'])
    @vite(['resources/js/porcentajeWinRate.js'])
@endsection

    <main class="flex flex-1 flex-col items-center p-[40px]">
        <div class="flex self-end">
            <a href="#" class="font-bold text-2xl bg-primary rounded-lg py-2 px-4">
                Login
            </a>
        </div>

        <div class="w-[90%] mt-7">
            <div class="flex justify-between items-center pb-[50px]">
                <div class="flex justify-start gap-[30px]">

                    <div class="w-200 h-200 p-[100px] bg-primary rounded-lg py-2 px-4">Summoner icon</div>
                    <div class="flex flex-col gap-[50px]">
                        <h1 class="text-5xl text-[#FFFFFF]">User Name <span class="text-primary">#hastag</span></h1>
                        <a href="#" class="text-center font-bold text-2xl bg-primary rounded-lg py-2 px-4 w-40">
                            Update
                        </a>

                    </div>



                </div>
                <div class="justify-end"></div>

            </div>
            <div class="flex gap-[50px] pt-[30px] pb-[30px]">
                <div class="w-[100px]">
                    <h4 class="active font-bold text-bg_light text-2xl text-left">Resumen</h4>
                </div>
                <div class="w-[200px]">
                    <h4 class=" text-bg_light text-2xl text-left">Juego en vivo</h4>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5">
                {{-- @if($summoner)
                    <x-summoner-league titulo="Clasificatoria Solo/Duo" class="col-start-1 col-span-3 row-start-1"/>';
                    <x-summoner-league titulo="Clasificatoria Flexible" class="col-start-1 col-span-3 row-start-2"/>';
                @else
                    <x-summoner-unranked titulo = "Clasificatoria Solo/Duo"></x-summoner-unranked>
                    <x-summoner-unranked titulo = "Clasificatoria Flexible"></x-summoner-unranked>
                @endif --}}
                <x-summoner-league titulo="Clasificatoria Solo/Duo" class="col-start-1 col-span-3 row-start-1"/>';
                <x-summoner-league titulo="Clasificatoria Flexible" class="col-start-1 col-span-3 row-start-2"/>';
                <x-rendiment class="col-start-1 col-span-3 row-start-3"/>';
                <div class=" grid grid-cols-12 grid-rows-12 col-start-4 col-span-9 row-start-1 row-span-12" >';
                    <x-porcentajeWinrate class="col-start-1 col-span-12 row-start-1"/>';
                </div>'
            </div>
        </div>


    </main>


</x-main-layout>



