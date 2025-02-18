<?php
/*
Template Name: Front Page
*/

get_template_part('template-parts/header');
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hero.css">

<main id="primary" class="site-main">

<!-- Hero Section -->
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

<!-- Membership Growth Section -->
    <section class="membership-growth">
        <img src="/assets/membership-growth/plant.png" alt="Membership Growth Plant" class="divider-img">

        <div class="dark-parallelogram"></div>
        <div class="light-parallelogram"></div>
        <h2 class="section-title">Ready to accelerate your membership growth</h2>

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

<!-- Highlights Section -->
    <section class="highlights">
        <img src="/assets/highlights/stars.png" alt="Highlights stars image" class="divider-img">

        <div class="dark-parallelogram"></div>
        <div class="light-parallelogram"></div>
        <h2 class="section-title">Check out highlights of our 2019 event:</h2>

        <div class="hightlights-video">
            Embedded video
        </div>
    </section>

<!-- Meet Your Host Section -->
    <section class="meet-your-host">
        <img src="/assets/meet-your-host/person.png" alt="Meet Your Host divider" class="divider-img">

        <div class="dark-parallelogram"></div>
        <div class="light-parallelogram"></div>
        <h2 class="section-title">Meet your host for Retain 2025</h2>

        <div class="host-img-bg-dark"></div>
        <div class="host-img-bg-light"></div>
        <img src="/assets/meet-your-host/host.png" alt="Host photo" class="host-img">

        <h3 class="section-subtitle"></h3>

        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p class="last-p"></p>

    </section>

<!-- Speakers Section -->
    <section class="speakers">
        <img src="/assets/speakers/bg1.png" alt="abstract shape 1" class="speakers-bg-img-1">
        <img src="/assets/speakers/bg2.png" alt="abstract shape 2" class="speakers-bg-img-2">
        <div class="speakers-section-content">
            <h2>You'll also learn from expert guests including:</h2>
            <!-- speakers repeater field here -->
        </div>

        <h3 class="section-subtitle"></h3>
        <hr />
    </section>

<!-- Tickets Section -->
    <section class="tickets">
        <img src="/assets/tickets/tickets-divider.png" alt="Tickers divider" class="divider-img">

        <div class="dark-parallelogram"></div>
        <div class="light-parallelogram"></div>
        <h2 class="section-title">Buy your ticket</h2>

        <p></p>
        <p></p>

        <h3 class="section-subtitle"></h3>

        <div class="ticket-prices">
            <div class="ticket-price-card">
                <img class="card-bg" src="/assets/tickets/card-bg.png" alt="Ticket card background">
                
                <p class="price-title"></p>

                <div class="earlybird-bg"></div>
                <p class="earlybird-text"></p>

                <ul class="price-features">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

                <a href="#" class="buy-now-button">BUY NOW</a>
            </div>
            <div class="ticket-price-card">
                <img class="card-bg" src="/assets/tickets/card-bg.png" alt="Ticket card background">
                
                <p class="price-title"></p>

                <div class="earlybird-bg"></div>
                <p class="earlybird-text"></p>

                <ul class="price-features">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

                <a href="#" class="buy-now-button">BUY NOW</a>
            </div>
        </div>
    </section>

<!-- Location Section -->
    <section class="location">
        <img src="/assets/location/pin.png" alt="Location divider" class="divider-img">

        <div class="location-section-content">
            <div class="location-text-wrapper">
                <div class="dark-parallelogram-cutoff"></div>
                <div class="light-parallelogram-cutoff"></div>
                <h2 class="section-title">Location</h2>
                <p class="address"></p>
                <p class="location-name"></p>
            </div>

            <div class="map-wrapper">

            </div>
    </section>

<!-- FAQ Section -->
    <section class="faq">
        <img src="/assets/faq/speech-bubbles-divider.png" alt="FAQ divider" class="divider-img">

        <div class="dark-parallelogram"></div>
        <div class="light-parallelogram"></div>
        <h2 class="section-title">Frequently Asked Questions</h2>

        <div class="collapsible-wrapper">

            <button type="button" class="collapsible">Open Section 1</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible">Open Section 2</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button type="button" class="collapsible">Open Section 3</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        
            <button type="button" class="collapsible">Open Section 4</button>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        </div>

    </section>

<!-- Schedule Section -->
    <section class="schedule">
        <img src="/assets/schedule/folder.png" alt="Schedule image" class="divider-img">

        <div class="dark-parallelogram"></div>
        <div class="light-parallelogram"></div>
        <h2 class="section-title">Schedule</h2>

        <div class="schedule-tabs">
            <div class="tab-button-container">
                <button class="tab-button" onclick="openTab(event, 'day1')">Day 1</button>
                <button class="tab-button" onclick="openTab(event, 'day2')">Day 2</button>
            </div>

            <div id="day1" class="tab-content">
                <p>Content for Day 1</p>
                <!-- schedule repeater fields here -->
            </div>

            <div id="day2" class="tab-content" style="display:none;">
                <p>Content for Day 2</p>
                <!-- schedule repeater fields here -->
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