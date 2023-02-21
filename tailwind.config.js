/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php"
  ],
  theme: {
    extend: {
      colors: {
        main: {
          "100": "#e6effc",
          "200": "#ccdef9",
          "300": "#99bdf3",
          "400": "#80adf0",
          "500": "#4d8ce9",
          "600": "#337be6",
          "700": "#0051ca",
          "800": "#003f9d",
          "900": "#003686"
        },
      },
    },
  },
  plugins: [],
}