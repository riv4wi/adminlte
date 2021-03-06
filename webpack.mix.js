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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.js([
        'node_modules/jquery/src/jquery.js',
        'resources/assets/js/bootstrap.bundle.min.js',
        'resources/assets/js/adminlte.min.js',
        'resources/assets/js/app.js'
    ],
    'public/js/app.js' )
    .sass('resources/assets/sass/app.scss', 'public/css/app.css');

// mix.js([
//         // 'node_modules/jquery/src/jquery.js',
//         // 'resources/assets/js/bootstrap.bundle.js',
//         // 'resources/assets/js/adminlte.min.js',
//         'resources/assets/js/app.js'
//     ],
//     'public/js/app.js' )
//     .sass(
//         'resources/assets/sass/app.scss',
//     'public/css/app.css');
