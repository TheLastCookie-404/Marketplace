/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./project/**/*.{html,js,php}"],
  theme: {
    extend: {},
    fontFamily: {
      raleway: ['Raleway'],
      martel: ['Martel'],
    },
  },
  daisyui: {
    themes: [
      {
        base: {
          "primary": "#ffc700",
          "primary-content": "#d8ab0c",
          "secondary": "#d32727",
          "accent": "#ffffff",
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