<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
//get_header(); ?>
 
    <div id="primary" class="content-area">
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'noticia', get_post_format() );

        endwhile;
        ?>
 
    </div><!-- .content-area -->
 
<?php // get_footer(); ?>