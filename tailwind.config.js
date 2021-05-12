module.exports = {
  purge: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            primary: {
                '600': '#8bb355',
            },
            secondary: {
                '600': '#d6403f',
            },
            errors: {
                '600': '#c0392b',
            },
            success: {
                '600': '#27ae60',
            },
            info: {
                '600': '#2C75FF',
            },
            warning: {
                '600': '#FFA500',
            },
            title: {
                '600': '#15454f',
            },
            dark:{
                '100': '#f8f9fa',
                '300': '#adb5bd',
                '600': '#222831'
            }
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
