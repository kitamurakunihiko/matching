const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// 

// globライブラリを読み込む
// const glob = require('glob');
    
// glob.sync('resources/sass/**/*.scss').map(function(file){
//     // ファイルパスを取得できるので、該当ディレクトリにコンパイルファイルを生成
//     mix.sass(file, 'public/css')
// });

// // jsディレクトリ配下の設定
// glob.sync('resources/js/**/*.js').map(function(file){
//     // ファイルパスを取得できるので、該当ディレクトリにコンパイルファイルを生成
//     mix.js(file, 'public/js')
// });
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/style.scss', 'public/css')
   .sass('resources/sass/candidate_index.scss', 'public/css');
  
   