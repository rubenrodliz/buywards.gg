@props(['icon', 'active' => false])

@php
    use App\View\Components\Navbar\IconLink;
@endphp

<li class="list-none">
    <a {{ $attributes }}>
        <span @class([
            'material-icons rounded-[10px] text-[35px] p-[2px]',
            'text-primary bg-bg_dark' => $active,
            'text-white' => !$active,
        ]) class="" aria-current="page">
            {{ $icon }}
        </span>
    </a>
</li>