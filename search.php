<?php get_header('principal'); ?>

<main id="pagPesquisa">
  <div class="container">

    <?php
    $s = get_search_query();
    $args = array(
        's' => $s
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
      _e("<h1>Resultados de pesquisa para: " . get_query_var('s') . "</h1>");
      while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php
      }
    } else {
      ?>
      <h1>Nada encontrado</h1>
      <p>Desculpe, mas nada foi encontrado com seu termo de pesquisa. Por favor, tente novamente com alguma(s) palavra(s) diferente(s).</p>
    <?php } ?>

  </div>
</main>

<?php
get_footer();
