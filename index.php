<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Secretaria de Ensino a Distância - Ufes</title>

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,700" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;">
        <ul id="menu-barra-temp" style="list-style:none;">
          <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
            <a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
          </li>
          <li>
            <a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a>
          </li>
        </ul>
      </div>

      <div id="topoSuperior">
        <section class="caixa">
          <section id="acessib">
            <ul id="atalhosAcessib">
              <li>Ir para o conteúdo <span>1</span></li>
              <li>Ir para o menu <span>2</span></li>
              <li>Ir para busca <span>3</span></li>
            </ul>
            <ul id="iconesAcessib">
              <li><i id="contrasteBto"  class="fas fa-adjust" title="Alto contraste"></i></li>
              <li><i class="fas fa-minus" title="Diminuir letras"></i></li>
              <li><i class="fas fa-font" title="Tamanho de letra padrão"></i></li>
              <li><i class="fas fa-plus" title="Aumentar letras"></i></li>
              <li><i class="fas fa-question-circle" title="Informações sobre esta barra"></i></li>
            </ul>
          </section>
          <section id="ligaExterna">
            <ul>
              <li>Dúvidas frequentes</li>
              <li>Acesso rápido</li>
            </ul>
          </section>
        </section>
      </div>

      <div id="topoPrincipal">

        <section>
          <?php include 'svg/sead.svg' ?>

          <ul>
            <li>Início</li>
            <li>
              Ensino
              <ul>
                <li></li>
              </ul>
            </li>
            <li>Editais</li>
            <li>Cursos</li>
            <li>Polos</li>            
            <li>Notícias</li>
          </ul>
        </section>
      </div>
    </header>

    <script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/altoContraste.js"></script>
  </body>
</html>
