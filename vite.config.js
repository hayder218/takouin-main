import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'public/build/assets/js/app.js',
                'public/build/assets/js/appPrixma.js',
                'public/build/assets/js/bootstrap.bundle.min.js',
                'public/build/assets/js/bootstrap.js',
                'public/build/assets/js/jquery.js',
                'public/build/assets/js/owl.carousel.min.js',
                
            ],
            refresh: true,
        }),
    ],
});
