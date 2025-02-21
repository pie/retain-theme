<?php
    /*
Template Name: Front Page
*/

    get_template_part('template-parts/header');
?>

<main id="primary" class="site-main">

<!-- This frontpage template includes the following sections:
    - Hero
    - Membership Growth
    - What to Expect
    - Highlights
    - Meet Your Host
    - Speakers
    - Tickets
    - Location
    - FAQ
    - Schedule

    And the following repeater fields:
    - speaker repeater fields
    - schedule day 1 repeater fields
    - schedule day 2 repeater fields
    When you edit the front page on WP admin, you can add speakers, plus sessions for day 1 and day 2 of the schedule.
-->

<!-- Hero Section -->
    <section class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-bg.png" alt="Hero Image" class="hero-bg">
        <div class="hero-content">
            <h1 class="hero-text">Sept 22nd - 24th 2025 / Newcastle, UK</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-logo.png" alt="Hero Logo" class="hero-logo">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-image-left.png" alt="Hero image with people 1" class="hero-bg-img" id="hero-bg-img-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/hero/hero-image-right.png" alt="Hero image with people 2" class="hero-bg-img" id="hero-bg-img-right"> -->
            <div id="countdown" class="countdown">
                <div class="countdown-item">
                    <span id="days" class="title">00</span>
                    <span class="label">Days</span>
                </div>
                <div class="countdown-item">
                    <span id="hours" class="title">00</span>
                    <span class="label">Hours</span>
                </div>
                <div class="countdown-item">
                    <span id="minutes" class="title">00</span>
                    <span class="label">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span id="seconds" class="title">00</span>
                    <span class="label">Seconds</span>
                </div>
            </div>
        </div>
    </section>

<!-- Membership Growth Section -->
    <section class="membership-growth">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/membership-growth/growth-icon.png" alt="Membership Growth Plant" class="icon-img">

        <div class="parallelogram">
        <h2 class="section-title">Ready to accelerate your membership growth?</h2>
        </div>

        <h3 class="section-subtitle">
            A one of a kind event for membership site owners who want to increase their membership growth in 2025 and beyond.
        </h3>

        <p>
        Hear from successful membership owners and industry experts on the strategies and tactics that are working for them, discover future trends and new ideas, ask questions and connect with other membership site owners from around the world over the course of 2 days in Newcastle upon Tyne, UK.
        </p>
        <p>
        With a mix of keynotes, power sessions, panels and more it’s all about providing you with actionable content that you can implement in your own membership to take it to the next level. With strictly no fluff, theory or pitching!
        </p>
        <p>
        Retain is the only live event dedicated entirely to growing your online membership.
        </p>
        <p><b>
        It’s an event for membership site owners, by membership site owners.
<br />
        Are you in?
        </b>
        </p>

    </section>

<!-- What to Expect Section -->
    <section class="what-to-expect">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/what-to-expect/people-collage.png" alt="people collage" class="full-w-img what-to-expect-collage-img">
        <div class="what-to-expect-columns">
            <div class="what-to-expect-column">
                <h4>What you can expect</h4>
                <p>
                2 action packed days of membership goodness with talks and panels on a variety of membership topics. Plus plenty of time for talking with other membership site owners too – because lets be honest, the conversations you have and ideas you get from the other people in the room are often the best bit of attending a conference!
                </p>
            </div>
            <div class="what-to-expect-column">
                <h4>What you can expect</h4>
                <p>
                2 action packed days of membership goodness with talks and panels on a variety of membership topics. Plus plenty of time for talking with other membership site owners too – because lets be honest, the conversations you have and ideas you get from the other people in the room are often the best bit of attending a conference!
                </p>
            </div>
            <div class="what-to-expect-column">
                <h4>What you can expect</h4>
                <p>
                2 action packed days of membership goodness with talks and panels on a variety of membership topics. Plus plenty of time for talking with other membership site owners too – because lets be honest, the conversations you have and ideas you get from the other people in the room are often the best bit of attending a conference!
                </p>
            </div>
        </div>
    </section>

