const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'bazovy': ['Bazovy', 'sans-serif'],
                'victorianna-thin': ['Victorianna-thin', 'sans-serif'],
                'victorianna-thin-italic': ['Victorianna-thin-italic', 'sans-serif'],
                
            },
            colors: {
                'white' : '#f6eee3',
                'green' : '#063e33',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
