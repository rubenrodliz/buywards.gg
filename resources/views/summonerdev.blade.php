<x-main-layout>
    @section('scripts')
        @vite(['resources/css/home.css'])
    @endsection

    <main class="flex flex-1 flex-col items-center p-[40px]">
        <div>
            <x-rendiment/>
            <x-porcentajeWinrate/>
        </div>
    </main>


</x-main-layout>


