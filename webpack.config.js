const path = require('path');
const webpack = require('webpack');
const MinifyPlugin = require("babel-minify-webpack-plugin");
//const ExtractTextPlugin = require('extract-text-webpack-plugin');
const {VueLoaderPlugin} = require('vue-loader')

// Set different CSS extraction for editor only and common block styles
/*const blocksCSSPlugin = new ExtractTextPlugin({
    filename: './assets/css/admin.css',
});*/

// Configuration for the ExtractTextPlugin.
const extractConfig = {
    use: [
        {loader: 'raw-loader'},
        {
            loader: 'postcss-loader',
            options: {
                plugins: [require('autoprefixer')],
            },
        },
        {
            loader: 'sass-loader',
            query: {
                outputStyle:
                    'production' === process.env.NODE_ENV ? 'compressed' : 'nested',
            },
        },
    ],
};


module.exports = {
    entry: './assets/app/main.js',
    output: {
        path: path.resolve(__dirname),
        filename: 'assets/js/admin.js',
    },
    resolve: {
        extensions: ['.js', '.vue', '.json', '.css'],
        alias: {
            'vue$': 'vue/dist/vue.esm.js'
        }
    },
    watch: 'production' !== process.env.NODE_ENV,
    devtool: 'cheap-eval-source-map',
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                options: {
                    compilerOptions: {
                        preserveWhitespace: false
                    }
                }
            },
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                },
            },
            /*{
                test: /([a-zA-Z0-9\s_\\.\-\(\):])+(.s?css)$/,
                use: blocksCSSPlugin.extract(extractConfig),
            },*/
        ],
    },
    plugins: [
        //blocksCSSPlugin,
        new MinifyPlugin()
    ],
};