<!-- Highlights Section -->
    <section class="highlights">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/highlights/highlights-icon.png" alt="Highlights stars image" class="icon-img">

        <div class="parallelogram">
        <h2 class="section-title">Check out highlights of our 2019 event:</h2>
    </div>

        <div class="highlights-video">
            <iframe src="https://player.vimeo.com/video/366466354?dnt=1&amp;app_id=122963" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"></iframe>
        </div>
    </section>

<!-- Meet Your Host Section -->
    <section class="meet-your-host">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/meet-your-host/host-icon.png" alt="Meet Your Host icon" class="icon-img">

        <div class="parallelogram">
        <h2 class="section-title">Meet your host for Retain 2025</h2>
        </div>

        <div class="host-img-bg-dark"></div>
        <div class="host-img-bg-light"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/meet-your-host/host.png" alt="Host photo" class="host-img">

        <p class="host-name">Mike Morrison</p>

        <h3 class="section-subtitle">Howdy, I’m Mike Morrison, founder of the “Membership Geeks”</h3>

        <p>
        I’ve spent years guiding the growth of thousands of memberships, e-learning businesses and online communities.
        </p>
        <p>
        With 20+ years in the online marketing and web development industry, we’ve been the driving force behind a multitude of 6 and 7 figure membership businesses in a diverse range of industries – from weight loss to coaching to executive training to bass guitar – and we have a proven track record of helping great clients to achieve fantastic results.
        </p>
        <p>
        In 2015 I decided to take all of that knowledge and experience and use it to help entrepreneurs and small business owners to achieve success with membership sites on a global scale, and so created Membership Academy which has now helped over 11,000 membership site owners.
        </p>
        <p>
        I’ll be leading the charge at Retain 2025 providing training throughout both days on the latest membership growth tactics and strategies, and sharing insights from our work with countless successful memberships.
        </p>
        <p><b>But I’m not coming alone…</b></p>

    </section>

<!-- Speakers Section -->
    <section class="speakers">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/speakers/bg1.png" alt="abstract shape 1" class="full-w-img speakers-bg-img-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/speakers/bg2.png" alt="abstract shape 2" class="full-w-img speakers-bg-img-2">
        <div class="speakers-section-content">
            <h2>You'll also learn from expert guests including:</h2>
            <!-- speakers repeater fields -->
            <div class="speakers-container">
        <?php if (have_rows('speakers')): ?>
            <div class="speakers-grid">
    <?php while (have_rows('speakers')): the_row();
            $image    = get_sub_field('speaker_image');
            $name     = get_sub_field('speaker_name');
            $lastname = get_sub_field('speaker_last_name');
            $role     = get_sub_field('speaker_role');
        ?>
	            <div class="speaker-wrapper">
	                <div class="speaker-card">
	                    <?php if ($image): ?>
	                        <div class="speaker-image">
	                            <img src="<?php echo esc_url($image['url']); ?>"
	                                 alt="<?php echo esc_attr($image['alt']); ?>" />
	                        </div>
	                    <?php endif; ?>
                </div>

                <div class="speaker-info">
                    <?php if ($name): ?>
                        <h3 class="speaker-name"><?php echo esc_html($name); ?></h3>
                    <?php endif; ?>

                    <?php if ($lastname): ?>
                        <h3 class="speaker-name"><?php echo esc_html($lastname); ?></h3>
                    <?php endif; ?>

                    <?php if ($role): ?>
                        <p class="speaker-role"><?php echo esc_html($role); ?></p>
                    <?php endif; ?>
                </div>
            </div>
    <?php endwhile; ?>
</div>
        <?php endif; ?>
    </div>
    </div>

        <h3 class="section-subtitle">
        With more to come – full lineup to be announced in the coming months!
        </h3>
        <hr />
    </section>

