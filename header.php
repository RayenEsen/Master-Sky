<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Sky</title>
    <?php wp_head(); ?>
    <style>
        /* Your existing CSS here */
    </style>
</head>
<body>
    <nav class="navbar">
        <!-- Logo section -->
        <div class="logo"> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo1.jpg" alt="Master Sky Logo">
        </div>

        <!-- Hamburger menu icon for mobile view -->
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>


        <div class="nav-links" id="navLinks">
            
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => '',
                'items_wrap' => '%3$s', // Removes the <ul> wrapper
                'walker' => new Custom_Nav_Walker(), // Use the custom walker
            ));
            ?>
        </div>



        <a href="#quote" class="quote-btn" style="color : white">
            <span>REQUEST A QUOTE</span>
            <span class="circle-arrow">➔</span> <!-- Circle around the arrow -->
        </a>


    </nav>


    <?php 
// Check if the current page is not the homepage and is one of the specified pages
if (!is_front_page() && (is_page('about') || is_page('services') || is_page('contact us') || is_page('innovation-sustainability') || is_page('products') || is_page('realisation'))) : ?> 
    <header class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/CallToActionBackground.png');">
        <div></div>
        <div class="content">
            <h1 class="CTATitle"><span id="section-title"><?php the_title(); ?></span></h1>
            <p class="styled-text2">
                <?php
                if (is_page('about')) {
                    echo 'Discover the heart of our company: our story, mission, <br> and core values that drive us forward.';
                } elseif (is_page('services')) {
                    echo 'Explore our wide range of expert services designed to meet <br> your needs with the highest standards of quality.';
                } elseif (is_page('contact us')) {
                    echo 'Feel free to reach out to us for any inquiries, <br> feedback, or assistance. We are here to help!';
                } elseif (is_page('innovation-sustainability')) {
                    echo 'Learn about our commitment to innovation and sustainability, <br> driving us to create a better future for all.';
                } elseif (is_page('products')) {
                    echo 'Browse our diverse selection of high-quality products <br> tailored to your needs and expectations.';
                } elseif (is_page('realisation')) {
                    echo 'Discover the incredible projects and realisations we’ve completed, <br> showcasing our expertise and dedication.';
                }
                ?>
            </p>
        </div>
    </header>
<?php endif; ?> <!-- End the conditional check -->


    <?php wp_footer(); ?>


</body>
</html>
