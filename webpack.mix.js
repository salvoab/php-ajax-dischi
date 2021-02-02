let mix = require('laravel-mix');

mix
.js('src/app.js', 'js')
.sass('src/style.scss', 'css')
.setPublicPath('dist');