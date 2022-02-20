module.exports = {
    root: true,
    env: {
        node: true,
        'vue/setup-compiler-macros': true,
    },
    plugins: ['prettier'],
    extends: ['eslint:recommended', 'plugin:vue/vue3-recommended', '@vue/typescript/recommended', 'prettier'],
    parserOptions: {
        parser: '@typescript-eslint/parser',
        ecmaVersion: 2021,
    },
    rules: {
        indent: ['error', 4],
        quotes: ['error', 'single'],
        semi: ['error', 'never'],
        'no-undef': 'off',
        'newline-before-return': 'error',
        'vue/order-in-components': ['error'],
        'vue/no-v-html': 'off',
        'vue/require-default-prop': 'off',
        'vue/html-indent': ['error', 4],
        'prettier/prettier': 'error',
    },
    globals: {
        route: 'readonly',
    },
}
