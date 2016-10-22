const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {

    mix.webpack('app.js');

    mix.sass('app.scss');

    mix.scripts([
        './node_modules/font-awesome/css/font-awesome.css'
    ], 'public/css/vendor.css');

    mix.styles([
        './node_modules/jquery/dist/js/jquery.js',
        './node_modules/bootstrap/dist/js/bootstrap.js'
    ], 'public/js/vendor.js');

    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');

    mix.version([
        'public/css/vendor.css',
        'public/css/app.css',
        'public/js/app.js',
        'public/js/vendor.js',
    ]);

    mix.browserSync({
        proxy: 'localhost:8000'
    });
});
