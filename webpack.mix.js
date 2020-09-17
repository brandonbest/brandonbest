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

mix.options({ processCssUrls: false });
mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'resources/js/packages/scrollspy.min.js',
        'resources/js/packages/typed.js',
        'resources/js/packages/isotope.min.js',
        'resouces/js/owl.carousel.min.js',
        'resources/js/packages/app.min.js',
    ], 'public/js/all.js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory( 'resources/assets/images/favicon', 'public' );
mix.copyDirectory( 'resources/assets/images', 'public/images' );
mix.copyDirectory( 'resources/assets/resumes', 'public/resumes' );
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');