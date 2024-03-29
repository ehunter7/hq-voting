const defaultTheme = require("tailwindcss/defaultTheme");
// const colors = require("@tailwindcss/colors");
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                // transparent: "transparent",
                // current: "currentColor",
                // black: colors.black,
                // white: colors.white,
                // gray: colors.trueGray,
                "gray-background": "#f7f8fc",
                blue: "#328af1",
                "blue-hover": "#2879bd",
                yellow: "#ffc73c",
                red: "#ec454f",
                green: "#1aab8b",
                purple: "#8b60ed",
            },
            spacing: {
                22: '5.5rem',
                70: "17.5rem",
                76: '19rem',
                104: '26rem',
                175: "43.75rem",
            },
            maxWidth: {
                custom: "68.5rem",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
    ],
};
