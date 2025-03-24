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

    if (is_page_template('front-page.php')) :

        // Enqueue countdown script
        wp_enqueue_script(
            'retain-countdown',
            get_template_directory_uri() . '/inc/js/countdown.js',
            array(),  
            RETAIN_VERSION
        );

        // Enqueue collapsible script
        wp_enqueue_script(
            'retain-collapsible',
            get_template_directory_uri() . '/inc/js/collapsible.js',
            array(),  
            RETAIN_VERSION
        );

        // Enqueue schedule tabs script
        wp_enqueue_script(
            'retain-schedule-tabs',
            get_template_directory_uri() . '/inc/js/schedule-tabs.js',
            array(),  
            RETAIN_VERSION
        );
    endif;
}
add_action('wp_enqueue_scripts', 'retain_scripts');
