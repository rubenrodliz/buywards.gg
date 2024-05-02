<x-auth-layout>
    <!-- Styles -->
    @section('scripts')
        @vite(['resources/css/login.css'])
    @endsection

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <main class="flex flex-1 flex-col items-center p-[1%]">
        <!-- Go back -->
        <div class="absolute top-0 left-0 m-4">
            <a class="text-sm text-gray-600 rounded-md hover:font-medium hover:text-text_light" href="{{ URL::to('/')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle mr-1 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                {{ __('Go back') }}
            </a>
        </div>

        <div class="w-[60vw] h-[90vh] bg-bg_dark rounded-md flex">
            <div class="w-[50%] h-[100%] flex justify-center items-center text-text_light">
                <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center w-[100%]">
                    @csrf
                    <!-- Logo -->
                    <img src="{{ asset('images/logo.svg') }}" alt="BuyWards Logo" class="aspect-square w-[18%]">

                    <!-- Title -->
                    <h2 class="text-2xl font-bold mt-6">¡Bienvenido de nuevo a <b>BW.GG</b>!</h2>

                    <!-- Subtitle -->
                    <p class="text-sm my-6 font-semibold">
                        ¿Eres nuevo?
                        <a class="text-sm text-primary rounded-md hover:font-bold transition ease-in-out duration-150" href="{{ route('register') }}">
                            {{ __('Regístrate aquí') }}
                        </a>
                    </p>

                    <!-- Email Address -->
                    <div class="mt-4 w-[70%]">
                        <x-input-login for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full placeholder-text_light border-primary bg-bg_dark border-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Introduce tu email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 w-[70%]">
                        <div class="flex justify-between">
                            <x-input-label for="password" :value="__('Contraseña')" />
                            @if (Route::has('password.request'))
                                <a class="text-sm text-primary rounded-md hover:font-medium" href="{{ route('password.request') }}">
                                    {{ __('¿Contraseña olvidada?') }}
                                </a>
                            @endif
                        </div>

                        <x-text-input id="password" class="block mt-1 w-full placeholder-text_light border-primary bg-bg_dark border-1"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Introduce la contraseña"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="mt-4 w-[70%]">
                        <label for="remember_me" class="inline-flex items-center">
                            <x-text-input id="remember_me"
                                class="rounded border-primary text-primary shadow-sm focus:ring-primary" type="checkbox"
                                name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                        </label>
                    </div>

                    <div class="w-[70%] h-[50px]">
                        <x-primary-button class="bg-primary text-text_dark hover:text-text_light ">
                            {{ __('Iniciar sesión') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            <div class="w-[50%] h-[100%] rounded-r-md" id="bg-image">

            </div>
        </div>

    </main>
</x-auth-layout>
