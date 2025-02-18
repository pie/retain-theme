<?php
/*
Template Name: Front Page
*/

get_template_part('template-parts/header');
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hero.css">

<main id="primary" class="site-main">
    <section class="hero">
        <img src="/assets/hero/hero-image.png" alt="Hero Image" class="hero-image">
        <div class="hero-content">
            <div class="hero-text">Sept 22nd - 24th 2025 / Newcastle, UK</div>
            <img src="/assets/hero/hero-logo.png" alt="Hero Logo" class="hero-logo">
            <div id="countdown" class="countdown">
                <div class="countdown-item">
                    <span id="days" class="brandongrotesque">00</span>
                    <span class="label sourcesanspro">Days</span>
                </div>
                <div class="countdown-item">
                    <span id="hours" class="brandongrotesque">00</span>
                    <span class="label sourcesanspro">Hours</span>
                </div>
                <div class="countdown-item">
                    <span id="minutes" class="brandongrotesque">00</span>
                    <span class="label sourcesanspro">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span id="seconds" class="brandongrotesque">00</span>
                    <span class="label sourcesanspro">Seconds</span>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>