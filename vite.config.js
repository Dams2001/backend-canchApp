// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//     ],
//     build: {
//         outDir: 'public/build', // Asegúrate de que los archivos se compilan en la carpeta 'public/build'
//     },
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/index.css', // Incluye este archivo CSS si es necesario
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Asegúrate de que los archivos se compilan en la carpeta 'public/build'
    },
});
