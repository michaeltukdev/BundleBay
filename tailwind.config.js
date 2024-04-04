/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    container: {
      center: true,
      screens: {
        'sm': '100%',
        'md': '100%',
        'lg': '1024px',
        'xl': '1340px',
        '2xl': '1340px',
      },
      padding: {
        DEFAULT: '20px',
      },
    },
    extend: {
      colors: {
        'background': '#18181B',
        'container': '#212125',
        'input': '#2E2E33',
        'primary-text': '#FFFFFF',
        'secondary-text': '#B1B1B1',
        'third-text': '#979797',
        'primary': '#FF6F8C', 
        'secondary': '#E24C6A',
      },
    },
  },
  plugins: [],
}