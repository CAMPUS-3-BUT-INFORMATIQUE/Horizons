/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.{html,js,php}",
        "./resources/js/**/*.{js}",
    ],
    theme: {
        extend: {
            colors: {
                "horizon-yellow": "#ffcd49",
                "horizon-cyan": "#1adbe1",
                "horizon-blue": "#1c73a9",
            },
            screens: {
                "1xl5": "1340px",
            },
        },
    },
    plugins: [require("daisyui")],
};
