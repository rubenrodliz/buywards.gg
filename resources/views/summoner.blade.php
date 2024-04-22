
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
                    <x-porcentajeWinrate class="col-start-4 col-span-9 row-start-1"/>


            </div>

        </div>


    </main>


</x-main-layout>

