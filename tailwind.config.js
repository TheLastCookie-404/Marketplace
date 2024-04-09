/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./project/**/*.{html,js,php}"],
  theme: {
    screens: {
      'xs': '450px',
      // => @media (min-width: 320px) { ... }

      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
      gridTemplateColumns: {
        'fill': 'repeat(auto-fill, minmax(0, 10fr))',
        'fit': 'repeat(auto-fit, minmax(0, 1fr))',
      },
      fontSize: {
        'xxs': '10px',
      },
      strokeWidth: {
        '1': '1px',
        '2': '2px',
        '3': '3px',
        '4': '4px',
        '5': '5px',
        '6': '6px',
        '7': '7px',
        '8': '8px',
      }
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
          "neutral": "#f6f6f6",
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