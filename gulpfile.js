const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
        .webpack('app.js');

    // al final debe estas app.js
    mix.styles([
        'node_modules/sweetalert/dist/sweetalert.css',
        'public/css/app.css'
    ], 'public/css/app.css', './');

    // al principio estan las dependencias
    mix.scripts([
        'public/js/app.js',
        'node_modules/sweetalert/dist/sweetalert-dev.js',
    ], 'public/js/app.js', './');


    //mix.phpUnit();
});
