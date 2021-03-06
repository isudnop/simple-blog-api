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
    mix.sass('app.scss').webpack('app.js');
});

elixir(function(mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    mix.sass('app.scss')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.js', 'public/js');

    var bootstrapPath = 'node_modules/bootstrap-sass/assets';

    mix.copy('resources/assets/js', 'public/js');
    mix.copy('resources/assets/css', 'public/css');
    mix.copy('resources/assets/fonts', 'public/fonts');
    mix.copy('resources/assets/images', 'public/css/images');

});
