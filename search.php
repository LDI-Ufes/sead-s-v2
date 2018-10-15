<?php get_header('principal'); ?>

<main id="pagPesquisa">
  <div class="container">
    <section class="breadcrumb">Você está em: <span>Resultado de pesquisa</span></section>
    <?php
      global $query_string;
      wp_parse_str( $query_string, $search_query );
      $search = new WP_Query( $search_query );
    ?>
    
    <h1>Resultados de pesquisa para:<span> <?php echo get_search_query() ?></span></h1>
    <section id="resultados">
    <?php if ( $search->have_posts() ) : while ( $search->have_posts() ) : $search->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">> <?php the_title(); ?></a> 
        
        <?php        
          if ( get_post_type() !== 'page' ) {
            echo '<span> em <strong>' . get_post_type_object( get_post_type() )->labels->name .'<strong></span>';
          } 
        ?>
        
        <?php if ( has_excerpt() ) { ?>
          <p><?php the_excerpt() ?></p>
        <?php } else { ?>
          <p><?php echo wp_trim_words(get_the_content(), 40, ' [...]'); ?></p>
        <?php } ?>
          
      </li>
    <?php endwhile; ?> 
    </section>
        <div id="postsNav">  
        <?php the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __( 'Anterior', 'textdomain' ),
          'next_text' => __( 'Próxima', 'textdomain' ),
        ) ); ?>
        </div>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>Sua pesquisa não encontrou resultados. Confira se digitou corretamente ou busque por termos similares.</p>
    <?php endif; ?> 

  </div>
</main>

<?php get_footer(); ?>