<!-- Tickets Section -->
    <section class="tickets">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/tickets/tickets-icon.png" alt="Tickers icon" class="icon-img">

        <div class="parallelogram">
        <h2 class="section-title">Buy your ticket</h2>
        </div>

        <div class="first-p">
            <p>Join us on <b>September 22nd - 24th 2025</b> in <b>Newcastle-Upon-Tyne, England</b> for THE membership growth event that you simply can’t afford to miss.
        </p>
        </div>
        <div class="second-p"><p>
        <em><b>Don’t forget:</b> members of Membership Academy receive a discount on their ticket price!</em>
    </p>
    </div>

        <h3 class="section-subtitle">
        PLUS take advantage of Earlybird pricing if you buy your ticket today!
        </h3>

        <div class="ticket-prices">
    <div class="card-wrapper">
        <div class="ticket-price-card">
            <img class="card-bg" src="<?php echo get_template_directory_uri(); ?>/assets/tickets/card-bg.png" alt="Ticket card background">
            <p class="price-title">£345</p>
            <div class="earlybird-bg">
                <p class="earlybird-text">Earlybird (non-members)</p>
            </div>
            <ul class="price-features">
                <li><b>Save £150</b></li>
                <li>Access to all sessions</li>
                <li>Lunch & refreshments provided</li>
                <li>Academy member discount</li>
            </ul>
            <a href="/buy-your-tickets" class="buy-now-button">BUY NOW</a>
        </div>
    </div>

    <div class="card-wrapper">
        <div class="ticket-price-card">
            <img class="card-bg" src="<?php echo get_template_directory_uri(); ?>/assets/tickets/card-bg.png" alt="Ticket card background">
            <p class="price-title">£245</p>
            <div class="earlybird-bg">
                <p class="earlybird-text">Earlybird (members)</p>
            </div>
            <ul class="price-features">
                <li><b>Save £250</b></li>
                <li>Access to all sessions</li>
                <li>Lunch & refreshments provided</li>
                <li><b>Academy member discount</b></li>
            </ul>
            <a href="/buy-your-tickets" class="buy-now-button">BUY NOW</a>
        </div>
    </div>
</div>
    </section>

<!-- Location Section -->
    <section class="location">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/location/location-icon.png" alt="Location icon" class="icon-img">

        <div class="location-section-content">
            <div class="location-text-wrapper">
            <div class="parallelogram">
        <h2 class="section-title">Location</h2>
        </div>
        <div class="location-text">
                <p class="address"><b>
                Hilton Newcastle Gateshead
                </b>
                </p>
                <p class="address"><b>
Bottle Bank, Gateshead NE8 2AR
</b>
                </p>
                <p class="location-name">
                Newcastle Airport <span>(8 miles)</span>
                </p>
                <p class="location-name">
                Central Station <span>(1.3 miles)</span>
                </p>
            </div>
            </div>

            <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d572.5954672480453!2d-1.6064786303255774!3d54.96640216817044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e70ba0fc767ef%3A0xb1529a45b94da2ea!2sHilton%20Newcastle%20Gateshead!5e0!3m2!1sen!2suk!4v1739978592971!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

<!-- FAQ Section -->
    <section class="faq">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/faq/faq-icon.png" alt="FAQ icon" class="icon-img">

        <div class="parallelogram">
        <h2 class="section-title">Frequently Asked Questions</h2>
        </div>

        <div class="collapsible-wrapper">

            <button type="button" class="collapsible">WHATS INCLUDED IN THE TICKET PRICE?</button>
            <div class="content">
                <p>
                    Your completed registration includes the following:
                </p>
                <ul>
                    <li>Access to all speaker presentations and panels throughout both days of the conference</li>
                    <li>Breakfast, lunch and refreshments on both days</li>
                    <li>Complimentary Wifi access in the event area</li>
                    <li>And a few special surprises…</li>
                <p class="note">
                    Note: Hotel, airfare and other travel expenses are not included in the ticket price.
                </p>
            </div>

            <button type="button" class="collapsible">ARE THERE ANY DISCOUNTS FOR STUDENTS OR CHARITIES?</button>
            <div class="content">
            <p>
                    Your completed registration includes the following:
                </p>
                <ul>
                    <li>Access to all speaker presentations and panels throughout both days of the conference</li>
                    <li>Breakfast, lunch and refreshments on both days</li>
                    <li>Complimentary Wifi access in the event area</li>
                    <li>And a few special surprises…</li>
                <p class="note">
                    Note: Hotel, airfare and other travel expenses are not included in the ticket price.
                </p>
            </div>

            <button type="button" class="collapsible">Can I BUY A TICKET TO JUST ONE OF THE DAYS OF THE EVENT?</button>
            <div class="content">
            <p>
                    Your completed registration includes the following:
                </p>
                <ul>
                    <li>Access to all speaker presentations and panels throughout both days of the conference</li>
                    <li>Breakfast, lunch and refreshments on both days</li>
                    <li>Complimentary Wifi access in the event area</li>
                    <li>And a few special surprises…</li>
                <p class="note">
                    Note: Hotel, airfare and other travel expenses are not included in the ticket price.
                </p>
            </div>

            <button type="button" class="collapsible">WHAT IS YOUR REFUND POLICY?</button>
            <div class="content">
            <p>
                    Your completed registration includes the following:
                </p>
                <ul>
                    <li>Access to all speaker presentations and panels throughout both days of the conference</li>
                    <li>Breakfast, lunch and refreshments on both days</li>
                    <li>Complimentary Wifi access in the event area</li>
                    <li>And a few special surprises…</li>
                <p class="note">
                    Note: Hotel, airfare and other travel expenses are not included in the ticket price.
                </p>
            </div>

            <button type="button" class="collapsible">ARE MEALS PROVIDED?</button>
            <div class="content">
            <p>
                    Your completed registration includes the following:
                </p>
                <ul>
                    <li>Access to all speaker presentations and panels throughout both days of the conference</li>
                    <li>Breakfast, lunch and refreshments on both days</li>
                    <li>Complimentary Wifi access in the event area</li>
                    <li>And a few special surprises…</li>
                <p class="note">
                    Note: Hotel, airfare and other travel expenses are not included in the ticket price.
                </p>
            </div>

        </div>

    </section>

