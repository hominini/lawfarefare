const mix = require('laravel-mix');

mix.styles([
        'public/css/vendor/uikit.min.css',
        'public/css/vendor/dashboard.css',
    ], 
    'public/css/all.css')
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
