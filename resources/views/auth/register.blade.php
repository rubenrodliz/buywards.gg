<x-auth-layout>
    <!-- Styles -->
    @section('scripts')
        @vite(['resources/css/register.css'])
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
            <div class="w-[50%] h-[100%] rounded-l-md" id="bg-image">

            </div>
            <div class="w-[50%] h-[100%] flex justify-center items-center text-text_light">
                <form method="POST" action="{{ route('register') }}" class="w-[85%]">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

    </main>
</x-auth-layout>
