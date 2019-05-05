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

// webpack bundles up assets
// mix is a layer on top of webpack to make the configuration easier. 
// just need mix.lang
mix.js('resources/js/app.js', 'public/js') // path from source to where the bundled version should go 
    .sass('resources/sass/app.scss', 'public/css');


// bundles it up so it runs in any modern broswer

// gets bundled into public folder for production.
