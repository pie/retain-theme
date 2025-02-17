<?php
if (!defined('RETAIN_VERSION')) {
    define('RETAIN_VERSION', '0.0.1');
}

function retain_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'retain_theme_setup');

// Enqueue scripts and styles
function retain_scripts() {
    // Enqueue stylesheet
    wp_enqueue_style(
        'retain-style',
        get_stylesheet_uri(),
        array(),
        RETAIN_VERSION
    );

    // Enqueue JavaScript
    wp_enqueue_script(
        'retain-script',
        get_template_directory_uri() . '/inc/js/navigation.js',
        array(),  // Add dependencies here if needed (e.g., array('jquery'))
        RETAIN_VERSION
    );
}
add_action('wp_enqueue_scripts', 'retain_scripts');
