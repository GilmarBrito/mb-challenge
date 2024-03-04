import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/template_assets/css/bootstrap.min.css',
                'resources/template_assets/css/lineicons.css',
                'resources/template_assets/css/materialdesignicons.min.css',
                'resources/template_assets/css/main.css',
                'resources/template_assets/js/bootstrap.bundle.min.js',
                'resources/template_assets/js/polyfill.js',
                'resources/template_assets/js/main.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
    build: {
        rollupOptions: {
            external: [],
            output: {
                globals: {

                }
            }
        }
    }
});
