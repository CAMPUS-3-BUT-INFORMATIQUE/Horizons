/** @type {import('tailwindcss').Config} */
module.exports = {

  content: ["./resources/views/**/*.{html,js,php}", "./resources/js/**/*.{js}"],
  theme: {
      screens: {
          '1xl5': '1340px'
      },
    extend: {},
  },
  plugins: [require('daisyui')],
}
