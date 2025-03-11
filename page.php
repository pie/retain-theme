<?php
/*
Template Name: Page
*/

get_template_part('template-parts/header');
?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</main>
