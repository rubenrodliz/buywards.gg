<header class="w-[65px] bg-primary flex justify-center">
    <nav class="min-h-full flex flex-col justify-between items-center py-[40px] fixed">
        <div class="grid place-items-center">
            <div class="w-14 h-14 rounded-full">
                <a href="/">
                    <img src="{{ asset('images/logo.svg') }}" alt="BuyWards Logo" class="aspect-square">
                </a>
            </div>

            <x-navbar.separator />

            {{-- 
                ToDo: Cuando se vayan desarrollando las demás páginas
                se debe de cambiar el href de los links para que redirijan
                a las páginas correspondientes.
             --}}
            <ul class="flex flex-col gap-[35px]">
                <x-navbar.nav-link :icon="'home'" :active="request()->is('/')" href="/"/>
                <x-navbar.nav-link :icon="'receipt'" :action="'tierlist'" />
                <x-navbar.nav-link :icon="'shield'" :action="'champs'" />
                <x-navbar.nav-link :icon="'emoji_events'" :action="'leaderboard'" />
            </ul>
        </div>

        <div class="grid place-items-center">
            <x-navbar.separator />
            <x-navbar.nav-link :icon="'person'" :active="request()->is('/profile')" href="/profile" />
        </div>
    </nav>
</header>

