<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 flex-col items-center p-[1%]">
        @if(auth()->check())
            <section class="flex self-end">
                <div class="relative">
                    <button class="font-bold text-xl bg-primary rounded-lg py-2 px-4 dropdown-button">
                        {{ auth()->user()->name }}
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg bg-bg_light text-center hidden dropdown-menu">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-800 hover:bg-secondary rounded-t-lg hover:font-semibold">Editar perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full px-4 py-2 text-gray-800 text-center text-error hover:text-text_light hover:bg-error rounded-b-lg hover:font-semibold">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </section>
        @else
            <section class="flex self-end">
                <a href="{{ route('login') }}" class="font-bold text-xl bg-primary rounded-lg py-2 px-4">
                    Login
                </a>
            </section>
        @endif


        <section class="w-[875px] mt-6">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/logo_text.svg') }}" alt="Buywards logo" class="w-[33.33%]">
                <img src="{{ asset('images/League_of_Legends.svg') }}" alt="League of Legends logo" class="w-[25%]">
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

<script src="{{ asset('js/dropdownProfile.js') }}"></script>
