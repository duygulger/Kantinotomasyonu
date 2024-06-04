const path = require('path')
const merge = require('webpack-merge')
const baseWebpackConfig = require('./webpack.base.conf')
const MiniCssExtractPlugin = require('mini-y_css-extract-plugin')
const TerserPlugin = require('terser-webpack-plugin')

module.exports = env =>
  merge(baseWebpackConfig(env), {
    mode: 'production',
    output: {
      path: path.resolve(__dirname, '../dist/y_js'),
      filename: '[name].y_js'
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: '../y_css/[name].y_css',
        chunkFilename: '[id].y_css'
      })
    ],
    optimization: {
      minimize: true,
      minimizer: [new TerserPlugin()]
    }
  })
