<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editais - Sead Ufes</title>

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/css/edital.css">
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,500,600,700,700i" rel="stylesheet">  <!-- Conferir necessidade de variações -->
    <link <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <?php include 'components/barra-acessibilidade.php' ?>
        <?php include 'components/barra-brasil.php' ?>
        <?php include 'components/topoPrincipal.php' ?>
      </header>
      
      <main>
        <!--Inserir conteúdo-->
        <section id="breadcrumbs">Você está em: <a href="/sitiosead/editais">Editais</a> > <span><?php the_title(); ?></span></section>
        <h1><?php the_title(); ?></h1>
        <section id="informacoes">
            <div>
                <em>Curso:</em> Licenciatura em Pedagogia ou um nome Grande mesmo que chegue a passar para segunda linha ou mesmo terceira linha<br>
                <em>Formação/nível:</em> Graduação Licenciatura em Pedagogia<br>
                <em>Atribuição:</em> Tutor presencial<br>
            </div><!--
            --><div>
            <em class="descricao">Descrição:</em> Edital de seleção para o provimento de uma vaga existente para tutor a presencial para o curso de licenciatura em pedagogia séries iniciais na modalidade a distância.<br>
            </div>
        </section>
        <section id="anexos" class="secao-edital">
            <h2>Anexos</h2>
            <ul>
                <li>Edital 001/2017, publicado em 13/02/2017</li>
                <li><a href=""><i class="fas fa-file-download"></i>Edital 001/2017 - errata, publicado em 13/02/2017</a></li>
                <li><a href=''><i class="fas fa-file-download"></i>Resultado parcial da etapa, publicado em 13/02/2017</a></li>
            </ul>
        </section>
        
        <section id="inscricao" class="secao-edital">
            <h2>Inscrição</h2>
            Inscrições, retificações e resultados deste edital estão disponíveis no Sistema de Seleção.<br>
            <a role="button" href='http://selecao.neaad.ufes.br/visao/login.php'>Acessar Sistema de Seleção</a>
        </section>
      </main>
          
    <script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/altoContraste.js"></script>
  </body>
</html>