<!-- Schedule Section -->
    <section class="schedule">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/schedule/schedule-icon.png" alt="Schedule image" class="icon-img">

        <div class="parallelogram">
        <h2 class="section-title">Schedule</h2>
        </div>

        <div class="schedule-tabs">
            <div class="tab-button-container">
                <button class="tab-button" onclick="openTab(event, 'day1')">Day 1</button>
                <button class="tab-button" onclick="openTab(event, 'day2')">Day 2</button>
            </div>

            <div id="day1" class="tab-content">
                <p>Content for Day 1</p>
                <!-- schedule day 1 repeater fields -->
                <?php if (have_rows('schedule_day_1')): ?>
        <div class="schedule-grid">
            <?php while (have_rows('schedule_day_1')): the_row();
                    $time          = get_sub_field('time');
                    $session       = get_sub_field('session');
                    $speaker_name  = get_sub_field('speaker_name');
                    $speaker_photo = get_sub_field('speaker_photo');
                ?>
			                <div class="schedule-card">
			                    <p class="schedule-time"><?php echo esc_html($time); ?></p>
			                    <h3 class="schedule-session"><?php echo esc_html($session); ?></h3>
			                    <p class="schedule-speaker"><?php echo esc_html($speaker_name); ?></p>
			                    <?php if ($speaker_photo): ?>
			                        <img src="<?php echo esc_url($speaker_photo['url']); ?>"
			                             alt="<?php echo esc_attr($speaker_photo['alt']); ?>"
			                             class="schedule-speaker-photo" />
			                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>No schedule available for Day 1.</p>
    <?php endif; ?>
            </div>

            <div id="day2" class="tab-content" style="display:none;">
                <p>Content for Day 2</p>
                <!-- schedule day 2 repeater fields -->
                <?php if (have_rows('schedule_day_2')): ?>
        <div class="schedule-grid">
            <?php while (have_rows('schedule_day_2')): the_row();
                    $time          = get_sub_field('time');
                    $session       = get_sub_field('session');
                    $speaker_name  = get_sub_field('speaker_name');
                    $speaker_photo = get_sub_field('speaker_photo');
                ?>
			                <div class="schedule-card">
			                    <p class="schedule-time"><?php echo esc_html($time); ?></p>
			                    <h3 class="schedule-session"><?php echo esc_html($session); ?></h3>
			                    <p class="schedule-speaker"><?php echo esc_html($speaker_name); ?></p>
			                    <?php if ($speaker_photo): ?>
			                        <img src="<?php echo esc_url($speaker_photo['url']); ?>"
			                             alt="<?php echo esc_attr($speaker_photo['alt']); ?>"
			                             class="schedule-speaker-photo" />
			                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>No schedule available for Day 2.</p>
    <?php endif; ?>
            </div>
        </div>
    </section>

    <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
        endif;
    ?>
</main>
