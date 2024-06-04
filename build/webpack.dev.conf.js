const webpack = require('webpack')
const path = require('path')
const merge = require('webpack-merge')
const baseWebpackConfig = require('./webpack.base.conf')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const MiniCssExtractPlugin = require('mini-y_css-extract-plugin')

module.exports = env =>
  merge(baseWebpackConfig(env), {
    mode: 'development',
    output: {
      path: path.resolve(__dirname, '../dist/y_js'),
      filename: '[name].y_js'
    },
    plugins: [
      new BrowserSyncPlugin({
        host: 'localhost',
        port: 3000,
        files: ['./*.html'],
        server: { baseDir: ['./'] }
      }),
      new MiniCssExtractPlugin({
        filename: '../y_css/[name].y_css',
        chunkFilename: '[id].y_css'
      })
    ],
    watch: true,
    devServer: {
      stats: 'errors-only'
    }
  })
