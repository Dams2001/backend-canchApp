import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/index.css', // Asegúrate de incluir este archivo si es necesario
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist', // Asegúrate de que los archivos se compilan en la carpeta 'public/build'
    },
});
