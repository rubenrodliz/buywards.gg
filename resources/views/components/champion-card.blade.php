@props(['champion', 'patch' => '14.8.1'])
@vite(['resources/css/champion_card.css'])

<article class="champion-card" style="background-image: url('https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/splash-art')">
    <div>
        <h4 class="text-2xl font-black text-text_light">{{ $champion }}</h4>
        <a href="#" class="text-lg font-medium text-text_light flex items-center">Ver campeón <span class="material-icons" style="font-size: 24px">chevron_right</span></a>
    </div>
    <div class="skills">
        <div class="skill passive-skill">
            <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/passive" alt="Passive">
            <p>P</p>
        </div>
        <div class="skill q-skill">
            <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/q" alt="Q">
            <p>Q</p>
        </div>
        <div class="skill w-skill">
            <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/w" alt="W">
            <p>W</p>
        </div>
        <div class="skill e-skill">
            <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/e" alt="E">
            <p>E</p>
        </div>
        <div class="skill r-skill">
            <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/r" alt="R">
            <p>R</p>
        </div>
    </div>
</article>