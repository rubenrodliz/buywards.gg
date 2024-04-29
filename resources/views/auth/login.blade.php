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
            <a class="text-sm text-gray-600 rounded-md hover:font-medium hover:text-text_light" href="{{ URL::previous() }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle mr-1 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                {{ __('Go back') }}
            </a>
        </div>

        <div class="w-[70vw] h-[90vh] bg-bg_dark rounded-md flex">
            <div class="w-[50%] h-[100%] flex justify-center items-center text-text_light">
                <form method="POST" action="{{ route('login') }}" class="w-[85%]">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-login for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            <div class="w-[50%] h-[100%] rounded-r-md" id="bg-image">

            </div>
        </div>

    </main>
</x-auth-layout>
