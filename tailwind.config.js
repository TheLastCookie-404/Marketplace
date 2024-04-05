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
      "light",
      "dark",
      "cupcake",
      "bumblebee",
      "emerald",
      "corporate",
      "synthwave",
      "retro",
      "cyberpunk",
      "valentine",
      "halloween",
      "garden",
      "forest",
      "aqua",
      "lofi",
      "pastel",
      "fantasy",
      "wireframe",
      "black",
      "luxury",
      "dracula",
      "cmyk",
      "autumn",
      "business",
      "acid",
      "lemonade",
      "night",
      "coffee",
      "winter",
      "dim",
      "nord",
      "sunset",
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
        },
      },
    ],
  },
  plugins: [require("daisyui")],
}