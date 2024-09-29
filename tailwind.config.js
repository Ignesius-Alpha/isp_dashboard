/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
          sans: ['Montserrat', 'sans-serif'],
          quicksand: ['Quicksand', 'sans-serif'], 
      },
  },
  },
  plugins: [],
}

