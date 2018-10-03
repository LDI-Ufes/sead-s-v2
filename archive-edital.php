<?php get_header('principal'); ?>

<main id="page-editais" class="container">
  <section id="breadcrumbs">Você está em: <span>Editais</span></section>
  <h1>Editais</h1>

  <div id="filtros">
    <div id="aplicados">
      <span>Artes Visuais<button class="excluir-filtro"><i class="fas fa-times"></i></button></span>
      <span>Artes Visuais<button class="excluir-filtro"><i class="fas fa-times"></i></button></span>
      <span>Artes Visuais<button class="excluir-filtro"><i class="fas fa-times"></i></button></span>
      <span>Artes Visuais<button class="excluir-filtro"><i class="fas fa-times"></i></button></span>
      
    </div>
    <div id="seletores">
      <button id="mostra-seletores">Exibir filtros</button>
      <ul id="cursos" class="lista-filtros">
        <button class="exibe-filtros">Curso</button>
        <?php 
          $cursos = get_terms( array(
              'taxonomy' => 'curso',
              'oderby' => 'name',
              'order' => 'ASC'
          ) );

          foreach( $cursos as $curso ) {
              echo '<li>
                  <input class="filtro" type="checkbox" value=" '. $curso->name .' " id="filter-'. $curso->name .'" />
                  <label for="filter-'. $curso->name .'">'. $curso->name .'</label>
              </li>';
          }
        ?>
      </ul><!--

      --><ul id="atribuicoes" class="lista-filtros">
       <button class="exibe-filtros">Atribuição</button>
        <?php 
          $atribuicoes = get_terms( array(
              'taxonomy' => 'atribuicao',
              'oderby' => 'name',
              'order' => 'ASC'
          ) );

          foreach( $atribuicoes as $atribuicao ) {
              echo '<li>
                  <input class="filtro" type="checkbox" value=" '. $atribuicao->name .' " id="filter-'. $atribuicao->name .'" />
                  <label for="filter-'. $atribuicao->name .'">'. $atribuicao->name .'</label>
              </li>';
          }
        ?>
      </ul><!--

      --><ul id="tipo-de-curso" class="lista-filtros">
        <button class="exibe-filtros">Tipo de curso</button>
        <li><input class="filtro" type="checkbox"></li>
        <li><input class="filtro" type="checkbox"></li>
      </ul><!--

      --><ul id="ano" class="lista-filtros">
        <button class="exibe-filtros">Ano</button>
        <li><input class="filtro" type="checkbox"></li>
        <li><input class="filtro" type="checkbox"></li>      
      </ul>
    </div> <!-- seletores -->
  </div> <!-- filtros -->

  <ul id="editais" class="content">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="edital" data-curso="<?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?>" data-atribuicao="<?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?>" data-tipo="<?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?>">
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3><!--
          --><p class="atribuicao"><?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?></p><!--
          --><p class="tipo-de-curso"><?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?></p><!--
          --><p class="curso"><?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?></p>
        </li>
      <?php endwhile; ?>
    </ul>

    <div id="postsNav">  
      <div class="nav-right"><?php next_posts_link('Editais antigos  >'); ?></div>
      <div class="nav-left"><?php previous_posts_link('<  Editais recentes'); ?></div>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php esc_html_e('Não há editais cadastrados.'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>

<script>
//  $(".filtro").click(function(){
//    
//    
//      var selectSize = $(this).val();
//      filter(selectSize);
//  });
//  function filter(e){
//  $('.edital').hide()
//      .filter('[data-curso*="'+ e +'"]')
//      .show(); // show the filtered elements
//  }

$(".exibe-filtros").click(function(){
  $(this).parent().toggleClass('expandido');
});

$("#mostra-seletores").click(function(){
  $(this).siblings().toggleClass('expandido-mobile');
  
  if ($(this).text() === "Exibir filtros")
    $(this).text("Ocultar filtros");
  else
    $(this).text("Exibir filtros");
});

</script>