<?php
// Include the header
get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the loop to display content
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_content(); // Important for Elementor
            }
        } else {
            echo '<p>Sorry, no content available.</p>';
        }
        ?>
    </main>
</div>

<?php 
// Include the footer
get_footer(); 
?>