const mix = require('laravel-mix');
require('laravel-mix-purgecss');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]).combine(
    [
        'resources/js/jquery/jquery-3.5.1.min.js',
        'resources/js/bootstrap/js/bootstrap.bundle.min.js',
        'resources/js/jarallax/jarallax.min.js',
        'resources/js/jquery-ajaxchimp/jquery.ajaxchimp.min.js',
        'resources/js/jquery-appear/jquery.appear.min.js',
        'resources/js/jquery-circle-progress/jquery.circle-progress.min.js',
        'resources/js/jquery-magnific-popup/jquery.magnific-popup.min.js',
        'resources/js/jquery-validate/jquery.validate.min.js',
        'resources/js/nouislider/nouislider.min.js',
        'resources/js/odometer/odometer.min.js',
        'resources/js/swiper/swiper.min.js',
        'resources/js/tiny-slider/tiny-slider.min.js',
        'resources/js/wnumb/wNumb.min.js',
        'resources/js/wow/wow.js',
        'resources/js/isotope/isotope.js',
        'resources/js/countdown/countdown.min.js',
        'resources/js/owl-carousel/owl.carousel.min.js',
        'resources/js/twentytwenty/twentytwenty.js',
        'resources/js/twentytwenty/jquery.event.move.js',
        'resources/js/language-switcher/jquery.polyglot.language.switcher.js',
        'resources/js/conbiz.js',
        'resources/js/owl-carousel/owl.carousel.min.js',
        'resources/js/main.js',
        'resources/js/stellarnav.js',
    ],
    'public/js/combined.js'
).version();

mix.css('resources/css/combined.css', 'css')
    .purgeCss({
        enabled: true,
    }).version();
