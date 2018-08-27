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
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
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
              
          </div>
          
          <table>
              <tr>
                  <th>Edital</th>
                  <th>Curso</th>
                  <th>Atribuição</th>
                  <th>Formação</th>
                  <th>Finalização</th>
                  <th>Status</th>
              </tr>
              <tr>
                  <td>003/2018</td>
                  <td>Licenciatura em Pedagogia</td>
                  <td>Tutor Presencial</td>
                  <td>Graduação</td>
                  <td>11/11/2018</td>
                  <td>aberto</td>                   
              </tr>
              <tr>
                  <td>003/2018</td>
                  <td>Licenciatura em Pedagogia</td>
                  <td>Tutor Presencial</td>
                  <td>Graduação</td>
                  <td>11/11/2018</td>
                  <td>aberto</td>                   
              </tr>
          </table>
          
          
      </main>
      
      <?php include 'components/rodape.php' ?>
      
    <script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/altoContraste.js"></script>
  </body>
</html>