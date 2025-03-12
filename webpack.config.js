const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const webpack = require("webpack");

module.exports = {
  mode: "production", // "development" for debugging or "production" for production built
  entry: "./src/js/index.js", // Main entry point where we import all JS
  output: {
    filename: "bundle.js", // Output single JS file
    path: path.resolve(__dirname, "inc/js"), // Save in inc/js
    // Expose library functions globally
    library: {
      name: 'RetainTheme',
      type: 'window',
    },
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      }, 
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          "sass-loader",
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin({
      // This configuration will delete only `bundle.js`
      cleanOnceBeforeBuildPatterns: ["**/*", "!*bundle.js"],
    }),
    new MiniCssExtractPlugin({
      filename: "./inc/css/bundle.css",
    }),
  ],
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },
};
