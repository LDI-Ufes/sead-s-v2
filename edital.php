<?php get_header('principal'); ?>

<main id="edital" class='container page'>
  <!--Inserir conteúdo-->
  <section class="breadcrumb">Você está em: <a href="/sitiosead/editais">Editais</a><i class="fas fa-greater-than"></i><span><?php the_title(); ?></span></section>
  <h1>Edital <?php the_title(); ?></h1>

  <section id="informacoes">
    <div style="background:red">
      <em>Curso: </em><?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?><br>
      <em>Formação/nível: </em><?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?><br>
      <em>Atribuição: </em><?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?><br>
    </div>
    <div id="descricao" style="background:gray">
      <em>Descrição: </em><?php the_excerpt(); ?><br>
    </div>
  </section>

  <section id="anexos" class="secao-edital">
    <h2>Anexos</h2>
    <?php the_content(); ?>
  </section>

  <?php
  $editalLink = get_post_custom_values('edital-link');

  if ($editalLink != "") {
    echo "
      <section id='inscricao' class='secao-edital'>
        <h2>Inscrição</h2>
        <p>Inscrições, retificações e resultados deste edital estão disponíveis no Sistema de Seleção.</p>
        <a role='button' href=' " .$editalLink[0] . " ' target='_blank'>Acessar Sistema de Seleção</a>
      </section>
    ";
  }
  ?>

</main>

<?php get_footer(); ?>
