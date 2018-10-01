<?php get_header('blog'); ?>

<main id="page-blog">
    <div class="container">
    <ul id="posts">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li class="blog-post">
            <div class="blog-post-header">
              <span>Seminários</span>
      <?php the_post_thumbnail(); ?>
              <div class="post-date"><?php the_date('j \d\e F \d\e Y'); ?></div>
            </div>
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_trim_words(get_the_content(), 40, ' [...]'); ?></p>
          </li>
    <?php endwhile; ?>
        <div id="postsNav">  
          <div class="nav-right"><?php next_posts_link('Notícias antigas  >'); ?></div>
          <div class="nav-left"><?php previous_posts_link('<  Notícias recentes'); ?></div>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>              
    </ul>

    <aside>
  <?php include 'components/ultimos-editais.php' ?>

      <section id="informativo">
        <h2><span>Informativo #17</span></h2>
        <ul>
          <li><i class="fas fa-angle-right"></i><a>Curso de Licenciatura em Filosofia EaD/Ufes recebe nota máxima 5 do Inep/MEC</a></li>
          <li><i class="fas fa-angle-right"></i><a>Curso de Especialização em Educação em Direitos Humanos realiza doação de livros para unidades do IASES</a></li>
        </ul>
        <label>Receba as notícias mais importantes direto no seu e-mail, cadastre-se:</label><br>
        <form><input type="email" placeholder="Digite seu e-mail"><input type="submit" value="Enviar"></form>
      </section>

      <button class="social-media"><span>Siga-nos também no facebook</span><i class="fab fa-facebook-f"></i></button>  
    </aside>
    </div>
    
  <section id="galeria">
    <div class="container">
      <h2>Galeria de Fotos</h2>
      <ul>
        <?php                          
            $args = array(
                'post_type' => 'galeria', 
                'posts_per_page' => 3
            );
            $eventos = new WP_Query( $args ); if ($eventos->have_posts()) : ?>  
                <?php while ($eventos->have_posts()) : $eventos->the_post(); ?>	
                    <li>
                        <h3><span><?php the_title(); ?></span><?php echo strip_tags(get_the_excerpt()); ?></h3>
                        <?php the_content() ?>
                        <a class="ver-mais" href=""><span>Ver mais</span></a>
                    </li>
                <?php endwhile; ?>
        <?php endif; ?> 
      </ul>
      <a role="button" href="/sitiosead/galeria">Confira os eventos antigos</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>