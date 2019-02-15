<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://cdn.eadufes.org/icone/sead.png">
    <link rel="icon" type="image/svg+xml" href="https://cdn.eadufes.org/icone/sead.svg">

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <?php include 'components/barra-acessibilidade.php' ?>
      <?php include 'components/barra-brasil.php' ?>

      <div id="topoBlog" class="topo">
        <section class="caixa">
          <a id="enderecoBlog" class="marca" href="<?php echo site_url(); ?>/blog" title="Ir para início do Blog">
            <?php include 'svg/nossoBlog.svg'; ?>
          </a>
          <span class="btoMenu">Menu</span>
          <nav id="menuPrincipal" class="menu" role="navigation">
            <ul class="menuLista">
              <li class="temSubmenu">
                <span>Portal Sead <i class="fas fa-chevron-down"></i></span>
                <ul class="menuSuspenso">
                  <li><a href="<?php echo site_url(); ?>" title="Ir para página inicial">Início</a></li>
                  <li class="temSubmenu">
                    <span>Ensino <i class="fas fa-chevron-down"></i></span>
                    <ul class="menuSuspenso">
                      <li><a href="<?php echo site_url(); ?>/ead-na-ufes" title="Ir para Ensino - Como é a Ead na Ufes?">Como é a EaD na Ufes?</a></li>
                      <li><a href="<?php echo site_url(); ?>/secretaria" title="Ir para Ensino - A Secretaria">A Secretaria</a></li>
                      <li><a href="<?php echo site_url(); ?>/contatos" title="Ir para Ensino - Contatos">Contatos</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo site_url(); ?>/editais" title="Ir para Editais">Editais</a></li>
                  <li><a href="<?php echo site_url(); ?>/cursos" title="Ir para Cursos">Cursos</a></li>
                  <li><a href="<?php echo site_url(); ?>/polos" title="Ir para Polos">Polos</a></li>
                  <li><a href="<?php echo site_url(); ?>/blog" title="Ir para Notícias">Notícias</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <?php get_search_form() ?>
          <a id="enderecoPortal" class="marca" href="<?php echo site_url(); ?>" title="Ir para início do Portal Sead">
            <?php include 'svg/sead-ufes.svg'; ?>
          </a>
        </section>
      </div>
    </header>
