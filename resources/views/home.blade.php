<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 flex-col items-center p-[1%]">
        <section class="flex self-end">
            <a href="/" class="font-bold text-xl bg-primary rounded-lg py-2 px-4">
                Login
            </a>
        </section>

        <section class="w-[875px] mt-6">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/logo_text.svg') }}" alt="Buywards logo" class="size-1/3">
                <img src="{{ asset('images/League_of_Legends.svg') }}" alt="League of Legends logo" class="size-1/4">
            </div>

            <x-searchbar.searchbar />
        </section>

        <section class="mt-6">
            <div>
                <h4 id="latest-champions" class="font-bold text-bg_light text-2xl text-center">Latest champions</h4>
            </div>
            <div class="latests-champions flex justify-between gap-16 mt-4">
                @foreach ($latestChampions as $champion)
                    <x-champion-card :champion="$champion['champion_id']" />
                @endforeach
            </div>
        </section>
    </main>

    
</x-main-layout>
