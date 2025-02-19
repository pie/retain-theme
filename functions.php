<?php

if (!defined('RETAIN_VERSION')) {
    define('RETAIN_VERSION', '0.0.1');
}

// Theme setup function
function retain_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    // Enable support for menus
    add_theme_support('menus');
    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'retain-theme'),
    ));
}
add_action('after_setup_theme', 'retain_theme_setup');

// Include enqueue functions
require_once get_template_directory() . '/enqueue.php';

// Include ACF fields
require_once get_template_directory() . '/inc/acf/speaker-fields.php';
error_log('Speaker fields file loaded');
