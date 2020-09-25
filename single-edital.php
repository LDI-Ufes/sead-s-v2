<?php get_header('principal'); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <main id="conteudoPrincipal" class='container page single-edital'>
    <!--Inserir conteúdo-->
    <section class="breadcrumb">Você está em: <a href="<?php echo site_url(); ?>/editais">Editais</a><i class="fas fa-greater-than"></i><span><?php the_title(); ?></span></section>
    <h1>Edital <?php the_title(); ?></h1>

    <section id="informacoes">
      <div>
        <em>Curso: </em><?php echo strip_tags(get_the_term_list($post->ID, 'curso')); ?><br>
        <em>Formação/nível: </em><?php echo strip_tags(get_the_term_list($post->ID, 'tipo-de-curso')); ?><br>
        <em>Atribuição: </em><?php echo strip_tags(get_the_term_list($post->ID, 'atribuicao')); ?><br>
      </div>
      <div id="descricao">
        <em>Descrição: </em><?php the_excerpt(); ?><br>
      </div>
    </section>

    <?php
    $editalInfo = get_post_custom_values('info');

    if ($editalInfo != "") {
      echo "
        <section id='inscricao' class='secao-edital'>" .$editalInfo[0] . "
        </section>
      ";
    }
    ?>

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
          <a role='button' href=' " .$editalLink[0] . " ' target='_blank' title='Abrir o Sistema de Seleção em nova aba'>Acessar Sistema de Seleção</a>
        </section>
      ";
    }
    ?>
    
    <?php
    $editalForm = get_post_custom_values('edital-form');

    if ($editalForm != "") {
      echo "
        <section id='inscricao' class='secao-edital'>
          <h2>Inscrição</h2>
          <p>As inscrições podem ser realizadas pelo seguinte formulário:</p>
          <a role='button' href=' " .$editalForm[0] . " ' target='_blank' title='Abrir o formulário de inscrição em nova aba'>Formulário de Inscrição</a>
        </section>
      ";
    }
    ?>

    <?php
    $editalFormInfo = get_post_custom_values('edital-form-info');

    if ($editalFormInfo != "") {
      echo "
        <section id='inscricao' class='secao-edital'>
          <h2>Inscrição</h2>
          <p> A partir da 2ª prorrogação do Edital nº 002/2020 - para Professores Bolsistas CAPES UAB para o Curso de Especialização em Gestão em Saúde as inscrições serão realizadas pelo formulário contido no link abaixo. <br><br>
 
Informamos aos interessados que se pode optar por se inscrever em mais de uma disciplina, bastando marcar sua opção no formulário. Não é preciso enviar uma documentação para cada disciplina. <br><br>
 
Aos candidatos já inscritos em disciplinas e que tenham interesse em concorrer à vaga de outra, basta preencher o formulário, não sendo necessário o envio de nova documentação.</p>
          <a role='button' href=' " .$editalFormInfo[0] . " ' target='_blank' title='Abrir o formulário de inscrição em nova aba'>Formulário de Inscrição</a>
        </section>
      ";
    }
    ?>

  </main>

<?php endwhile; ?>

<?php  get_footer(); ?>
