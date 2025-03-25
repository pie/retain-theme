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
                    <form action="#" method="post" class="simple-form">
                        <label for="name">Name 
                            <span class="required">*</span>
                        </label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email
                            <span class="required">*</span>
                        </label>
                        <input type="email" id="email" name="email" required>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>

</main>
<?php 
    get_template_part('template-parts/footer');
    