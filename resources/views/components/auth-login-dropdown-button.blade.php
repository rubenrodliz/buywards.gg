<section class="self-end hidden lg:flex">
    @if (auth()->check())
        @vite('resources/js/dropdownProfile.js')
        <div class="relative">
            <button class="font-bold text-xl bg-primary rounded-lg py-2 px-4 dropdown-button">
                {{ auth()->user()->name }}
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg bg-bg_light text-center hidden dropdown-menu">
                <a href="{{ route('profile.edit') }}"
                    class="block px-4 py-2 text-gray-800 hover:bg-secondary rounded-t-lg hover:font-semibold">Editar
                    perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full px-4 py-2 text-gray-800 text-center text-error hover:text-text_light hover:bg-error rounded-b-lg hover:font-semibold">Cerrar
                        sesión</button>
                </form>
            </div>
        </div>
    @else
        <a href="{{ route('login') }}" class="font-bold text-xl bg-primary rounded-lg py-2 px-4">
            Login
        </a>
    @endif
</section>
