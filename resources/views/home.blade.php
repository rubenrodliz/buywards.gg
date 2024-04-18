<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 justify-center items-center p-[40px]">
        <div></div>

        <div class="w-[875px]">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/logo_text.svg') }}" alt="Buywards logo">
                <img src="{{ asset('images/League_of_Legends.svg') }}" alt="League of Legends logo">
            </div>

            <x-searchbar.searchbar />
        </div>

        <div></div>
    </main>

    
</x-main-layout>
