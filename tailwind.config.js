module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        brand: {
          gray: {
            light: {
              1: "#828282",
              2: "#E5E5E5",
              3: "#BCBCBC",
              4: "#C2C2C2"
            },
            dark: {
              1: "#3A3A3A",
              2: "4F4F4F"
            }
          },
          blue: {
            light: "#FBFBFB"
          },
          border: {
            1: "E0E0E0"
          }
        }
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
