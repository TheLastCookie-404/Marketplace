/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./project/**/*.{html,js}"],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: [
      {
        base: {
          "primary": "#ffc700",
          "secondary": "#d32727",
          "accent": "#b52b2b",
          "neutral": "#cfcfcf",
          "base-100": "#ffffff",
          "info": "#38bdf8",
          "success": "#00e8aa",
          "warning": "#fcd34d",
          "error": "#ff6382",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
}