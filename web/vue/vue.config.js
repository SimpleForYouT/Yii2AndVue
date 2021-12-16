const path = require('path');
const fs = require('fs');
const WebpackOnBuildPlugin = require('on-build-webpack');

module.exports = {
    outputDir: path.resolve(__dirname, 'dist'),
    assetsDir: process.env.NODE_ENV === 'development' ? '' : '../../prod',
    configureWebpack: {
        plugins: [
            new WebpackOnBuildPlugin(function(stats) {
                const newlyCreatedAssets = stats.compilation.assets;
                removeEntries('js');
                removeEntries('css');
                removeEntries('img');
                removeEntries('fonts');
                function removeEntries(pathToRemove){
                    fs.readdir(path.resolve(__dirname, `../prod/${pathToRemove}`), (err, files) => {
                        files.forEach(file => {
                            const newFile = `../../prod/${pathToRemove}/` + file;
                            if(!newlyCreatedAssets[newFile]) {
                                const filePath = path.resolve(__dirname, `../prod/${pathToRemove}/`) + '\\' + file;
                                fs.unlink(filePath, () => {

                                });
                            }
                        });
                    });
                }
            }),
        ]
    }
}
