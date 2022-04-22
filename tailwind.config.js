module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                // 'inter': ['Inter', 'sans-serif'],
                'rubik': ['Rubik', 'sans-serif'],
            },
            colors: {
                'primary': '#facc15',
                'secondary': '#FFF200',
                'first': '#1e40af',
                'second': '#475569',
            },
            keyframes: {
                wiggle: {
                    '0%, 100%': {
                        transform: 'rotate(-3deg)'
                    },
                    '50%': {
                        transform: 'rotate(3deg)'
                    },
                }
            },
            animation: {
                wiggle: 'wiggle 1.5s ease-in-out infinite',
            }
        },
    },
    plugins: [
        require('tailwind-scrollbar'),
    ],
}
