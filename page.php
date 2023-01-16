<?php 
/*
 * Template Name: Page with Content
 */
?>
<?php get_header(); ?>

    <main id="main" class="main">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->

<?php
get_footer();
