const mix = require('laravel-mix')
const tailwind = require('tailwindcss')

mix.ts('resources/js/app.ts', 'public/js')
    .ts('Admin/Resources/ts/admin.ts', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        tailwind('./tailwind.config.js'),
        require('autoprefixer'),
    ])
    .postCss('Admin/Resources/css/admin.css', 'public/css', [
        require('postcss-import'),
        tailwind('./tailwind-admin.config.js'),
        require('autoprefixer'),
    ])
    .webpackConfig(require('./webpack.config'))

if (mix.inProduction()) {
    mix.version()
}
