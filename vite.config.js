import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/admin/assets/css/default.css',
                'public/admin/assets/js/default.js',
                'public/admin/assets/js/bootstrap.min.js',
                'public/admin/assets/js/popper.min.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    resolve: {
        alias: {
            '~': resolve(__dirname, 'resources/js'),
        },
    },
});

