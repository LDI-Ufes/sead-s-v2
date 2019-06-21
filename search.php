<?php get_header('principal'); ?>

<main id="conteudoPrincipal" class="page container pagPesquisa">
  <section class="breadcrumb">Você está em: <span>Resultado de pesquisa</span></section>
  <?php
  global $query_string;
  wp_parse_str($query_string, $search_query);
  $search = new WP_Query($search_query);
  ?>

  <h1>Resultados de pesquisa para:<span> <?php echo get_search_query() ?></span></h1>
  <section id="resultados">
    <?php if ($search->have_posts()) : while ($search->have_posts()) : $search->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">> <?php the_title(); ?></a> 

        <?php
        if (get_post_type() !== 'page') {
          echo '<span> em <strong>' . get_post_type_object(get_post_type())->labels->name . '<strong></span>';
        }
        ?>

        <?php if (has_excerpt()) { ?>
          <p><?php the_excerpt() ?></p>
        <?php } else { ?>
          <p><?php echo wp_trim_words(strip_shortcodes(get_the_content()), 38, ' [...]'); ?></p>
      <?php } ?>
      </li>

      <?php endwhile; ?> 
      <div id="paginacao">  
        <?php
        the_posts_pagination(array(
            'prev_text' => __('<', 'textdomain'),
            'next_text' => __('>', 'textdomain')
        ));
        ?>
      </div>

      <?php wp_reset_postdata(); ?>

    <?php else : ?>
      <p>Sua pesquisa não encontrou resultados.<br>Confira se digitou corretamente ou busque por termos similares.</p>
    <?php endif; ?> 

  </section>
</main>

<?php get_footer(); ?>