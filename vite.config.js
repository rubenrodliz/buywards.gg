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
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
