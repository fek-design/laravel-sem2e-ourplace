import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 1. The Global stuff (Load this on every page)
                'resources/css/app.css',
                'resources/css/global.css',
                'resources/css/variables.css',
                'resources/js/app.js',

                // 2. The Page specific stuff (Load only when needed)
                'resources/css/pages/home.css',
                'resources/css/pages/dnd.css',
                'resources/css/pages/catalogue.css',
            ],
            refresh: true,
        }),
    ],
});
