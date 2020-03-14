'use strict'

var path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin')

module.exports = {
  
  entry: [
    './js/',
    './sass/main.sass',
    './sass/home.sass'
  ],
  output: {
    path: path.resolve(__dirname, '../public/js'),
    publicPath: '../public/js',
    filename: 'main.js',
  },
  module: {
    rules: [{
      test: /\.vue$/,
      loader: 'vue-loader',
      options: {
        loaders: {
          'scss': 'vue-style-loader!css-loader!sass-loader',
          'sass': 'vue-style-loader!css-loader!sass-loader?indentedSyntax'
        }
      }
    },
    {
      test: /\.js$/,
      use: [
        {
          loader: 'babel-loader'
        }
      ],
      exclude: /node_modules/
    },
    {
      test: /\.sass$/,
      use: [{
          loader: 'file-loader',
          options: {
            name: '../css/[name].css',
          }
        },
        {
          loader: 'extract-loader'
        },
        {
          loader: 'css-loader?-url'
        },
        {
          loader: 'postcss-loader'
        },
        {
          loader: 'sass-loader'
        }
      ],
      exclude: /node_modules/
    },
    {
      test: /\.css$/,
      use: [{ loader: 'style-loader' }, { loader: 'css-loader' }],
    }
  ]},
  resolve: {
    extensions: ['.js', '.vue', '.json'],
    alias: {
      'vue$': 'vue/dist/vue.common.js'
    }
  },
  performance: {
    hints: false
  },
  devtool: '#eval-source-map',
  plugins: [
    new VueLoaderPlugin()
  ]
};