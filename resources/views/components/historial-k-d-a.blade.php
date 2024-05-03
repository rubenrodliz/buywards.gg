@props(['kills', 'deaths', 'assists'])

@php
    $kda = ($deaths > 0) ? ($kills + $assists) / $deaths : ($kills + $assists);
@endphp

<div class="flex flex-col align-middle justify-start">
    <p class="text-lg font-bold
        @if($kda < 3)
            {{ 'text-kda_red' }}
        @elseif($kda >= 3 && $kda <= 5)
            {{ 'text-kda_blue' }}
        @else
            {{ 'text-kda_orange' }}
        @endif
    ">{{ number_format($kda, 2) }} KDA</p>
    <p class="text-md font-bold">{{ $kills }} / {{ $deaths }} / {{ $assists }}</p>
</div>
