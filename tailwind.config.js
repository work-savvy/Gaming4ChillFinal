import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'press-start' : ['"Press Start 2P"', 'cursive'],
                'bebas': ['Bebas Neue', 'sans-serif'],
                'anton': ['Anton', 'sans-serif'],
            },
            colors:{
                primary: 'var(--primary-color)',
                secondary: 'var(--secondary-color)',
                accent: 'var(--accent-color)',
            },
        },
    },

    plugins: [forms, require('preline/plugin'),],
};
