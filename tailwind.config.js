/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'sans': ['"inter"', '"roboto"', '"helvetica"']
    },
  },
  plugins: [require('@tailwindcss/aspect-ratio')],
}
