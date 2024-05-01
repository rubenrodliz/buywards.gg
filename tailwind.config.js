import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import animations from '@midudev/tailwind-animations'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Satoshi', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            primary: '#51ac9d',
            secondary: '#93c6bd',
            tertiary: '#f7f7f7',
            success: '#70db47',
            warning: '#ead346',
            error: '#b71008',
            info: '#4b9ebb',
            text_dark: '#1c1c1f',
            text_light: '#f2f4fc',
            bg_light: '#f2f4fc',
            bg_dark: '#1c1c1f'
        }
    },

    plugins: [
        forms,
        animations
    ],
};
