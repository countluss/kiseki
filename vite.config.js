import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

// import 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use it manually.
// import 'simplebar/dist/simplebar.css';

// // You will need a ResizeObserver polyfill for browsers that don't support it! (iOS Safari, Edge, ...)
// import ResizeObserver from 'resize-observer-polyfill';
// window.ResizeObserver = ResizeObserver;

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
