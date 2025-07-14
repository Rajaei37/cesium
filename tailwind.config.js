import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                // New Cesium brand colors
                'cesium-purple': '#362869',
                'cesium-yellow': '#facb24',
                'cesium-light-gray': '#f2f2f2',
                
                // Semantic color mappings
                'primary': '#362869',
                'secondary': '#facb24',
                'accent': '#facb24',
                'neutral': '#f2f2f2',
                
                // Additional shades for consistency
                'primary-light': '#4a3b82',
                'primary-dark': '#2a1d4f',
                'secondary-light': '#fdd835',
                'secondary-dark': '#e0b41e',
            },
        },
    },

    plugins: [forms],
};

