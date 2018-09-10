let mix = require('laravel-mix');

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
/**
 * mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

 * 
 */


mix.js('resources/assets/js/jsdepends/jquery.js', 'public/js/jsdepends/jquery.js');
mix.js('resources/assets/js/jsdepends/jsbundler.js', 'public/js/jsdepends/jsbundler.js');
mix.js('resources/assets/js/jsdepends/musicajax.js', 'public/js/jsdepends/musicajax.js');
mix.js('resources/assets/js/jsdepends/galleryajax.js', 'public/js/jsdepends/galleryajax.js');
 mix.sass('resources/assets/sass/style.scss', 'public/css');
 mix.sass('resources/assets/sass/bootstrap.min.scss', 'public/css');
 mix.sass('resources/assets/sass/bpb.scss', 'public/css');
 
 
 
