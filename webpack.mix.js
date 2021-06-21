const mix = require('laravel-mix');
const tailwindcss = require("tailwindcss");

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

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/scss/app.scss', 'public/css/app.css').options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.config.js")],
});


mix.js(
    'public/js/scripts.js', 'public/js/scripts.min.js')
    .js('resources/assets/js/profile.js', 'public/assets/js/profile.js')
    .js('resources/assets/js/custom/custom.js', 'public/assets/js/custom/custom.js')
    .js('resources/assets/js/custom/custom-datatable.js', 'public/assets/js/custom/custom-datatable.js')
    .version();


mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css',
    'public/assets/css/bootstrap.min.css');


mix.babel('node_modules/jquery/dist/jquery.min.js',
    'public/assets/js/jquery.min.js');
