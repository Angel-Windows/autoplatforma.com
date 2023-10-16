//-----------------------------------
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}", "./node_modules/flowbite/**/*.html"],
  darkMode: "class",
  theme: {
    extend: {
      screens: {
        smll: "400px",
        sm: "530px",
        md: "767.98px",
        md1: "991.98px",
        lg: "1028px",
        lg1: "1100px",
        lgs: "1160px",
        lg2: "1324px",
        xl: "1440px",
      },
      colors: {
        primary: {
          50: "#eff6ff",
          100: "#dbeafe",
          200: "#bfdbfe",
          300: "#93c5fd",
          400: "#60a5fa",
          500: "#3b82f6",
          600: "#2563eb",
          700: "#1d4ed8",
          800: "#1e40af",
          900: "#1e3a8a",
          950: "#172554",
        },
      },
      backgroundImage: {
        gradientBlock: "( hsla(0, 0%, 0%, 0.405)",
      },
      fontFamily: {
        inter: ["Inter", "sans"],
      },

      /* Додайте ваш стиль input[type="search"] тут */
      input: {
        "type-search": {
          "-webkit-appearance": "none",
        },
      },
    },
    fontFamily: {
      body: ["Inter"],
      sans: ["Inter"],
    },
  },
  plugins: [],
};
