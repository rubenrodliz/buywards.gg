@vite('resources/js/dropdownProfile.js')

<section class="w-full summoner bg-bg_dark h-fit drop-shadow-md flex justify-around items-center py-3 sticky top-0 z-index">
    <div class="w-[40%] lg:w-[30%] flex ml-[20px] justify-start items-center">
        <img src="{{ asset('images/League_of_Legends.svg') }}" alt="League of Legends logo" class="w-[40%] lg:w-[20%]">
    </div>
    <div class="w-[60%] lg:w-[30%] flex justify-center items-center">
        <x-searchbar.searchbar />
    </div>
    <div class="w-[30%] flex justify-end items-center" >
        <x-auth-login-dropdown-button />
    </div>
</section>
