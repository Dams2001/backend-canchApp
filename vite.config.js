import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/index.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist', // Cambia a 'dist' para que Vercel lo detecte automáticamente
    },
});
