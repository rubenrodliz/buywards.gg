@php
    $regions = [
        'BR1',
        'EUN1',
        'EUW1',
        'JP1',
        'KR',
        'LA1',
        'LA2',
        'NA1',
        'OC1',
        'PH2',
        'RU',
        'SG2',
        'TH2',
        'TR1',
        'TW2',
        'VN2',
    ];
@endphp

@props(['background' => 'bg-primary'])

<div class="relative inline-block">
    <button id="selected-region" type="button" name="region" onclick="toggleRegionSelector()"
        class="{{ $background }} text-black px-3 py-2 rounded-lg font-bold text-xl">
        EUW
    </button>

    <ul id="region-selector" class="absolute z-10 w-full bg-bg_light rounded-lg max-h-40 overflow-y-auto hidden mt-1">
        @foreach ($regions as $region)
            <li class="hover:bg-primary/[.2]">
                <button onclick="selectRegion('{{ $region }}')"
                    class="block w-full text-center px-4 py-2 text-text_dark hover:bg-gray-100">
                    {{ $region }}
                </button>
            </li>
        @endforeach
    </ul>
</div>

<script>
    function toggleRegionSelector() {
        const selector = document.getElementById('region-selector');
        selector.classList.toggle('hidden');
    }

    function selectRegion(region) {
        const regionButton = document.getElementById('selected-region');
        regionButton.textContent = region;
        // Setear el valor seleccionado de la región en el campo oculto
        const regionInput = document.getElementById('selected-region-input');
        regionInput.value = region;
        toggleRegionSelector();
    }
</script>
