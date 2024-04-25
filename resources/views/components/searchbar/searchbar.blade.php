<form class="flex justify-between items-center mt-6 w-full gap-8" method="POST">
    @csrf 
    <div class="relative w-full flex">
        <input type="search" id="default-search"
            class="block w-full p-4 text-2xl text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 placeholder:text-text_dark placeholder:font-bold placeholder:text-2xl"
            placeholder="Search name #tag or champions" required />
        <button type="submit"
            class="text-white absolute right-0 top-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600">
            <span class="material-icons" style="font-size: 30px">search</span>
        </button>
    </div>

    <x-searchbar.region-selector />
</form>