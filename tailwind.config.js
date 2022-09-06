const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");
const {
    toRGB,
    withOpacityValue,
} = require("@left4code/tw-starter/dist/js/tailwind-config-helper");
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./src/**/*.{php,html,js,jsx,ts,tsx,vue}",
        "./src/**/*.{php,html,js,jsx,ts,tsx,vue}",
        "./node_modules/@left4code/tw-starter/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
