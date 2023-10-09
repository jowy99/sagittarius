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
              'sans': ['Albert Sans', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                light: {
                    '50': '#f1f2eb',
                    '100': '#eeefe7',
                    '200': '#ebece3',
                    '300': '#e8eadf',
                    '400': '#e5e7db',
                    '500': '#E3E5D8',
                    '600': '#cccec2',
                    '700': '#b5b7ac',
                    '800': '#9ea097',
                    '900': '#888981',
                    '950': '#71726c',
                },
                green_light: {
                    '50': '#d7e0da',
                    '100': '#cfd9d3',
                    '200': '#c7d3cb',
                    '300': '#bfcdc4',
                    '400': '#b7c7bd',
                    '500': '#AFC1B6',
                    '600': '#9dada3',
                    '700': '#8c9a91',
                    '800': '#7a877f',
                    '900': '#69736d',
                    '950': '#57605b',
                },
                green: {
                    '50': '#b1c1b9',
                    '100': '#a2b4ab',
                    '200': '#92a89d',
                    '300': '#839b8f',
                    '400': '#738f81',
                    '500': '#648374',
                    '600': '#5a7568',
                    '700': '#50685c',
                    '800': '#465b51',
                    '900': '#3c4e45',
                    '950': '#32413a',
                },
                green_dark: {
                    '50': '#9aa8a2',
                    '100': '#85978f',
                    '200': '#71857c',
                    '300': '#5d746a',
                    '400': '#496357',
                    '500': '#355245',
                    '600': '#2f493e',
                    '700': '#2a4137',
                    '800': '#253930',
                    '900': '#1f3129',
                    '950': '#1a2922',
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
