const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    safelist: [
        {
            pattern: /bg-(white|green)/,
            variants: [ "hover", "focus", "hover"],
        },
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                bazovy: ["Bazovy", "sans-serif"],
                "victorianna-thin": ["Victorianna-thin", "sans-serif"],
                "victorianna-thin-italic": [
                    "Victorianna-thin-italic",
                    "sans-serif",
                ],
            },
            colors: {
                white: "#f6eee3",
                green: "#063e33",
            },
            keyframes: {
                "slide-up": {
                    "0%": { transform: "scaleY(100%)" },
                    "100%": { transform: "scaleY(0%)" },
                },
            },
            animation: {
                "slide-up": "slide-up 0.5s ease-in-out 3s forwards",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
