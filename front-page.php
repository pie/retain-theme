<?php
/*
Template Name: Front Page
*/

get_template_part('template-parts/header');
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hero.css">

<main id="primary" class="site-main">
    <div class="hero">
        <img src="path/to/your/image.jpg" alt="Hero Image">
        <div class="hero-text">Text on top of image</div>
    </div>

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>