var elixir = require('laravel-elixir');

require('laravel-elixir-webpack-react');

elixir(function(mix) {
    mix.webpack('main.js'); // resources/assets/js/main.js
});