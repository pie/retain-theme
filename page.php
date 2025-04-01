<?php
/*
Template Name: Page
*/

get_template_part('template-parts/header');
?>

<main id="primary" class="site-main inner-page">
    <div class="site-inner">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="parallelogram"><h2 class="entry-title"><?php the_title(); ?></h2></div>
                <div class="entry-content">
                    <?php the_content(); ?>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</div>
<!-- Footer -->
<footer class="footer">
    <p>Copyright &copy; 2025 - We Do Digital Ltd | <a href="https://www.retainlive.com/affiliate-home">Affiliates</a> | <a href="https://www.retainlive.com/sponsorship/">Sponsorship</a></p>
</footer>
</main>
<?php 
    get_template_part('template-parts/footer');
