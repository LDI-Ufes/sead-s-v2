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

      <div id="barraAuxiliar">
        <section class="caixa">
          <span id="atalhosAcessibilidade" style="display:none">
            <span id="atalhosAcessibBotao">
              <i class="fab fa-accessible-icon"></i> Atalhos de acessibilidade
            </span>
            <ul class="menuSuspenso">
              <li><button><i id=""  class="fas fa-arrow-circle-right"></i> Ir para o conteúdo <span>[1]</span></button></li>
              <li><button><i id=""  class="fas fa-arrow-circle-right"></i> Ir para o menu <span>[2]</span></button></li>
              <li><button><i id=""  class="fas fa-arrow-circle-right"></i> Ir para busca <span>[3]</span></button></li>
              <li><button id="contrasteBto"><i class="fas fa-adjust"></i> Alto contraste <span>[4]</span></button></li>
              <li><button><i id="aumentarLetra" class="fas fa-search-plus"></i> Aumentar zum <span>[5]</span></button></li>
              <li><button><i id="diminuirLetra" class="fas fa-search-minus"></i> Diminuir zum <span>[6]</span></button></li>
              <li><button><i id="reiniciarLetra" class="fas fa-undo"></i> Remover zum <span>[7]</span></button></li>              
              <li><button><i class="fas fa-info"></i> Como funcionam os atalhos <span>[8]</span></button></li>
            </ul>
          </span>
          <ul id="ligacoesExternas">
            <li>
              <a href=""><i class="fas fa-question-circle"></i> Dúvidas frequentes</a>
            </li>
            <li id="ligacaoAva">
              <button id="ligacaoAvaBotao"><i id="" class="fas fa-chalkboard-teacher"></i> AVA Moodle</button>
              <ul class="menuSuspenso">
                <li><a href="">Graduação</a></li>
                <li><a href="">Especialização e Aperfeiçoamento</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </div>

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
