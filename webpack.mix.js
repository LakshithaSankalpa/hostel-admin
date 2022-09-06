const mix = require('laravel-mix');
const tailwindcss = require("tailwindcss");

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
mix.js("resources/js/app.js", "public/js")
    // .js("resources/js/ckeditor-classic.js", "public/js")
    // .js("resources/js/ckeditor-inline.js", "public/js")
    // .js("resources/js/ckeditor-balloon.js", "public/js")
    // .js("resources/js/ckeditor-balloon-block.js", "public/js")
    // .js("resources/js/ckeditor-document.js", "public/js")
    .css("resources/css/_app.css", "public/css/app.css")
    .options({
        processCssUrls: false,
    })
    .copyDirectory("resources/json", "public/json")
    .copyDirectory("resources/fonts", "public/fonts")
    .copyDirectory("resources/images", "public/images");


if (mix.inProduction()) {
    mix.version();
}
