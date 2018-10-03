<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://cdn.eadufes.org/icone/sead.png">
    <link rel="icon" type="image/svg+xml" href="https://cdn.eadufes.org/icone/sead.svg">

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <?php include 'components/barra-acessibilidade.php' ?>
      <?php include 'components/barra-brasil.php' ?>

      <div id="topoPrincipal" class="topo">
        <section class="caixa">
          <a class="marca" href="<?php echo site_url(); ?>" title="Ir para início do sítio">
            <?php echo file_get_contents(get_template_directory_uri() . '/svg/sead-ufes-extenso.svg'); ?>
          </a>
          <span class="btoMenu">Menu</span>
          <nav id="menuPrincipal" class="menu" role="navigation">
            <ul class="menuLista">
              <li><a href="/sitiosead">Início</a></li>
              <li class="temSubmenu">
                <span>Ensino <i class="fas fa-chevron-down"></i></span>
                <ul class="menuSuspenso">
                  <li><a href="">Como é a EaD na Ufes?</a></li>
                  <li><a href="">A Secretaria</a></li>
                  <li><a href="">Contatos</a></li>
                </ul>
              </li>
              <li><a href="/sitiosead/editais">Editais</a></li>
              <li><a href="">Cursos</a></li>
              <li><a href="/sitiosead/polos">Polos</a></li>            
              <li><a href="/sitiosead/blog">Notícias</a></li>
            </ul>
          </nav>
          <?php get_search_form() ?>
        </section>
      </div>
    </header>