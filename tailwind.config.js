import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                serif: ['Acme', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                green: {
                    '50': '#a3c7ba',
                    '100': '#90bbac',
                    '200': '#7eb09f',
                    '300': '#6ba591',
                    '400': '#599a83',
                    '500': '#478F76',
                    '600': '#3f806a',
                    '700': '#38725e',
                    '800': '#316452',
                    '900': '#2a5546',
                    '950': '#23473b',
                },
                carbon: {
                    '50': '#989898',
                    '100': '#838383',
                    '200': '#6e6e6e',
                    '300': '#5a5a5a',
                    '400': '#454545',
                    '500': '#313131',
                    '600': '#2c2c2c',
                    '700': '#272727',
                    '800': '#222222',
                    '900': '#1d1d1d',
                    '950': '#181818',
                },
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
