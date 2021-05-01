const mix = require('laravel-mix');

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
mix.less('resources/less/header.less', 'public/css/header.css')
    .less('resources/less/landing.less', 'public/css/landing.css')
    .options({processCssUrls: false})
    .less('resources/less/pro_nas.less', 'public/css/pro_nas.css')
    .options({processCssUrls: false})
    .less('resources/less/doctors.less', 'public/css/doctors.css')
    .options({processCssUrls: false})
    .less('resources/less/search_page.less', 'public/css/search_page.css')
    .options({processCssUrls: false})
    .less('resources/less/search.less', 'public/css/search.css')
    .options({processCssUrls: false})
    .less('resources/less/ask_form.less', 'public/css/ask_form.css')
    .options({processCssUrls: false})
    .less('resources/less/footer.less', 'public/css/footer.css');
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
