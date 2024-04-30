@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm rounded-md shadow-sm focus:border-bg_light']) !!}>
