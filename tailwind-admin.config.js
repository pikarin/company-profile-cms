const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './Admin/Resources/views/**/*.blade.php',
        './Admin/Resources/ts/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                'bookmark-purple': '#5267DF',
                'bookmark-red': '#FA5959',
                'bookmark-blue': '#242A45',
                'bookmark-grey': '#9194A2',
                'bookmark-white': '#f7f7f7',
                'primary': '#5267DF',
                'grey': '#F6F9FC',
                // "accent": "",
            },

            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
}
