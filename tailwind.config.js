import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
                rufina: ["Rufina"]
            },
            colors: {
                primary: "#002E89",
                "primary-darker": "#012B89",
                "primary-dark": "#001246",
                "primary-light": "#3751FE",
                "gray-light": "#E9EEF9",
            },
        },
    },
    plugins: [],
};
