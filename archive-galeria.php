<?php get_header('blog'); ?>

<main id="page-galeria" class="container">
  <section id="breadcrumbs">Você está em: <a href="/sitiosead/editais">Blog</a> > <span>Galeria de Imagens</span></section>
  <h1>Galeria de Imagens</h1>

  <section id="filtros"><span>Navegue por ano: </span><button>2015</button><button>2016</button><button>2017</button><button>2018</button></section>

  <ul id="eventos">
        <?php 
                            
            $args = array(
                'post_type' => 'galeria', 
                'tax_query' => array( 
                    array( 
                        'taxonomy' => 'ano',
                        'field' => 'slug', 
                        'terms' => '2018' 
                    ) 
                ) 
            );

            $eventos = new WP_Query( $args ); if ($eventos->have_posts()) : ?>  
      
            <?php while ($eventos->have_posts()) : $eventos->the_post(); ?>	
                <li>
                    <h2><span><?php the_title(); ?></span></h2>
                    
                    <p><?php the_excerpt(); ?></p>
                    
                    <ul class="imagens" id="<?php the_ID(); ?>">
                      <?php the_content() ?>
                    </ul>
                    
                    <button class="abrirTodas" onclick="show()">Abrir todas</button>
                </li>
                
                <script>;
                    function show(){
                        $('#<?php the_ID(); ?> img:nth-child(n+7)').toggleClass("visivel");
                    }
                </script>
            <?php endwhile; ?>            
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e('Não há eventos cadastrados.'); ?></p>
        <?php endif; ?>     
  </ul>
</main>

<?php get_footer(); ?>