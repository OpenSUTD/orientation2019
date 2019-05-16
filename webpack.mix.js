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

mix.copyDirectory('resources/img', 'public/img')
  .copyDirectory("resources/embeds", "public/embeds")
  .js("resources/js/app.js", "public/js")
  .js('resources/js/preloader.js', 'public/js')
  .js('resources/js/404.js', 'public/js')
  .sass('resources/sass/preloader.scss', 'public/css')
  .sass("resources/sass/app.scss", "public/css")
  .sass('resources/sass/404.scss', 'public/css');