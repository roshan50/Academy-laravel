let mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/modules/flickity.js', 'public/js/modules')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .browserSync('http://127.0.0.1:8000/');
// mix.copy('resources/assets/images', 'public/images');
