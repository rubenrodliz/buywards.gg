<x-auth-layout>
    <!-- Styles -->
    @section('scripts')
        @vite(['resources/css/profile_edit  .css'])
    @endsection

    <main class="flex flex-col items-center p-[1%] bg-primary h-fit w-full">
        <!-- Go back -->
        <section class="self-start items-center mb-2">
            <a class="text-sm text-gray-600 rounded-md hover:font-medium hover:text-text_light" href="{{ URL::to('/')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-middle mr-1 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                {{ __('Go to home') }}
            </a>
        </section>

        @include('profile.partials.update-profile-information-form')
        @include('profile.partials.update-password-form')
        @include('profile.partials.delete-user-form')
    </main>
</x-auth-layout>
