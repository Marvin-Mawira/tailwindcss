import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {

    content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
      ],

    theme: {
        extend: {
            spacing: {
                '1': '0.25rem',  // 4px
                '2': '0.5rem',   // 8px
                '3': '0.75rem',  // 12px
                '4': '1rem',     // 16px
                '5': '1.25rem',  // 20px
                '6': '1.5rem',   // 24px
                // Add more custom values as needed
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};

