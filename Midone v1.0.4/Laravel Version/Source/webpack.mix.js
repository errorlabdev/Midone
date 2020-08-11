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

mix.js('resources/js/app.js', 'public/dist/js')
    .sass('resources/sass/app.scss', 'public/dist/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .autoload({
        'jquery': ['$', 'window.jQuery', 'jQuery']
    })
    .copyDirectory('resources/json', 'public/dist/json')
    .copyDirectory('resources/fonts', 'public/dist/fonts')
    .copyDirectory('resources/images', 'public/dist/images')
    .copyDirectory('node_modules/slick-carousel/slick/ajax-loader.gif', 'public/dist/css')
    .copyDirectory('node_modules/summernote/dist/font/summernote.woff', 'public/dist/fonts/summernote')
    .browserSync({
        proxy: 'midone.test',
        files: ['resources/**/*.*']
    });
