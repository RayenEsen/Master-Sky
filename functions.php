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


function register_menus()
{
    $locations = array(
        'primary' => 'Navbar'
    );
    register_nav_menus($locations);
}

add_action('init', 'register_menus');



class Custom_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        // No <ul> for submenu levels
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        // No </ul> for submenu levels
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // Remove automatic 'active' class assignment
        $class_names = '';
        
        $output .= sprintf(
            '<a href="%s" class="%s">%s</a>',
            esc_url($item->url),
            esc_attr($class_names),
            esc_html($item->title)
        );
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "\n";
    }
}


?>
