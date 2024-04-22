
<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 flex-col items-center p-[40px]">
        <div class="flex self-end">
            <a href="#" class="font-bold text-2xl bg-primary rounded-lg py-2 px-4">
                Login
            </a>
        </div>

        <div class="w-[90%] mt-7">
            <div class="flex justify-between items-center">

            </div>
            <div class="grid grid-cols-12 gap-5">
                    <x-summoner-league class="col-start-1 col-span-3 row-start-1"/>
                    <x-summoner-league class="col-start-1 col-span-3 row-start-2"/>
                    <x-rendiment class="col-start-1 col-span-3 row-start-3"/>
                    <div class=" grid grid-cols-12 grid-rows-12 col-start-4 col-span-9 row-span-12" >
                        <x-porcentajeWinrate class="col-start-1 col-span-12"/>
                    </div>
            </div>

        </div>


    </main>


</x-main-layout>

