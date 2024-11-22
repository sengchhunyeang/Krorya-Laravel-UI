/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'krorya-welcome-gradient': 'linear-gradient(180deg, #AE8E3E 0%, #AF8620 38%, #322608 100%)',
            },
        },
    },
    plugins: [],
}
