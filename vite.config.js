import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    // base: '/build/', // Set base path for root domain deployment
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js", "public/assets/Rectangle8.jpg"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});


