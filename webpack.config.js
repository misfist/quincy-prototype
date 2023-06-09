const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const StyleLintPlugin = require('stylelint-webpack-plugin');
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin');

const MODE = process.env.NODE_ENV || 'development';

module.exports = {
  context: __dirname,
  entry: {
    quincy: ['./src/js/quincy.js', './src/js/popOver.js', './src/style/style.scss'],
    // customizer: './src/customizer.js',
    editor: ['./src/style/editor.scss', './src/js/editor.js'],
    "tiny-mce": './src/style/tiny-mce.scss',
    mobile: './src/style/mobile.scss',
    print: './src/style/print.scss',
    alphaFilter: './src/js/alphaFilter.js',
    paginate: './src/js/paginate.js',
    loadMore: './src/js/loadMore.js',
    quincyClipboard: './src/js/quincyClipboard.js',
    toc: './src/js/toc.js',
  },
  output: {
    path: path.resolve(__dirname, 'assets'),
    publicPath: 'assets/',
    filename: 'js/[name].js'
  },
  devtool: (MODE === 'development') ? 'inline-source-map' : false,
  mode: MODE,
  resolve: {
    modules: [
      "node_modules"
    ]
  },
  module: {
    rules: [
      {
        enforce: 'pre',
        exclude: /node_modules/,
        // test: /\.jsx$/,
        // loader: 'eslint-loader'
      },
      {
        test: /\.jsx?$/,
        loader: 'babel-loader'
      },
      {
        test: /\.s?css$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            // Loader for webpack to process CSS with PostCSS
            loader: 'postcss-loader',
            options: {
              plugins: function () {
                return [
                  require('autoprefixer')
                ];
              }
            }
          },
          'sass-loader'
        ]
      },
      // {
      //   test: /\.svg$/,
      //   exclude: [
      //     path.resolve(__dirname, "src/webfonts"),
      //     path.resolve(__dirname, "webfonts"),
      //     path.resolve(__dirname, "./src/webfonts")
      //   ],
      //   // loader: 'svg-sprite-loader',
      //   loader: 'svg-inline-loader',
      //   options: {
      //     outputPath: 'images/',
      //     name: '[name].[ext]'
      //     // extract: true,
      //     // spriteFilename: 'svg-defs.svg'
      //   }
      // },
      {
        test: /\.(ttf|eot|svg|gif|woff|woff2)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        include: [
            path.resolve(__dirname, "./src/webfonts")
            //, Any other svg font path
        ],
        loader: 'file-loader',
        options: {
          outputPath: "webfonts/",
          name: "[name].[ext]",
        }
      },
      // {
      //   test: /\.(jpe?g|png|gif)\$/,
      //   include: [
      //     path.resolve(__dirname, "src/img")
      //   ],
      //   use: [
      //     {
      //       loader: 'file-loader',
      //       options: {
      //         outputPath: path.resolve(__dirname, "assets/img"),
      //         name: '[name].[ext]'
      //       }
      //     },
      //     'img-loader'
      //   ]
      // }
      // {
      //   test: /\.(jpe?g|png|gif|svg)$/i,
      //   include: [
      //     path.resolve(__dirname, "src/img")
      //   ],
      //   loader: 'file-loader',
      //   options: {
      //     outputPath: path.resolve(__dirname, "assets/img"),
      //     name: '[name].[ext]'
      //   }
      // },
      {
        test: /\.(jpe?g|png|gif|svg)$/i,
        exclude: [
          path.resolve(__dirname, "./src/webfonts")
        ],
        use: [
          {
            loader: 'file-loader', // Or `url-loader` or your other loader
          },
          {
            loader: ImageMinimizerPlugin.loader,
            options: {
              name: '[name].[ext]',
              severityError: 'warning', // Ignore errors on corrupted images
              minimizerOptions: {
                plugins: ['gifsicle'],
              },
            },
          },
        ],
      },
    ]
  },
  plugins: [
    // new StyleLintPlugin(),
    new MiniCssExtractPlugin({
      filename: './css/[name].css'
    }),
    new BrowserSyncPlugin({
      files: '**/*.php',
      proxy: 'http://quincy.test'
    }),
    new ImageMinimizerPlugin({
      severityError: 'warning', // Ignore errors on corrupted images
      minimizerOptions: {
        plugins: ['gifsicle'],
      },
      // Disable `loader`
      loader: false,
    }),
  ],
  externals: {
    jquery: 'jQuery',
  },
  optimization: {
    minimizer: [
      new UglifyJsPlugin(), 
      new OptimizeCssAssetsPlugin( {
        assetNameRegExp: /\.min\.css$/g,
        cssProcessor: require('cssnano'),
        cssProcessorPluginOptions: {
          preset: ['default', { discardComments: { removeAll: true } }],
        },
        canPrint: true
      } )
    ]
  },
};
