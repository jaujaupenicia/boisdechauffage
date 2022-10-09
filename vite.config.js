import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/js/admin.js",
                "resources/js/jquery.countdown.js",
                "resources/js/jquery.meanmenu.min.js",
                "resources/js/sticker.js",
                "resources/js/main.js",
                "resources/js/authenticator.js",
            ],
            refresh: true,
        }),
    ],
});
