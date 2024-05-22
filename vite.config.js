import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
				'resources/css/app.css',
				'resources/css/home.css',
				'resources/css/champion_card.css',
                'resources/css/login.css',
                'resources/css/register.css',
                'resources/css/profile_edit.css',
                'resources/css/summoner.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/dropdownProfile.js',
                'resources/js/porcentajeWinRate.js',
                'resources/js/dropdownGames.js',
                'resources/js/dropdownGames.js',
                'resources/js/summonerDataSummoner.js',
            ],
            refresh: true,
        }),
    ],
});
