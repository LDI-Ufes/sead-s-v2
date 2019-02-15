<?php get_header('blog'); ?>

<main id="conteudoPrincipal" class="container page page-galeria">
  <section class="breadcrumb">Você está em: <a href="<?php echo site_url(); ?>/blog">Blog</a><i class="fas fa-greater-than"></i><span>Galeria de Imagens</span></section>
  <h1>Galeria de Imagens</h1>

  <section id="filtros">
    <span>Navegue por ano: </span>

    <?php
    $terms = get_terms(array(
        'taxonomy' => 'ano-evento',
        'oderby' => 'name',
        'order' => 'DESC'
            ));

    $ano = isset($_GET['ano-evento']) ? filter_var($_GET['ano-evento'], FILTER_SANITIZE_URL) : '2018';

    foreach ($terms as $term) {
        $ativo = ($ano == $term->name) ? ' class="active" ' : '';
        echo '<a id="' . $term->name . '" href="<?php echo site_url(); ?>/galeria/?ano-evento=' . $term->name . '" ' . $ativo . ' >' . $term->name . '</a>';
    }
    ?>
  </section>

  <ul id="eventos">
    <?php
    $args = array(
      'post_type' => 'galeria',
      'tax_query' => array(
        array(
          'taxonomy' => 'ano-evento',
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
    $(this).siblings().find('a:nth-of-type(n+5)').slideToggle('fast');

    if ($(this).text() === "Abrir todas")
      $(this).text("Mostrar menos");
    else
      $(this).text("Abrir todas");
  });


  // Elegibilidade do 'Abrir Todas'
  let galeriasQuantidade = $('ul.imagens').length;

  for (i = 0; i < galeriasQuantidade; i++) {

    let galeriaX = $('ul.imagens')[i];
    let galeriaXQuantidade = $(galeriaX).find('img').length;

    if (galeriaXQuantidade >= 4) {
      $(galeriaX).find('.abrirTodas').fadeIn(300).css('display', 'block');
    }
  }
  
  // aplicando lightbox com o lity
  $(document).ready(function(){
    $('#eventos').find('a').attr('data-lity', '');
  });

</script>
