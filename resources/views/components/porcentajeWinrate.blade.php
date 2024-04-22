{{-- <div {{ $attibutes->merge(['class'=>"w-[390px] h-[381px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent text-white"]) }}> --}}
    <div class="w-[1100px] h-[165px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent text-white">
        <div class="w-[94%] h-[12%] my-[3%] mx-[5%] flex">
            <div class="w-[10%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary bg-primary text-[15px] flex items-center text-center justify-center"><p>Total</p></div>
            <div class="w-[10%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center text-primary hover:bg-primary hover:text-[#FFFFFF]"><p>SoloQ</p></div>
            <div class="w-[10%] h-[50px] mr-[3%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center text-primary hover:bg-primary hover:text-[#FFFFFF]"><p>Flex</p></div>
            <div class="w-[70%] h-[50px] mr-[3%]">
                <form class="flex justify-between items-center w-full gap-8" method="POST">
                    @csrf
                    <div class="relative w-full flex items-end">
                        <input type="search" id="default-search"
                            class="w-[30%] h-[50px] text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 items-end focus:ring-blue-500 focus:border-blue-500 placeholder:text-text_dark placeholder:font-bold placeholder:text-[2xl]"
                            placeholder="Busca un campeón" required />
                        <button type="submit"
                            class="text-white absolute right-0 top-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
