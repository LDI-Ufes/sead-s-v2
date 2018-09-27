<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title($sep = '') ?> | Sead Ufes</title>

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <?php include 'components/barra-acessibilidade.php' ?>
      <?php include 'components/barra-brasil.php' ?>

      <div id="topoBlog" class="topo">
        <section class="caixa">
          <a id="enderecoBlog" class="marca" href="<?php echo site_url(); ?>/blog" title="Ir para início do Blog">
            <?php echo file_get_contents(get_template_directory_uri() . '/svg/nossoBlog.svg'); ?>
          </a>
          <span class="btoMenu">Menu</span>
          <nav id="menuPrincipal" class="menu" role="navigation">
            <ul class="menuLista">
              <li class="temSubmenu">
                <span>Portal Sead <i class="fas fa-chevron-down"></i></span>
                <ul class="menuSuspenso">
                  <li><a href="/sitiosead">Início</a></li>
                  <li><a href="">Ensino</a></li>
                  <li><a href="/sitiosead/editais">Editais</a></li>
                  <li><a href="">Cursos</a></li>
                  <li><a href="/sitiosead/editais">Polos</a></li>            
                  <li><a href="/sitiosead/blog">Notícias</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <?php get_search_form() ?>
          <a class="marca" href="<?php echo site_url(); ?>" title="Ir para início do Portal Sead">
            <?php echo file_get_contents(get_template_directory_uri() . '/svg/sead-ufes.svg'); ?>
          </a>
        </section>
      </div>
    </header>