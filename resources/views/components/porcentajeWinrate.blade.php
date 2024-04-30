<div {{ $attributes->merge(['class'=>"border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent text-[white]"]) }}>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <div class="w-[1100px] h-[165px] border-primary border-solid border-[1px] rounded-[10px] flex flex-col bg-transparent text-white"> --}}
    <div class="w-[95%] my-[2%] mx-[3%] flex">
        <div class="w-[10%] h-[40px] mr-[1%] rounded-[10px] border-2 border-solid border-primary bg-primary text-[15px] flex items-center text-center justify-center text-[white]"><p>Total</p></div>
        <div class="w-[10%] h-[40px] mr-[1%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center text-primary hover:bg-primary hover:text-[#FFFFFF]"><p>SoloQ</p></div>
        <div class="w-[10%] h-[40px] mr-[1%] rounded-[10px] border-2 border-solid border-primary text-[15px] flex items-center text-center justify-center text-primary hover:bg-primary hover:text-[#FFFFFF]"><p>Flex</p></div>
        <div class="w-[70%] h-[40px] mr-[1%] flex justify-end">
            <form class="flex justify-between items-center w-[50%]" method="POST">
                @csrf
                <div class="relative w-full flex items-end">
                    <input type="search" id="default-search"
                        class="w-full h-[40px] text-sm text-[black] border border-gray-300 rounded-lg bg-gray-50 items-end focus:ring-blue-500 focus:border-blue-500 placeholder:text-text_dark placeholder:font-bold placeholder:text-[2xl]"
                        placeholder="Busca un campeón" required />
                    <button type="submit"
                        class="text-[black] absolute right-0 top-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600">
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
    <hr class="text-primary">
    <div class="flex">
        <canvas id="PorcentajeWinRate" width="75" height="70" class="m-[1%]"></canvas>

        <div class="mx-[1%] h-[100%] flex flex-col align-middle justify-center">
            <p class="text-[11px] font-bold">5V - 5D</p>
            <p class="text-[14px] font-bold text-[#F69601]">5,43 KDA</p>
        </div>
        <div class="mx-[2%] h-[100%] flex flex-col align-middle justify-center">
            <p class="text-[14px] font-bold text-[#2D62D7]">5,45 KDA</p>
            <p class="text-[11px] font-bold">9 / 4,3 / 7,4</p>
        </div>
        <div class="w-[68%] h-[100%] flex justify-end">
            <div class="flex h-[40px] m-auto">
                <img src="{{asset('images/kaisa.png')}}" alt="kai'sa lol character" class="h-[40px] rounded-[10px] mr-[10px]">
                <div>
                    <p class="text-[14px] font-bold"><span class="text-[#2D62D7]">60%</span> (4W 2L)</p>
                    <p class="text-[14px] font-bold">3,69 KDA</p>
                </div>
            </div>
            <div class="flex h-[40px] m-auto">
                <img src="{{asset('images/kaisa.png')}}" alt="kai'sa lol character" class="h-[40px] rounded-[10px] mr-[10px]">
                <div>
                    <p class="text-[14px] font-bold"><span class="text-[#F54B4E]">40%</span> (4W 2L)</p>
                    <p class="text-[14px] font-bold">1.2 KDA</p>
                </div>
            </div>
            <div class="flex h-[40px] m-auto">
                <img src="{{asset('images/kaisa.png')}}" alt="kai'sa lol character" class="h-[40px] rounded-[10px] mr-[10px]">
                <div>
                    <p class="text-[14px] font-bold"><span class="text-[#F69601]">80%</span> (5W 2L)</p>
                    <p class="text-[14px] font-bold">6.8 KDA</p>
                </div>
            </div>
        </div>
    </div>
</div>
