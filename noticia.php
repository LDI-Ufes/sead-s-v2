<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Secretaria de Ensino a Distância - Ufes</title>

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/css/blog-post.css">
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i" rel="stylesheet">  <!-- Conferir necessidade de variações -->
    <link <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <?php include 'components/barra-acessibilidade.php' ?>
        <?php include 'components/barra-brasil.php' ?>
        <?php include 'components/topoBlog.php' ?>
      </header>
      
      <div class="post-capa gradient">
        <?php the_post_thumbnail( ); ?>  
        <!--<img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg">-->
      </div>
      <main>
        <article>
            <h1><?php the_title(); ?></h1>
            <!--<h1>A gestão do design no âmbito da produção de materiais didáticos para o ensino a distância</h1>-->
            <div class="post-date"><i class="fas fa-clock"></i><?php the_date('j \d\e F \d\e Y'); ?></div>

            <div class="post-body">
                <?php the_content( ); ?>
<!--              <p>A Educação a Distância (EaD) é entendida pelo Decreto nº 5.622, de 19 de dezembro de 2005, como modalidade educacional mediada pelas tecnologias de informação e comunicação, em que os envolvidos desenvolvem atividades em tempos e lugares diversos. O Decreto nº 5.800, de 8 de junho de 2006, instituiu o Sistema Universidade Aberta do Brasil (UAB), que incentivou a expansão dos cursos superiores no país e fortaleceu a EaD. </p>
              <blockquote>O LDI é responsável pela produção de materiais de apoio aos cursos na modalidade a distância da universidade, coordenado por professores do curso de Design, em parceria e colaboração com professores, designers instrucionais e coordenadores dos cursos distância. Executor de centenas de projetos para a EAD, o laboratório conta com diversas equipes, sendo uma delas encarregada de gerir as atividades, o fluxo de trabalho e os projetos.</blockquote>
              <p>No cenário de desenvolvimento da Educação a Distância, a literatura e os relatos de experiência enfatizam que ocorreram mudanças significativas ao longo de todo o processo educacional. Nesse contexto, a complexa tarefa de desenvolvimento de materiais na contemporaneidade deve se pautar na reconfiguração dos processos de ensino-aprendizagem, que destaca o estudante em uma posição privilegiada na construção do próprio conhecimento. A EAD enfrentou e ainda enfrenta desafios no que concerne ao desenvolvimento de recursos educacionais, que usualmente ocorre com a mediação e colaboração entre professores, tutores, designers instrucionais, coordenadores de cursos, dentre outros agentes.</p>
              <img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/editada03.jpg">-->
            </div>

<!--            <div class="post-autor">
                <img class="autor-avatar" src="https://ldi.eadufes.org/wp-content/uploads/2017/03/leticiapedruzzi.jpg">
                <div class="autor-info">
                  postado por
                  <div class="autor-name">Letícia Pedruzi</div>
                  <div class="autor-role">Coordenadora do Laboratório de design instrucional-SEAD</div>
                  <div class="autor-bio">Professora do Departamento de Desenho Industrial da Universidade Federal do Espírito Santo e coordenadora de gestão e diagramação do Laboratório de Design Instrucional.</div>             
                </div>
            </div>-->
            <div class="post-autor">
                <img class="autor-avatar" src="<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>">
                <div class="autor-info">
                  postado por
                  <div class="autor-name"><?php the_author(); ?></div>
                  <div class="autor-role"><?php the_author_meta('cargo'); ?></div>
                  <div class="autor-bio"><?php the_author_meta('description'); ?></div>             
                </div>
            </div>
            
            <div class="links-compartilhamento">
                <span>Gostou do que leu?</span> Compartilhe essa notícia.
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>

        </article>
      </main>
          
    <script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/altoContraste.js"></script>

<!--    <script>
        $(window).on("scroll", function () {
            if ($(this).scrollTop() === 0) {
                $("#topoBlog svg").css("height", 200);
                $(".post-capa").addClass('gradient');
            }
            else {
               $("#topoBlog svg").css("height", 64);
               $(".post-capa").removeClass('gradient');
            }
        });
    </script>-->
  </body>
</html>