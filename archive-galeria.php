<?php get_header('blog'); ?>

<main id="page-galeria" class="container page">
  <section class="breadcrumb">Você está em: <a href="/sitiosead/blog">Blog</a><i class="fas fa-greater-than"></i><span>Galeria de Imagens</span></section>
  <h1>Galeria de Imagens</h1>

  <section id="filtros">
    <span>Navegue por ano: </span>

    <?php
    $terms = get_terms(array(
        'taxonomy' => 'ano',
        'oderby' => 'name',
        'order' => 'DESC'
            ));

    $ano = isset($_GET['ano']) ? filter_var($_GET['ano'], FILTER_SANITIZE_URL) : '2018';

    foreach ($terms as $term) {
      $ativo = ($ano == $term->name) ? ' class="active" ' : '';
      echo '<a id="' . $term->name . '" href="/sitiosead/galeria/?ano=' . $term->name . '" ' . $ativo . ' >' . $term->name . '</a>';} 
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

    $eventos = new WP_Query($args);
    
    if ($eventos->have_posts()) : while ($eventos->have_posts()) : $eventos->the_post(); ?>
    
        <li id="evento-<?php the_ID(); ?>">
          <div><span><?php echo get_the_date('j \d\e F \d\e Y'); ?></span></div>
          <h2><?php the_title(); ?></h2>

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
  $('.abrirTodas').click(function () {
    $(this).siblings().find('a:nth-of-type(n+5)').slideToggle('fast').toggleClass("visivel");

    if ($(this).text() === "Abrir todas")
      $(this).text("Mostrar menos");
    else
      $(this).text("Abrir todas");
  });
</script>