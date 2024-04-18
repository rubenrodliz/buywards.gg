<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 justify-center items-center p-[40px]">
        <div></div>

        <div class="w-[875px]">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/logo_text.svg') }}" alt="">
                <img src="{{ asset('images/League_of_Legends.svg') }}" alt="">
            </div>
            <form class="flex justify-between items-center mt-[30px] w-full gap-8" method="POST">
                @csrf 
                <div class="relative w-full flex">
                    <input type="search" id="default-search"
                        class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 placeholder:text-text_dark placeholder:font-bold placeholder:text-[2xl]"
                        placeholder="Search name #tag or champions" required />
                    <button type="submit"
                        class="text-white absolute right-0 top-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </div>

                <x-searchbar.region-selector />
            </form>
        </div>

        <div></div>
    </main>

    
</x-main-layout>
