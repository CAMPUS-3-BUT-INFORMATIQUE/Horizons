/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/views/**/*.{html,js,php}", "./resources/js/**/*.{js,vue}"],
  theme: {
    extend: {},
  },
  plugins: [require('daisyui')],
}

