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

        <div class="nav-links">
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
            <span>DEMANDER UN DEVIS</span>
            <span class="circle-arrow">➔</span> <!-- Circle around the arrow -->
        </a>


    </nav>

    <header class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/CallToActionBackground.png');">
        <div ></div>
        <div class="content">
        <h1 class="CTATitle">- <span id="section-title"><?php the_title() ?></span> -</h1>
        <p class="styled-text2">Borem ipsum dolor sit amet, consectetur adipiscing <br> elit. Nunc vulputate.</p>
        </div>
    </header>
    <?php wp_footer(); ?>


</body>
</html>
