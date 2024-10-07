/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                blacks: "#060606",
            },

            fontFamily: {
                "hanken-grotesk": ["Hanken Grotesk", "Sans-Serif"],
            },

            fontSize: {
                "2xs": ".625rem", //10px
            },
        },
    },
    plugins: [],
};
