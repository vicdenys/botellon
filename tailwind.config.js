const { opacity } = require("tailwindcss/defaultTheme");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    safelist: [
        {
            pattern: /bg-(white|green|red)/,
            variants: [ "hover", "focus", "hover"],
        },
        {
            pattern: /text-(white|green|red)/,
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
                    "0%": { height: "4rem" },
                    "100%": { height: "0rem" },
                },
                "pop-up": {
                    "0%": { transform: "translateY(100%)", opacity: 0 },
                    "100%": { transform: "translateY(0)", opacity: 1 },
                },
                "pop-up-out": {
                    "0%": { transform: "translateY(50%)", opacity: 0 },
                    "5%": { transform: "translateY(0)", opacity: 1 },
                    "45%": { transform: "translateY(0)", opacity: 1 },
                    "50%": { transform: "translateY(-50%)", opacity: 0 },
                    "100%": { transform: "translateY(-50%)", opacity: 0 },
                    "100%": { transform: "translateY(-50%)", opacity: 0 },
                },
            },
            animation: {
                "slide-up": "slide-up 0.5s ease-in-out 3s forwards",
                "pop-up": "pop-up 0.3s ease-in-out forwards",
                "pop-up-out": "pop-up-out 6s ease-in-out infinite",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};



// MOUSE ACTION


