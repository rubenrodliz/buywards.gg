<x-auth-layout>
    <!-- Styles -->
    @section('scripts')
        @vite(['resources/css/register.css'])
    @endsection

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <main class="flex flex-1 flex-col items-center p-[1%] bg-bg_dark">
        <!-- Go back -->
        <div class="absolute top-0 left-0 m-4">
            <a class="text-sm text-text_light rounded-md hover:font-medium hover:text-primary" href="{{ URL::to("/login") }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle mr-1 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                {{ __('Go back') }}
            </a>
        </div>

        <div class="w-[60vw] h-[90vh] bg-primary rounded-md flex md:flex-row flex-col">
            <div class="w-full md:w-[50%] h-[40%] md:h-[100%] rounded-l-md" id="bg-image"></div>
            <div class="w-full md:w-[50%] h-[100%] flex justify-center items-center text-text_dark">
                <form method="POST" action="{{ route('register') }}" class="flex flex-col justify-center items-center w-[100%]">
                    @csrf
                    <!-- Logo -->
                    <img src="{{ asset('images/logo.svg') }}" alt="BuyWards Logo" class="aspect-square w-[18%]">

                    <!-- Title -->
                    <h2 class="text-2xl font-bold mt-6">¡Bienvenido a <b>BW.GG</b>!</h2>

                    <!-- Subtitle -->
                    <p class="text-sm my-6 font-semibold">
                        ¿Ya tienes cuenta?
                        <a class="text-sm text-text_light rounded-md hover:font-bold transition ease-in-out duration-150" href="{{ route('login') }}">
                            {{ __('Inicia sesión') }}
                        </a>
                    </p>

                    <!-- Name -->
                    <div class="w-[70%]">
                        <x-input-label for="name" :value="__('Usuario')" />
                        <x-text-input id="name" class="focus:ring-bg_dark focus:border-bg_dark block mt-1 w-full placeholder-text_dark border-bg_dark bg-primary border-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nombre de usuario" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4 w-[70%]">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="focus:ring-bg_dark focus:border-bg_dark  block mt-1 w-full placeholder-text_dark border-bg_dark bg-primary border-1" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Introduce tu email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 w-[70%]">
                        <x-input-label for="password" :value="__('Contraseña')" />

                        <x-text-input id="password" class="focus:ring-bg_dark focus:border-bg_dark  block mt-1 w-full placeholder-text_dark border-bg_dark bg-primary border-1"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" placeholder="Introduce la contraseña"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4 w-[70%]">
                        <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                        <x-text-input id="password_confirmation" class="focus:ring-bg_dark focus:border-bg_dark  block mt-1 w-full placeholder-text_dark border-bg_dark bg-primary border-1"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="Repite la contraseña"/>

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="w-[70%] h-[50px]">
                        <x-primary-button class="bg-bg_dark text-text_light hover:text-primary mt-4">
                            {{ __('Registrarse') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</x-auth-layout>
