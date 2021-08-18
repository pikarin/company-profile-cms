const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                "bookmark-purple": "#5267DF",
                "bookmark-red": "#FA5959",
                "bookmark-blue": "#242A45",
                "bookmark-grey": "#9194A2",
                "bookmark-white": "#f7f7f7",
                "primary": "#5267DF",
                "grey": "#F6F9FC",
                // "accent": "",
            },
        },
        fontFamily: {
            poppins: ["Poppins, sans-serif"],
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
