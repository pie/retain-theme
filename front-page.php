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
            <h1 class="hero-text">Sept 22nd - 24th 2025 / Newcastle, UK</h1>
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

    <section class="membership-growth">
        <img src="/assets/membership-growth/plant.png" alt="Membership Growth Plant" class="divider-img">

        <div class="dark-parallelogram">
            <div class="light-parallelogram">
                <h2 class="section-title">Ready to accelerate your membership growth</h2>
            </div>
        </div>

        <h3 class="section-subtitle"></h3>

        <p></p>
        <p></p>
        <p></p>
        <p class="last-p"></p>

        <img src="/assets/membership-growth/people-collage.png" alt="Membership Growth people collage" class="membership-growth-collage-img">
        <div class="membership-growth-columns">
            <div class="membership-growth-column">
                <h4></h4>
                <p></p>
            </div>
            <div class="membership-growth-column">
                <h4></h4>
                <p></p>
            </div>
            <div class="membership-growth-column">
                <h4></h4>
                <p></p>
            </div>
        </div>
    </section>


    <section class="highlights">
        <img src="/assets/highlights/stars.png" alt="Highlights stars image" class="divider-img">

        <div class="dark-parallelogram">
            <div class="light-parallelogram">
                <h2 class="section-title">Check out highlights of our 2019 event:</h2>
            </div>
        </div>

        <div class="hightlights-video">
            Embedded video
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