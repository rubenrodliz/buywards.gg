@props(['icon', 'size' => '35', 'href'])

@php
    use App\View\Components\Navbar\IconLink;
@endphp

<li class="w-[{{ $size }}px] h-[{{ $size }}px]">
    <x-navbar.icon-link :icon="$icon" :href="$href" :size="$size" />
</li>
