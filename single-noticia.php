<?php get_header('blog'); ?>
 
    <div id="primary" class="content-area">
 
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'noticia', get_post_format() );

        endwhile;
        ?>
 
    </div><!-- .content-area -->
 
<?php get_footer(); ?>