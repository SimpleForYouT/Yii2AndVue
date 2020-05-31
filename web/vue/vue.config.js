const path = require('path');

module.exports = {
    outputDir: path.resolve(__dirname, 'dist'),
    assetsDir: process.env.NODE_ENV === 'development' ? '' : '../../prod'
}
