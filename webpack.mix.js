const mix = require('laravel-mix')

mix.setPublicPath('public')
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/tailwind.css', 'public/css/app.css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nesting'),
        require('autoprefixer'),
    ])

if (mix.inProduction()) {
    mix.version()
}
