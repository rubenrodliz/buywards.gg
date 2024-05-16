<form action="{{ route('search.summoner') }}" class="flex justify-between items-center w-full gap-8" method="POST">
    @csrf

    <!-- Barra de búsqueda -->
    <div class="relative w-full flex">
        <input type="search" id="default-search" name="summoner"
            class="block w-full text-md md:text-lg text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 placeholder:text-text_dark/65 placeholder:font-bold placeholder:sm md:placeholder:text-lg"
            placeholder="Search a summoner" required />
        <button type="submit"
            class="text-white absolute right-0 top-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-1 md:px-4 py-2 dark:bg-blue-600">
            <span class="material-icons" style="font-size: 30px">search</span>
        </button>
    </div>

    <!-- Selector de región -->
    <x-searchbar.region-selector />
    <!-- Campo oculto para almacenar el valor de la región seleccionada -->
    <input type="hidden" id="selected-region-input" name="region" />
</form>
