@props(['titulo'])

<div class="h-[10%] mb-4">
    <div class="border-l-2 border-solid border-primary font-semibold text-xl">
        <p class="pl-2">{{ $titulo ?? ''}}</p>
    </div>
</div>
