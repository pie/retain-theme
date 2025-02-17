<?php
get_template_part('template-parts/header');
?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>

/* functions.php */
<?php
if (!defined('RETAIN_VERSION')) {
    define('RETAIN_VERSION', '0.0.1');
}

function retain_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'retain_theme_setup');

function retain_scripts() {
    wp_enqueue_style(
        'retain-style',
        get_stylesheet_uri(),
        array(),
        RETAIN_VERSION
    );

    wp_enqueue_script(
        'retain-script',
        get_template_directory_uri() . '/inc/js/script.js',
        array(),
        RETAIN_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'retain_scripts');
