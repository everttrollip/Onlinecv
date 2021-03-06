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

mix.browserSync('onlinecv.dev');

mix.webpackConfig({
    resolve: {
        alias: {
            'va': 'vue2-admin-lte/src'
          }
    }
});

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/dashboard.js', 'public/js')
    .js('resources/assets/js/cv.js', 'public/js')
    .js('resources/assets/js/profile.js', 'public/js')

    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/_mixins.scss', 'public/css')
    .sass('resources/assets/sass/cv.scss', 'public/css')