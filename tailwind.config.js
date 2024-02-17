/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                "card-dark": "#161629",
                green: "#16FCD2",
                primary: "#6016FC",
            },
        },
    },
    plugins: [],
};
