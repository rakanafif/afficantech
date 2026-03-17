/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'affican-dark': '#0a0a0a', // الخلفية الداكنة الفاخرة
        'electric-blue': '#0047FF', // العناوين والروابط
        'gold-glow': '#FFD700', // الأزرار وعناصر الجذب
      },
      boxShadow: {
        'glow': '0 0 15px rgba(255, 215, 0, 0.3)', // توهج بسيط للأزرار
      }
    },
  },
  plugins: [],
}

