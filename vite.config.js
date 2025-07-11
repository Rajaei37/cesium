import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
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
    base: process.env.APP_URL ? new URL(process.env.APP_URL).pathname + 
          (new URL(process.env.APP_URL).pathname.endsWith('/') ? '' : '/') + 'build/' : '/build/',
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});

