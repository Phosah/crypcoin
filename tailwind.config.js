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
              4: "#C2C2C2",
              5: "#A3A3A3",
              6: "#F5F6FA",
              7: "#BDBDBD"
            },
            dark: {
              1: "#3A3A3A",
              2: "#4F4F4F",
              3: "#232323",
              4: "#3E3E3E"
            }
          },
          blue: {
            light: {
              1: "#FBFBFB"
            },
            dark: {
              1: "#0047CC"
            }
          },
          yellow: {
            light: {
              1: "#F3D14C",
              2: "#D8C99E"
            }
          },
          border: {
            1: "E0E0E0"
          }
        }
      },
      fontFamily: {
        body: ['DM Sans']
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
