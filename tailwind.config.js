/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./project/**/*.{html,js}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}