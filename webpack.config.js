/**
 * author:      Skylar Kong
 * version:     1.0.0
 * created:     27.12.2016
 *
 */

var path = require('path');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {

    entry: './assets/index.js',
    output: {
        path: path.resolve( __dirname, 'assets' ),
        filename: 'sass-dummy.js'
    },
    module: {
        loaders: [
            {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract( 'style-loader', 'css-loader!autoprefixer-loader!sass-loader' )
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin( 'stylesheet/main.css', { allChunks: true } )
    ]
};
