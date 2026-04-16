/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js"
  ],
  theme: { extend: {} },
  plugins: [
    // require('@tailwindcss/forms'), // si lo instalás: npm i -D @tailwindcss/forms
  ],
}
