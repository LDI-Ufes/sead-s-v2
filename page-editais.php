<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editais | Sead Ufes</title>

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/css/page-editais.css">
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,600,700,700i" rel="stylesheet">  <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <?php include 'components/barra-acessibilidade.php' ?>
        <?php include 'components/barra-brasil.php' ?>
        <?php include 'components/topoPrincipal.php' ?>
      </header>
      
      <main>
          <section id="breadcrumbs">Você está em: <span>Editais</span></section>
          <h1>Editais</h1>
          
          <div id="filtros">
              <div id="aplicados"></div>
          </div>
          
          <ul id="editais" class="content">
              <li>
                  <h3><a href="">Edital 003/2018</a></h3><!--
                  --><p class="atribuicao">Tutor Presencial</p><!--
                  --><p class="tipo-de-curso">Graduação</p><!--
                  --><p class="curso">Licenciatura em Pedagogia</p><!--
                  --><p class="finalizacao">Finalização em 11/11/2018</p><!--
                  --><p class="status">aberto</p>
              </li>
              <li>
                  <h3><a href="">Edital 003/2018</a></h3><p class="atribuicao">Professor Orientador (TCC)</p><p class="tipo-de-curso">Aperfeiçoamento</p><p class="curso">Oratória, transversalidade e didátida da fala para formação de professores</p><p class="finalizacao">Finalização em 11/11/2018</p><p class="status">encerrado</p>
              </li>
              <li>
                  <h3><a href="">Edital 003/2018</a></h3><!--
                  --><p class="atribuicao">Tutor a Distância</p><!--
                  --><p class="tipo-de-curso">Graduação</p><!--
                  --><p class="curso">Licenciatura em Pedagogia</p><!--
                  --><p class="finalizacao">Finalização em 11/11/2018</p><!--
                  --><p class="status">aberto</p>
              </li>

                
            <?php
            if ( get_query_var('paged') ) $paged = get_query_var('paged');  
            if ( get_query_var('page') ) $paged = get_query_var('page');

            $editais = new WP_Query( array( 'post_type' => 'edital', 'paged' => $paged ) );

            if ( $editais->have_posts() ) : ?>
                    <?php while ( $editais->have_posts() ) : $editais->the_post(); ?>	
                        <li>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <!-- show pagination here -->
            <?php else : ?>
                    <p><?php esc_html_e( 'Não há editais cadastrados.' ); ?></p>
            <?php endif; ?>
          </ul>
          
          
      </main>
      
      <?php include 'components/rodape.php' ?>
      
    <script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/altoContraste.js"></script>
  </body>
</html>