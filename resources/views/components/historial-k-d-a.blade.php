@props(['kda'])

<div class="flex flex-col align-middle justify-start">
    <p class="text-lg font-bold {{ $kda }}">{{ $kda }} KDA</p>
    {{-- <p class="text-md font-bold">{{ $kills }} / {{ $deaths }} / {{ $assists }}</p> --}}
</div>
