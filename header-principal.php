<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82472266-16"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-82472266-16');
	</script>
	  
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon/sead.png">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicon/sead.svg">

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-theme.css"/> 

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?x=0">
    <?php wp_head(); ?>
  </head>
  <body>
  <header> 
      <?php include 'components/barra-acessibilidade.php' ?> 
      <?php include 'components/barra-brasil.php' ?> 
 
      <div id="topoPrincipal" class="topo"> 
        <section class="caixa"> 
          <a class="marca" href="<?php echo site_url(); ?>" title="Ir para início do sítio"> 
             <?php include 'svg/sead-ufes-extenso.svg'; ?> 
          </a> 
          <span class="btoMenu">Menu <i class='fas fa-chevron-down'></i></span> 
          <nav id="menuPrincipal" class="menu" role="navigation"> 
            <ul class="menuLista"> 
              <!-- <li><a href="<?php echo site_url(); ?>" title="Ir para página inicial">Início</a></li>  -->
              <li class="temSubmenu"> 
                <span>Ensino <i class="fas fa-chevron-down"></i></span> 
                <ul class="menuSuspenso"> 
                  <li><a href="<?php echo site_url(); ?>/ead-na-ufes" title="Ir para Ensino - Como é a Ead na Ufes?">Como é a EaD na Ufes?</a></li> 
                  <li><a href="<?php echo site_url(); ?>/a-sead" title="Ir para Ensino - A SEAD">A SEAD</a></li> 
                  <li><a href="<?php echo site_url(); ?>/contatos" title="Ir para Ensino - Contatos">Contatos</a></li> 
                </ul> 
              </li> 
              <li><a href="<?php echo site_url(); ?>/editais" title="Ir para Editais">Editais</a></li> 
              <li><a href="<?php echo site_url(); ?>/cursos" title="Ir para Cursos">Cursos</a></li> 
              <li><a href="<?php echo site_url(); ?>/polos" title="Ir para Polos">Polos</a></li> 
              <li class="temSubmenu"> 
                <span>Notícias <i class="fas fa-chevron-down"></i></span> 
                <ul class="menuSuspenso"> 
                  <li><a href="<?php echo site_url(); ?>/noticias" title="Ir para Notícias">Últimas notícias</a></li> 
                  <li><a href="<?php echo site_url(); ?>/fotos" title="Ir para Galeria de fotos">Galeria de fotos</a></li> 
                </ul> 
              </li> 
            </ul> 
          </nav> 
          <?php get_search_form() ?> 
        </section> 
      </div> 
       
    </header>
