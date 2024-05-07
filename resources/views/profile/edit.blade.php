<x-auth-layout>
    <!-- Styles -->
    @section('scripts')
        @vite(['resources/css/profile_edit.css'])
    @endsection

    <main class="flex flex-col justify-start p-[1%] bg-bg_dark h-[100vh] w-full">
        <!-- Go back -->
        <section class="self-start items-center mb-2">
            <a class="text-lg text-text_light rounded-md hover:font-medium hover:text-primary" href="{{ URL::to('/')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle mr-1 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                {{ __('Go to home') }}
            </a>
        </section>

        <div class="w-[60vw] h-fit flex flex-col justify-center items-center">
            <div class="w-full h-fit bg- my-8 rounded-lg bg-primary text-text_dark flex gap-4 justify-center items-center p-4">
                <img src="{{ asset('images/logo.svg') }}">
                <div>
                    <p class="text-4xl">Hi <b>{{ $user->name }}</b>!</p>
                    <p class="text-xl">Welcome to your profile.</p>
                </div>
            </div>

            <!-- Botones para mostrar/ocultar formularios -->
            <div class="flex justify-center gap-8 mb-4 text-lg">
                <div class="flex flex-col justify-center items-center gap-2 h-[50px]">
                    <button id="update-profile-button" class="btn text-text_light hover:text-primary font-bold">Update Profile</button>
                    <div id="selected-bar-update-profile" class="w-[80%] h-1 bg-primary rounded-lg"></div>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 h-[50px]">
                    <button id="update-password-button" class="btn text-text_light hover:text-primary">Update Password</button>
                    <div id="selected-bar-update-password" class="w-[80%] h-1 bg-bg_dark rounded-lg"></div>
                </div>
                <div class="flex flex-col justify-center items-center gap-2 h-[50px]">
                    <button id="delete-user-button" class="btn text-text_light hover:text-primary">Delete User</button>
                    <div id="selected-bar-delete-user" class="w-[80%] h-1 bg-bg_dark rounded-lg"></div>
                </div>
            </div>

            <!-- Formularios ocultos -->
            <div id="update-profile-form" class="w-full">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div id="update-password-form" class="hidden w-full">
                @include('profile.partials.update-password-form')
            </div>
            <div id="delete-user-form" class="hidden  w-full">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </main>

    <script src="{{ asset('js/buttonAuthLogic.js') }}"></script>

</x-auth-layout>
