module.exports = {
    plugins: [
      require("cssnano")({
        preset: [
          "default",
          {
            discardComments: { removeAll: true }, // Remove all comments
            normalizeWhitespace: true, // Minify whitespace
            minifyParams: true, // Minify parameters
            colormin: true, // Convert color names to hex
            minifySelectors: true, // Optimize selectors
            minifyValues: true, // Convert 0.5 to .5
          },
        ],
      }),
    ],
  };
  