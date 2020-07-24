const mix = require('laravel-mix');

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

mix.disableSuccessNotifications()
    .js('src/js/app.js', './')
    .js('woocommerce/assets/js/woocommerce.js','./woocommerce/')
    .sass('src/css/app.scss', './')
    .sass('woocommerce/assets/css/woocommerce.scss','./woocommerce/');