<?php

function register_styles1()
{
    wp_enqueue_style('MainStyles', get_template_directory_uri() . "/style.css", array(), rand(111, 9999), 'all');
    wp_enqueue_style('NavbarStyles', get_template_directory_uri() . "/assets/css/Navbar.css", array(), rand(111, 9999), 'all');
    wp_enqueue_style('FooterStyles', get_template_directory_uri() . "/assets/css/Footer.css", array(), rand(111, 9999), 'all');
    wp_enqueue_style('TailwindCSS', 'https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css', array(), rand(111, 9999), 'all'); // Adding Tailwind CSS with random version
}

add_action('wp_enqueue_scripts', 'register_styles1');

function register_scripts1()
{
    wp_enqueue_script('NavbarScript', get_template_directory_uri() . "/assets/js/Navbar.js", array(), rand(111, 9999), true);
}

add_action('wp_enqueue_scripts', 'register_scripts1');
?>
