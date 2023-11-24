/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    'index.php',
    'Contact.php',
    'Login.php',
    'index copy.html',
  ],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors : {
        primary: "#573EF0",
        dark: "#0f172a",
        secondary: "#475569",
        html: '#FF7A00',
        hitam: '#080516',
        merah : '#dc2626',
      },
      screens: {
        '2xl': '1320px',
      },
      width: {
        'w-70%' : '70%',
      },
      margin: {
        'u' : '7rem',
      }
    },
  },
  plugins: [],
}

