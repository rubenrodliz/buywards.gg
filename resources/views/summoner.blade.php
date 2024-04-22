
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

        <div class="w-[875px] mt-7">
            <div class="flex justify-between items-center">

            </div>
            <div class="flex gap-5">
                <x-summoner-league class="justyfy-start"/>
                <x-rendiment class="justify-left"/>
            </div>

        </div>


    </main>


</x-main-layout>

