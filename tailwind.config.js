/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#025F80",
                secondary: "#B9D6DB",
                bold: "#034157",
            },
        },
    },
    plugins: [
        require("flowbite/plugin")({
            charts: true,
        }),
    ],
};
