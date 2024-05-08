<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 w-full h-full rounded-md font-semibold text-lg transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
