<?php get_header('principal'); ?>

<main id="page-editais" class="container">
  <section id="breadcrumbs">Você está em: <span>Editais</span></section>
  <h1>Editais</h1>

  <div id="filtros">
    <div id="aplicados"></div>
  </div>

  <ul id="editais" class="content">
    <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'posts_per_page' => 2,
        'paged' => $paged,
        'post_type' => 'editais',
    );

    $editais = new WP_Query($args);

    if ($editais->have_posts()) :
      ?>
      <?php while ($editais->have_posts()) : $editais->the_post(); ?>	
        <li>
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3><!--
          --><p class="atribuicao"><?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?></p><!--
          --><p class="tipo-de-curso"><?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?></p><!--
          --><p class="curso"><?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?></p>
        </li>
      <?php endwhile; ?>
    </ul>

    <div id="postsNav">  
      <div class="nav-right"><?php next_posts_link('Editais antigos  >', $editais->max_num_pages); ?></div>
      <div class="nav-left"><?php previous_posts_link('<  Editais recentes', $editais->max_num_pages); ?></div>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php esc_html_e('Não há editais cadastrados.'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>