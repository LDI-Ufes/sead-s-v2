<?php get_header(); ?>

<main id="conteudoPrincipal" class="page-blog">
  <div class="container colunas">
    <ul id="posts" class="coluna1">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li class="blog-post">
             <a href="<?php the_permalink() ?>" title="Ir para notícia: <?php the_title(); ?>"><div class="blog-post-header">
              <span><?php echo strip_tags(get_the_term_list($post->ID, 'tag')); ?></span>
             <?php the_post_thumbnail(); ?>
              <div class="post-date"><?php echo get_the_date('j \d\e F \d\e Y'); ?></div>
               </div></a>
            <h3><a href="<?php the_permalink() ?>" title="Ir para notícia: <?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_trim_words( strip_shortcodes( get_the_content() ), 40, ' [...]'); ?></p>
          </li>
      <?php endwhile; ?>
      <div class="paginacao">  
        <?php
        the_posts_pagination(array(
            'prev_text' => __('< Anterior', 'textdomain'),
            'next_text' => __('Próxima >', 'textdomain')
        ));
        ?>
      </div>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p><?php esc_html_e('Nenhuma notícia cadastrada'); ?></p>
      <?php endif; ?>
    </ul>

    <aside class="coluna2">
      <?php include 'components/ultimos-editais.php' ?>

      <section id="informativo">
        <h2><span>Informativos</span></h2>
        <label>Receba as notícias mais importantes, <wbr>cadastre seu <wbr>e-mail:</label><br>
        <?php if ( dynamic_sidebar('cadastro_informativo') ) : else : endif; ?>
      </section>

      <a class="social-media" href="https://www.facebook.com/sead.ufes/" title="Abrir a página da Sead no Facebook em nova aba"><span>Siga-nos também no facebook</span><i class="fab fa-facebook-f"></i></a>
    </aside>
  </div>

  <section id="galeria">
    <div class="container">
      <h2>Galeria de Fotos</h2>
      <ul>
        <?php
            $args = array(
                'post_type' => 'galeria',
                'posts_per_page' => 2
            );
            $eventos = new WP_Query( $args ); if ($eventos->have_posts()) : ?>
                <?php while ($eventos->have_posts()) : $eventos->the_post(); ?>
                    <li>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content() ?>
                        <a class="ver-mais" href="<?php echo site_url(); ?>/fotos#evento-<?php the_ID(); ?>" title="Ver mais fotos do evento na Galeria de Fotos"><span>Ver mais</span></a>
                    </li>
                <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <a role="button" href="<?php echo site_url(); ?>/fotos" title="Ir para a Galeria de Fotos">Confira os eventos antigos</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
