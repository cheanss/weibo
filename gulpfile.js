const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
var BrowserSync = require('laravel-elixir-browsersync2');

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
    BrowserSync.init();
    mix.BrowserSync(
    {
        proxy           : "weibo.app",
        logPrefix       : "Laravel Eixir BrowserSync",
        logConnections  : false,
        reloadOnRestart : false,
        notify          : false
    });
    mix.sass('app.scss')
        .webpack('app.js');
});
