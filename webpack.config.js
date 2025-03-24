const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const webpack = require("webpack");

module.exports = {
  mode: "production", // Change to "development" if debugging
  entry: "./src/js/index.js", // Main entry point for JS
  output: {
    filename: "bundle.js", // Output single JS file
    path: path.resolve(__dirname, "inc/js"), // Save in inc/js
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
          "postcss-loader", // Loads from postcss.config.js
          "sass-loader",
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin({
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
