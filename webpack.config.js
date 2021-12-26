const path = require('path')

module.exports = {
    resolve: {
        alias: {
            '@admin': path.resolve('Admin/Resources/ts'),
            '@': path.resolve('resources/js'),
        },
    },
}
