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
    // Enqueue compiled stylesheet
    wp_enqueue_style(
        'retain-style',
        get_template_directory_uri() . '/style.css',
        array(),
        RETAIN_VERSION
    );

    // Enqueue navigation script
    wp_enqueue_script(
        'retain-navigation',
        get_template_directory_uri() . '/inc/js/navigation.js',
        array(), 
        RETAIN_VERSION
    );

    // Enqueue countdown script
    wp_enqueue_script(
        'retain-countdown',
        get_template_directory_uri() . '/inc/js/countdown.js',
        array(),  
        RETAIN_VERSION,
    );
}
add_action('wp_enqueue_scripts', 'retain_scripts');
