<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function retain_scripts() {
    // Enqueue Google Fonts stylesheet for Source Sans Pro font
    wp_enqueue_style(
        'retain-google-fonts',
        'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap',
        array(),
        null
    );

    // Enqueue Typekit stylesheet for Brandon Grotesque font
    wp_enqueue_style(
        'retain-typekit',
        'https://use.typekit.net/hmd0zsv.css',
        array(),
        null
    );

    // Enqueue compiled stylesheet
    wp_enqueue_style(
        'retain-style',
        get_template_directory_uri() . '/inc/css/bundle.css',
        array(),
        RETAIN_VERSION
    );

    // Enqueue scripts only if the page template is front-page.php
    if (is_page_template('front-page.php')) {
        wp_enqueue_script(
            'retain-bundle',
            get_template_directory_uri() . '/inc/js/bundle.js',
            array(),
            RETAIN_VERSION,
            true // Load script in the footer
        );
    }
}
add_action('wp_enqueue_scripts', 'retain_scripts');
