import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/assets/admin/css/default.css',
                'public/assets/admin/js/default.js',
                'public/assets/admin/js/bootstrap.min.js',
                'public/assets/admin/js/popper.min.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ]
});

