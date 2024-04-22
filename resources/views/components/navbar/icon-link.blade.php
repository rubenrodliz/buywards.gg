@props(['icon', 'color' => 'text-text_dark', 'size' => '35', 'href'])

@php
    $isCurrentPage = request()->routeIs($href);
    // dd($isCurrentPage, $href, );
@endphp

<a href="{{ $href }}" class="{{ $isCurrentPage ? 'active' : $color }}">
    <span class="material-icons" style="font-size: {{ $size }}px">{{ $icon }}</span>
</a>
