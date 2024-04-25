<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 flex-col items-center p-11">
        <section class="flex self-end">
            <a href="#" class="font-bold text-2xl bg-primary rounded-lg py-2 px-4">
                Login
            </a>
        </section>

        <section class="w-[875px] mt-6">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/logo_text.svg') }}" alt="Buywards logo">
                <img src="{{ asset('images/League_of_Legends.svg') }}" alt="League of Legends logo">
            </div>

            <x-searchbar.searchbar />
        </section>

        <section class="mt-16">
            <div>
                <h4 id="latest-champions" class="font-bold text-bg_light text-4xl text-center">Latest champions</h4>
            </div>
            <div class="latests-champions flex justify-between gap-16 mt-4">
                <x-champion-card :champion="'Smolder'" />
                <x-champion-card :champion="'Hwei'" />
                <x-champion-card :champion="'Briar'" />
            </div>
        </section>
    </main>

    
</x-main-layout>
