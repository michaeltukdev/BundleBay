/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    colors: {
      'background': '#18181B',
      'container': '#212125',
      'input': '#2E2E33',
      'primary-text': '#FFFFFF',
      'secondary-text': '#B1B1B1',
      'primary': '#FF6F8C', 
      'secondary': '#E24C6A',
    },
    extend: {},
  },
  plugins: [],
}