<form class="flex justify-between items-center w-[50%]" method="POST">
    @csrf
    <div class="relative w-full flex items-end">
        <input type="search" id="default-search"
            class="w-full h-[40px] text-md text-text_dark border rounded-lg items-end placeholder:text-text_dark placeholder:font-bold"
            placeholder="Busca un campeón" required />
        <button type="submit"
            class="text-text_dark absolute right-0 top-1 bg-blue-700 text-sm px-4 py-2">
            <svg class="w-4 text-text_dark" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </button>
    </div>
</form>
