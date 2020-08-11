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

const tailwindcss = require('tailwindcss')

mix.js('src/js/app.js', 'dist/js')
    .sass('src/sass/app.scss', 'dist/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .autoload({
        'jquery': ['$', 'window.jQuery', 'jQuery']
    })
    .copyDirectory('src/json', 'dist/json')
    .copyDirectory('src/fonts', 'dist/fonts')
    .copyDirectory('src/images', 'dist/images')
    .copyDirectory('node_modules/slick-carousel/slick/ajax-loader.gif', 'dist/css')
    .copyDirectory('node_modules/summernote/dist/font/summernote.woff', 'dist/fonts/summernote')
    .browserSync({
        proxy: 'midone.test',
        files: ['src/**/*.*']
    });
