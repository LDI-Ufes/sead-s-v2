<?php
/**
 * The template for displaying all single posts and attachments
 */
 
//get_header(); ?>
 
    <div id="primary" class="content-area">
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            get_template_part( 'edital', get_post_format() );

        endwhile;
        ?>
 
    </div><!-- .content-area -->
 
<?php // get_footer(); ?>