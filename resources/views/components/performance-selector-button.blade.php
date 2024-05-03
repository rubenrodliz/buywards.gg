@props(['isSelected' => false, 'name'])

<div class="
        {{$isSelected
            ? 'py-1 w-[30%] rounded-[10px] border-2 border-solid border-primary bg-primary text-md flex items-center text-center justify-center text-text_dark font-semibold hover:cursor-pointer'
            : 'py-1 w-[30%] rounded-[10px] border-2 border-solid border-primary text-md flex items-center text-center justify-center text-primary hover:bg-primary hover:text-text_dark hover:font-semibold hover:cursor-pointer'
        }}
    ">
    <p>{{ $name }}</p>
</div>
