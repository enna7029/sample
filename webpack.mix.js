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


//home模块
mix.js('resources/assets/js/app.js','public/js') //js
    .sass('resources/assets/sass/app.scss','public/css') //css
    .copyDirectory('resources/assets/images/','public/images') //images
    .version();

//admin模块
mix.js('resources/assets/js/admin.js','public/js')
     .sass('resources/assets/sass/admin.scss','public/css')
     .version();


