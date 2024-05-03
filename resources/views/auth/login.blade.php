<x-auth-layout>
    <!-- Styles -->
    @section('scripts')
        @vite(['resources/css/login.css'])
    @endsection

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <main class="flex flex-col items-center p-[1%]">
        <!-- Go back -->
        <section class="self-start items-center mb-2">
            <a class="text-sm text-gray-600 rounded-md hover:font-medium hover:text-text_light" href="{{ URL::to('/')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle mr-1 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                {{ __('Go back') }}
            </a>
        </section>

        <section class="w-[90vw] sm:w-[70vw] md:w-[70vw] lg:w-[60vw] h-[90vh] bg-bg_dark rounded-md flex flex-col md:flex-row" id="content">
            <div class="w-[100%] md:w-[50%] h-[100%] md:flex justify-center items-center text-text_light order-2 md:order-1 pt-4 md:mt-0">
                <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center items-center w-[100%]">
                    @csrf
                    <!-- Logo -->
                    <img src="{{ asset('images/logo.svg') }}" alt="BuyWards Logo" class="aspect-square w-[18%]">

                    <!-- Title -->
                    <h2 class="md:text-xl lg:text-2xl font-bold text-center mt-2 md:mt-2 lg:mt-6">¡Bienvenido de nuevo a <b>BW.GG</b>!</h2>

                    <!-- Subtitle -->
                    <p class="text-sm mt-2 lg:my-6 font-semibold">
                        ¿Eres nuevo?
                        <a class="text-sm text-primary rounded-md hover:font-bold transition ease-in-out duration-150" href="{{ route('register') }}">
                            {{ __('Regístrate aquí') }}
                        </a>
                    </p>

                    <!-- Email Address -->
                    <div class="mt-2 lg:mt-4 w-[70%]">
                        <x-input-login for="email" :value="__('Email')" />
                        <x-text-input id="email" class="focus:border-primary block mt-1 w-full placeholder-text_light placeholder:text-sm md:placeholder:text-[1rem] border-primary bg-bg_dark border-1 focus:ring-primary" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Introduce tu email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-2 md:mt-4 w-[70%]">
                        <div class="flex justify-between flex-wrap">
                            <x-input-label for="password" :value="__('Contraseña')" />
                            @if (Route::has('password.request'))
                                <a class="text-sm text-primary rounded-md hover:font-medium" href="{{ route('password.request') }}">
                                    {{ __('¿Contraseña olvidada?') }}
                                </a>
                            @endif
                        </div>

                        <x-text-input id="password" class="focus:border-primary block mt-1 w-full placeholder-text_light placeholder:text-sm md:placeholder:text-[1rem] border-primary bg-bg_dark border-1 focus:ring-primary"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Introduce la contraseña"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="mt-2 md:mt-4 w-[70%]">
                        <label for="remember_me" class="inline-flex items-center">
                            <x-form.checkbox name="remember" id="remember" :checked="old('remember')">{{ __('Recordarme') }}</x-form.checkbox>
                        </label>
                    </div>

                    <div class="w-[70%] h-[35px] lg:h-[50px]">
                        <x-primary-button class="bg-primary text-text_dark text-sm md:text-lg hover:text-text_light mt-2 md:mt-4">
                            {{ __('Iniciar sesión') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            <div class="md:w-[50%] h-[25%] md:h-[100%] rounded-r-md md:order-2" id="bg-image"></div>
        </section>

    </main>
</x-auth-layout>
