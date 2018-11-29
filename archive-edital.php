<?php get_header('principal'); ?>

<main id="conteudoPrincipal" class="container page page-editais">
  <section class="breadcrumb">Você está em: <span>Editais</span></section>
  <h1>Editais</h1>

  <div id="filtros">

    <div id="aplicados">
    </div>

    <div id="seletores">
      <button id="exibe-seletores">Exibir filtros</button>

      <div id="ano" class="seletor" data-tipo='ano'>
        <button class="exibe-filtros">Ano</button>
        <ul>
          <?php
          $anos = get_terms(array(
              'taxonomy' => 'ano',
              'oderby' => 'name',
              'order' => 'DESC'
                  ));

          foreach ($anos as $ano) {
              echo '<li>'
            . '<input class="filtro" type="checkbox" id="filter-' . $ano->name . '" data-type="ano" data-id="' . $ano->name . '" /><label for="filter-' . $ano->name . '">' . $ano->name . '</label></li>';
          }
          ?>
        </ul>
      </div>

      <div id="atribuicoes" class="seletor" data-tipo='atribuicao'>
        <button class="exibe-filtros">Atribuição</button>
        <ul>
          <?php
          $atribuicoes = get_terms(array(
              'taxonomy' => 'atribuicao',
              'oderby' => 'name',
              'order' => 'ASC'
                  ));

          foreach ($atribuicoes as $atribuicao) {
              echo '<li>'
            . '<input class="filtro" type="checkbox" id="filter-' . $atribuicao->name . '" data-type="atribuicao" data-id="' . $atribuicao->name . '" /><label for="filter-' . $atribuicao->name . '">' . $atribuicao->name . '</label></li>';
          }
          ?>
        </ul>
      </div>

      <div id="tipo-de-curso" class="seletor" data-tipo='tipo-de-curso'>
        <button class="exibe-filtros">Tipo de curso</button>
        <ul>
          <?php
          $tipos = get_terms(array(
              'taxonomy' => 'tipo-de-curso',
              'oderby' => 'name',
              'order' => 'ASC'
                  ));

          foreach ($tipos as $tipo) {
              echo '<li>'
            . '<input class="filtro" type="checkbox" id="filter-' . $tipo->name . '" data-type="formacao" data-id="' . $tipo->name . '" /><label for="filter-' . $tipo->name . '">' . $tipo->name . '</label></li>';
          }
          ?>
        </ul>
      </div>

      <div id="cursos" class="seletor" data-tipo='curso'>
        <button class="exibe-filtros">Curso</button>
        <ul>
          <?php
          $cursos = get_terms(array(
              'taxonomy' => 'curso',
              'oderby' => 'name',
              'order' => 'ASC'
                  ));

          foreach ($cursos as $curso) {
              echo '<li>'
            . '<input class="filtro" type="checkbox" id="filter-' . $curso->name . '" data-type="curso" data-id="' . $curso->name . '" /><label for="filter-' . $curso->name . '">' . $curso->name . '</label></li>';
          }
          ?>
        </ul>
      </div>

      <div class='seletor' id='limpar'>
        <button id="limpaFiltros">Limpar</button>
      </div>


    </div> <!-- seletores -->
  </div> <!-- filtros -->

  <ul id="editais" class="content">

    <div class="titulos"><span>Edital</span><span>Atribuição</span><span>Tipo de curso</span><span>Curso</span></div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li class="edital edital-item" data-curso="<?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?>" data-atribuicao="<?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?>" data-formacao="<?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?>" data-ano="<?php echo strip_tags(get_the_term_list($post->ID, 'ano')); ?>">
          <h3><a href="<?php the_permalink() ?>"><span>Edital </span><?php the_title(); ?></a></h3>
          <p class="atribuicao"><?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?></p>
          <p class="tipo-de-curso"><?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?></p>
          <p class="curso"><?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?></p>
        </li>
      <?php endwhile; ?>

    </ul>

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
    <p><?php esc_html_e('Não há editais cadastrados.'); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?>

<script>

  $(".exibe-filtros").click(function () {
    $(this).siblings('ul').slideToggle();
    $(this).parent().toggleClass('expandido').siblings().removeClass('expandido').find('ul').slideUp();
  });

  // If click outside dropdown-menu opened
  $(document).click(function() {
    if (!$(event.target).closest('.exibe-filtros').length) {
      $('.seletor').removeClass('expandido').find('ul').slideUp(300);
    }
  });


  $("#exibe-seletores").click(function () {
    $(this).siblings().slideToggle();

    if ($(this).text() === "Exibir filtros")
      $(this).text("Ocultar filtros");
    else
      $(this).text("Exibir filtros");
  });

  // Filtro

  $(".filtro").on("click", () => atualizaSelecao());

  $("#limpaFiltros").on("click", function () {
    let $stats = $(".filtro:checked");

    for (item of $stats)
      item.checked = false;
    $("#editais li").show();

    $("#aplicados > .excluir-filtro").remove();
    atualizaSelecao();
  });


  const criaTag = (seletor, texto) => {
    $("#aplicados").append(
            $(`<div class="seletores excluir-filtro" data-seletor="${seletor}">
        <a class="removeTag" href="#">${texto}<i class="fas fa-times"></i></a>
      </div>`)
            );

    $(".removeTag").on("click", function () {
      let $stats = $(".filtro:checked");

      for (item of $stats) {
        if ($(item).data("id") === $(this.parentElement).data("seletor")) {
          item.checked = false;
          break;
        }
      }

      $(this.parentElement).remove();
      atualizaSelecao();
    });
  };

  const zeraTags = () => {
    $("#aplicados > div").remove();
  };


  const atualizaSelecao = () => {
    let $stats = $(".filtro:checked");
    let $items = $("#editais li");

    zeraTags();
    $items.show();

    if ($stats.length == 0)
      return;

    var $vstats = $.map($stats, function (o) {
      return $(o).data("id");
    });

    $stats.each(function () {
      var $stat = $(this);
      $items
              .filter(function () {
                return $vstats.indexOf($(this).data($stat.data("type"))) < 0;
              })
              .hide();

      criaTag($(this).data("id"), this.parentElement.textContent);
    });
  };

</script>
