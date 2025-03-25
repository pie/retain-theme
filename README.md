# Retain Theme

This is the `retain-theme`, a custom WordPress theme built with PHP, JavaScript and SCSS.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Development](#development)
    - [Build](#build)
    - [Watch](#watch)
- [Folder Structure](#folder-structure)
- [Notes](#notes)

## Requirements

Ensure you have the following installed on your system:

- [Node.js](https://nodejs.org/) (v14 or higher recommended)
- [npm](https://www.npmjs.com/) (comes with Node.js)
- [Sass](https://sass-lang.com/) (Dart Sass)

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd retain-theme

2. Install dependencies
    ```bash
    npm install
    ```
## Development

### Build

To build the theme, run:
```bash
npm run build
```

This will:
- Compile SCSS to CSS and output it to inc/css/bundle.css
- Compile the JavaScript files and output them to inc/js/bundle.js

### Watch

To watch for changes and automatically compile them, run:
```bash
npm run watch
```

This will watch for changes in the SCSS files and compile them to inc/css/bundle.css in real-time.

## Folder Structure

The theme is structured as follows:

- src/js/: Contains JavaScript source files.
- src/sass/: Contains SCSS source files.
- inc/js/: Compiled JavaScript output.
- inc/css/: Compiled CSS output.


## Notes

- The Webpack configuration is located in webpack.config.js.