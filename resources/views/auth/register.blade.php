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
            <a class="text-sm text-text_light rounded-md hover:font-medium hover:text-primary" href="{{ URL::previous() }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle mr-1 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                {{ __('Go back') }}
            </a>
        </div>

        <div class="w-[70vw] h-[90vh] bg-primary rounded-md flex">
            <div class="w-[50%] h-[100%] rounded-l-md" id="bg-image">

            </div>
            <div class="w-[50%] h-[100%] flex justify-center items-center text-text_dark">
                <form method="POST" action="{{ route('register') }}" class="flex flex-col justify-center items-center w-[100%]">
                    @csrf
                    <!-- Logo -->
                    <img src="{{ asset('images/logo.svg') }}" alt="BuyWards Logo" class="aspect-square w-[15%]">

                    <!-- Title -->
                    <h2 class="text-2xl font-bold mt-6">¡Bienvenido a <b>BW.GG</b>!</h2>

                    <!-- Subtitle -->
                    <p class="text-sm my-6">
                        ¿Ya tienes cuenta?
                        <a class="text-sm text-text_light  rounded-md hover:font-semibold" href="{{ route('login') }}">
                            {{ __('Inicia sesión') }}
                        </a>
                    </p>

                    <!-- Name -->
                    <div class="w-[80%]">
                        <x-input-label for="name" :value="__('Usuario')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4 w-[80%]">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 w-[80%]">
                        <x-input-label for="password" :value="__('Constraseña')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4 w-[80%]">
                        <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</x-auth-layout>
