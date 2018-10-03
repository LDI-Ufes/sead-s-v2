<?php get_header('blog'); ?>

<main id="page-galeria" class="container">
  <section id="breadcrumbs">Você está em: <a href="/sitiosead/blog">Blog</a> > <span>Galeria de Imagens</span></section>
  <h1>Galeria de Imagens</h1>

  <section id="filtros">
    <span>Navegue por ano: </span>
      
    <?php 
      $terms = get_terms( array(
        'taxonomy' => 'ano',
        'oderby' => 'name',
        'order' => 'DESC'
      ) );

      $ano = isset($_GET['ano']) ? filter_var($_GET['ano'], FILTER_SANITIZE_URL) : '2018';

      foreach( $terms as $term ) {
        $ativo = ($ano == $term->name) ? ' class="active" ' : '';

        echo '<a id="'.  $term->name .'" href="/sitiosead/galeria/?ano=' .  $term->name . '" '. $ativo .' >' . $term->name .'</a>';
      }
    ?>
  </section>

  <ul id="eventos">
    <?php                   
      $args = array(
          'post_type' => 'galeria', 
          'tax_query' => array( 
              array( 
                  'taxonomy' => 'ano',
                  'field' => 'slug', 
                  'terms' => $ano 
              ) 
          ) 
      );

      $eventos = new WP_Query( $args ); if ($eventos->have_posts()) : ?>  

        <?php while ($eventos->have_posts()) : $eventos->the_post(); ?>	
          <li id="evento-<?php the_ID(); ?>">
            <h2><span><?php the_title(); ?></span></h2>

            <p><?php the_excerpt(); ?></p>

            <ul class="imagens">
                <?php the_content() ?>

                <button class="abrirTodas" type="button">Abrir todas</button>
            </ul>                       
          </li>

        <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p><?php esc_html_e('Não há eventos cadastrados.'); ?></p>
    <?php endif; ?>     
  </ul>
</main>

<?php get_footer(); ?>

<script>
    $('.abrirTodas').click(e => {
      $(e.target.parentElement).find('a:nth-of-type(n+7)').toggleClass("visivel");
    });
</script>