module.exports = {
    env: {
        node: true,
        'vue/setup-compiler-macros': true,
    },
    extends: [
        'eslint:recommended',
        'plugin:vue/vue3-recommended',
        'prettier',
    ],
    rules: {
        indent: ['error', 4],
        quotes: ['error', 'single'],
        semi: ['error', 'never'],
        'newline-before-return': 'error',
        'vue/order-in-components': ['error'],
        'vue/no-v-html': 'off',
        'vue/require-default-prop': 'off',
        'vue/html-indent': ['error', 4, {
            baseIndent: 0,
        }],
    },
    globals: {
        'route': 'readonly',
    }
}
