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

    typography: (theme) => ({
      default: {
        css: {
          color: theme('colors.gray.700'),
          a: {
            color: theme('colors.gray.700'),
            fontWeight: theme('fontWeight.medium'),
            '&:hover': {
              color: theme('colors.black'),
            },
          },
          'h1, h2, h3, h4, h5, h6': {
            a: {
              color: theme('colors.gray.900'),
              fontWeight: theme('fontWeight.semibold'),
            },
          },
        },
      },
    }),
  },

  variants: {
    typography: [],
  },

  plugins: [
    require('tailwindcss-gradients'),
    require('@tailwindcss/typography'),
  ],

  purge: [
    './app/**/*.php',
    './resources/**/*.vue',
    './resources/**/*.js',
    './resources/**/*.php',
  ],
}
