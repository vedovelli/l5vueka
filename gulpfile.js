const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {

    mix.webpack('app.js');

    mix.sass('app.scss');

    mix.styles([
        './node_modules/font-awesome/css/font-awesome.css'
    ], 'public/css/vendor.css');

    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');

    mix.version([
        'public/css/vendor.css',
        'public/css/app.css',
        'public/js/app.js',
    ]);

    mix.browserSync({
        proxy: 'localhost:8000'
    });
});
