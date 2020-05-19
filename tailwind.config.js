const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      colors: {
        brand: {
          400: '#2f9fed',
          500: '#2f4fed',
          600: '#1732b8',
        },
      },
      fontFamily: {
        sans: [ 'Inter', ...defaultTheme.fontFamily.sans ],
        heading: [ ...defaultTheme.fontFamily.sans ],
      },
      boxShadow: theme => ({
        outline: `0 0 0 3px ${theme('colors.brand.500')}60`,
      }),
      spacing: {
        sidebar: '10rem',
      }
    },
    linearGradientColors: theme => ({
      brand: [theme('colors.brand.500'), theme('colors.brand.400')],
    }),
  },
  variants: {},
  plugins: [
    require('tailwindcss-gradients'),
  ],
  purge: [
    './app/**/*.php',
    './resources/**/*.vue',
    './resources/**/*.js',
    './resources/**/*.php',
  ],
}
