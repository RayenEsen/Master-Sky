<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Sky Navbar</title>
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

        <!-- Navigation links -->
        <div class="nav-links">
            <a href="#home" class="active">ACCUEIL</a>
            <a href="#about">ABOUT US</a>
            <a href="#products">PRODUCTS</a>
            <a href="#realisation">RÉALISATION</a>
            <a href="#innovation">INNOVATION & SUSTAINABILITY</a>
            <a href="#contact">CONTACT</a>
        </div>

        <!-- Quote button -->
        <a href="#quote" class="quote-btn">
            <span>DEMANDER UN DEVIS</span> ➔
        </a>

    </nav>
    <?php wp_footer(); ?>


</body>
</html>
