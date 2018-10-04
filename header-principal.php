<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">  

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
              <li><a href="/sitiosead" title="Ir para página inicial">Início</a></li>
              <li class="temSubmenu">
                <span>Ensino <i class="fas fa-chevron-down"></i></span>
                <ul class="menuSuspenso">
                  <li><a href="/sitiosead/ead-na-ufes" title="Ir para Ensino - Como é a Ead na Ufes?">Como é a EaD na Ufes?</a></li>
                  <li><a href="/sitiosead/a-secretaria" title="Ir para Ensino - A Secretaria">A Secretaria</a></li>
                  <li><a href="/sitiosead/contatos" title="Ir para Ensino - Contatos">Contatos</a></li>
                </ul>
              </li>
              <li><a href="/sitiosead/editais" title="Ir para Editais">Editais</a></li>
              <li><a href="/sitiosead/cursos" title="Ir para Cursos">Cursos</a></li>
              <li><a href="/sitiosead/polos" title="Ir para Polos">Polos</a></li>            
              <li><a href="/sitiosead/blog" title="Ir para Notícias">Notícias</a></li>
            </ul>
          </nav>
          <?php get_search_form() ?>
        </section>
      </div>
    </header>