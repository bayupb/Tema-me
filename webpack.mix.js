let mix = require('laravel-mix');

mix.setPublicPath("dist");

mix.postCss("src/main.css", "css")
    .options(
        {
            postCss: [
            require("tailwindcss")
            ],
            processCssUrls:false
    }
)
