<!-- Aquí comienza el HTML -->
@props(['champion', 'patch'])
@vite(['resources/css/champion_card.css'])

<article class="champion-card animate-fade-in animate-duration-1000" style="background-image: url('https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/splash-art/centered')">
    <div>
        <h4 class="text-2xl font-black text-text_light">{{ $champion }}</h4>
        <a href="#" class="text-lg font-medium text-text_light flex items-center">Ver campeón <span class="material-icons" style="font-size: 24px">chevron_right</span></a>
    </div>
    <div class="skills">
        <div class="skill passive-skill flex flex-col items-center relative" onmouseover="mostrarMensaje(this)" onmouseout="ocultarMensaje(this)">
            <div class="skill-content relative animation-scale">
                <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/passive" alt="Passive">
                <p>P</p>
            </div>
            <div class="mensaje bg-primary w-[200px] p-2 rounded-lg absolute top-full left-[-90px] m-2" style="display: none;">Mensaje para habilidad P</div>
        </div>

        <div class="skill q-skill flex flex-col items-center relative" onmouseover="mostrarMensaje(this)" onmouseout="ocultarMensaje(this)">
            <div class="skill-content relative animation-scale">
                <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/q" alt="Q">
                <p>Q</p>
            </div>
            <div class="mensaje bg-primary w-[200px] p-2 rounded-lg absolute top-full left-[-90px] m-2" style="display: none;">Mensaje para habilidad Q</div>
        </div>

        <div class="skill w-skill flex flex-col items-center relative" onmouseover="mostrarMensaje(this)" onmouseout="ocultarMensaje(this)">
            <div class="skill-content relative animation-scale">
                <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/w" alt="W">
                <p>W</p>
            </div>
            <div class="mensaje bg-primary w-[200px] p-2 rounded-lg absolute top-full left-[-90px] m-2" style="display: none;">Mensaje para habilidad W</div>
        </div>

        <div class="skill e-skill flex flex-col items-center relative" onmouseover="mostrarMensaje(this)" onmouseout="ocultarMensaje(this)">
            <div class="skill-content relative animation-scale">
                <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/e" alt="E">
                <p>E</p>
            </div>
            <div class="mensaje bg-primary w-[200px] p-2 rounded-lg absolute top-full left-[-90px] m-2" style="display: none;">Mensaje para habilidad E</div>
        </div>

        <div class="skill r-skill flex flex-col items-center relative" onmouseover="mostrarMensaje(this)" onmouseout="ocultarMensaje(this)">
            <div class="skill-content relative animation-scale">
                <img src="https://cdn.communitydragon.org/{{ $patch }}/champion/{{ $champion }}/ability-icon/r" alt="R">
                <p>R</p>
            </div>
            <div class="mensaje bg-primary w-[200px] p-2 rounded-lg absolute top-full left-[-90px] m-2" style="display: none;">Mensaje para habilidad R</div>
        </div>
    </div>
</article>

<!-- Aquí comienza el JavaScript -->
<script>
    // Función para mostrar el mensaje al pasar el ratón sobre una habilidad
    function mostrarMensaje(skill) {
        var mensaje = skill.querySelector('.mensaje');
        mensaje.style.display = 'block';
    }

    // Función para ocultar el mensaje al quitar el ratón de una habilidad
    function ocultarMensaje(skill) {
        var mensaje = skill.querySelector('.mensaje');
        mensaje.style.display = 'none';
    }
</script>
