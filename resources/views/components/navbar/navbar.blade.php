<header class="w-[85px] bg-primary">
    <nav class="h-screen flex flex-col items-center py-[40px]">
        <div class="w-14 h-14 rounded-full">
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="BuyWards Logo">
            </a>
        </div>

        <x-navbar.separator />

        <ul class="flex flex-col gap-[35px]">
            <x-navbar.nav-link :icon="'home'" :href="'home'" />
            <x-navbar.nav-link :icon="'receipt'" :href="'tierlist'" />
            <x-navbar.nav-link :icon="'shield'" :href="'champs'" />
            <x-navbar.nav-link :icon="'emoji_events'" :href="'leaderboard'" />
            <x-navbar.nav-link :icon="'settings'" :href="'settings'" />
        </ul>
        
        <div class="grid place-items-center">
            <x-navbar.separator />
            <x-navbar.icon-link :icon="'person'" :href="'profile'" />
        </div>
    </nav>
</header>
