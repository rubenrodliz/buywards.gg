@props(['kills', 'deaths', 'assists'])

@php
    $kda = ($deaths > 0) ? ($kills + $assists) / $deaths : ($kills + $assists);

    function getKdaClass($kda) {
        if ($kda < 3) {
            return 'text-kda_red';
        } elseif ($kda >= 3 && $kda <= 5) {
            return 'text-kda_blue';
        } else {
            return 'text-kda_orange';
        }
    }
@endphp

<div class="flex flex-col align-middle justify-start">
    <p class="text-lg font-bold {{ getKdaClass($kda) }}">{{ number_format($kda, 2) }} KDA</p>
    <p class="text-md font-bold">{{ $kills }} / {{ $deaths }} / {{ $assists }}</p>
</div>
