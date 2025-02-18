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
        <div class="hero-content">
            <div class="hero-text">Sept 22nd - 24th 2025 / Newcastle, UK</div>
            <div id="countdown" class="countdown">
                <div class="countdown-item">
                    <span id="days">00</span>
                    <span class="label">Days</span>
                </div>
                <div class="countdown-item">
                    <span id="hours">00</span>
                    <span class="label">Hours</span>
                </div>
                <div class="countdown-item">
                    <span id="minutes">00</span>
                    <span class="label">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span id="seconds">00</span>
                    <span class="label">Seconds</span>
                </div>
            </div>
        </div>
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