/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./project/**/*.{html,js,php}"],
  theme: {
    extend: {
      gridTemplateColumns: {
        'fill': 'repeat(auto-fill, minmax(0, 10fr))',
        'fit': 'repeat(auto-fit, minmax(0, 1fr))',
      },
      fontSize: {
        'xxs': '10px',
      },
    },
    fontFamily: {
      raleway: ['Raleway'],
      martel: ['Martel'],
    },
  },
  daisyui: {
    themes: [
      {
        base: {
          "primary": "#ffffff",
          "accent-content": "#d8ab0c",
          "secondary": "#d32727",
          "accent": "#ffc700",
          "neutral": "#cfcfcf",
          "base-100": "#ffffff",
          "info": "#38bdf8",
          "success": "#00e8aa",
          "warning": "#fcd34d",
          "error": "#ff6382",
          // "primary": "#ffc700",
          // "primary-content": "#d8ab0c",
          // "secondary": "#d32727",
          // "accent": "#ffffff",
          // "neutral": "#cfcfcf",
          // "base-100": "#ffffff",
          // "info": "#38bdf8",
          // "success": "#00e8aa",
          // "warning": "#fcd34d",
          // "error": "#ff6382",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
}