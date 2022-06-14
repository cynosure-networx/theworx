const mix = require('laravel-mix');
const domain = 'theworx.test'; // <= EDIT THIS
const homedir = require('os').homedir();

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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .browserSync({
        proxy: 'https://' + domain,
        host: domain,
        open: 'external',
        https: {
          key: homedir + '/.config/valet/Certificates/' + domain + '.key',
          cert: homedir + '/.config/valet/Certificates/' + domain + '.crt'
        },
        notify: true, //Enable or disable notifications
    });

if (mix.inProduction()) {
    mix.version();
}
