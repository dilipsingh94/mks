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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
      'resources/site-plugins/fonts/icomoon/style.css',
      'resources/site-plugins/css/aos.css',
      'resources/site-plugins/css/bootstrap-datepicker.css',
      'resources/site-plugins/css/bootstrap.min.css',
      'resources/site-plugins/css/jquery-ui.css',
      'resources/site-plugins/css/magnific-popup.css',
      'resources/site-plugins/css/mediaelementplayer.css',
      'resources/site-plugins/css/owl.carousel.min.css',
      'resources/site-plugins/css/owl.theme.default.min.css',
      'resources/site-plugins/css/style.css'
   ], 'public/css/mks_styles.css')
   .scripts([
      'resources/site-plugins/js/aos.js',
      'resources/site-plugins/js/bootstrap-datepicker.min.js',
      'resources/site-plugins/js/bootstrap.min.js',
      'resources/site-plugins/js/jquery-3.3.1.min.js',
      'resources/site-plugins/js/jquery-migrate-3.0.1.min.js',
      'resources/site-plugins/js/jquery-ui.js',
      'resources/site-plugins/js/jquery.countdown.min.js',
      'resources/site-plugins/js/jquery.magnific-popup.min.js',
      'resources/site-plugins/js/jquery.stellar.min.js',
      'resources/site-plugins/js/main.js',
      'resources/site-plugins/js/mediaelement-and-player.min.js',
      'resources/site-plugins/js/owl.carousel.min.js',
      'resources/site-plugins/js/popper.min.js',
      'resources/site-plugins/js/slick.min.js'
   ], 'public/js/mks_scripts.js')
   .copyDirectory('resources/site-plugins/fonts', 'public/fonts')
   .copyDirectory('resources/site-plugins/images', 'public/images');   
   
