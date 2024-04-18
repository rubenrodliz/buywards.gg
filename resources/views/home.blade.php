<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 flex-col items-center p-[40px]">
        <div class="flex self-end">
            <a href="#" class="font-bold text-2xl bg-primary rounded-lg py-2 px-4">
                Login
            </a>
        </div>

        <div class="w-[875px] mt-7">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/logo_text.svg') }}" alt="Buywards logo">
                <img src="{{ asset('images/League_of_Legends.svg') }}" alt="League of Legends logo">
            </div>

            <x-searchbar.searchbar />
        </div>

        <div></div>
    </main>

    
</x-main-layout>
