<header class="w-[65px] bg-primary flex justify-center">
    <nav class="min-h-full flex flex-col justify-between items-center py-[40px] fixed">
        <div class="grid place-items-center">
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
            </ul>
        </div>

        <div class="grid place-items-center">
            <x-navbar.separator />
            <x-navbar.icon-link :icon="'person'" :href="'profile'" />
        </div>
    </nav>
</header>

