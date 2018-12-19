<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://cdn.eadufes.org/icone/sead.png">
    <link rel="icon" type="image/svg+xml" href="https://cdn.eadufes.org/icone/sead.svg">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  </head>

  <body id="selecao2019-1">

    <header style="background-image: linear-gradient(transparent, rgba(4, 49, 102, 0.6)), url('<?php echo get_template_directory_uri() ?>/img/hotsite-capa.png')">
      <div class="container">
        <section class="caixa">
          <div class="box-marca"></div>
          <a class="marca" href="<?php echo site_url(); ?>" title="Ir para início do sítio">
            <?php include 'svg/sead-ufes-extenso.svg'; ?>
          </a>
          <div class="box-nav"></div>
          <a class="nav" href="<?php echo site_url(); ?>">Ir para o Portal Sead</a>
        </section>
        <h1><span class="editais">Editais abertos:</span> <span class="aluno">quer ser um aluno EaD da</span> <span class="ufes">Ufes?</span></h1>
      </div>     

    </header>

    <main class="page container">

      <section id="como-funciona">
        <h2>Como funciona a Educação a Distância da UFES?</h2>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/ingresso.svg' ?>
            <figcaption>Ingresso</figcaption>
          </figure>
          <p>O ingresso na EaD da Ufes ocorre por processos seletivos ou editais.</p>
        </div>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/ava.svg' ?>
            <figcaption>AVA</figcaption>
          </figure>
          <p>Ambiente Virtual de Aprendizagem onde acontece a interação e distribuição do conteúdo das disciplinas.</p>
        </div>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/polos-uab.svg' ?>
            <figcaption>Polos UAB</figcaption>
          </figure>
          <p>Os encontros semanais acontecem nos diversos polos municipais do Estado.</p>
        </div>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/encontros-presenciais.svg' ?>
            <figcaption>Encontros Presenciais</figcaption>
          </figure>
          <p>Os cursos são semi-presenciais, ocorrendo encontros semanais nos polos para realização de atividades.</p>
        </div>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/formacao.svg' ?>
            <figcaption>Formação</figcaption>
          </figure>
          <p>O diploma é emitido pela Ufes. A EaD consegue levar ensino de qualidade para o interior do Estado.</p>
        </div>

        <p>A Secretaria de Ensino a Distância – Sead é a instância responsável por promover ações educativas e de formação, nas quais a mediação didático-pedagógica dos processos de ensino e de aprendizagem ocorre por meio da utilização das tecnologias da informação e da comunicação, nos ambientes virtuais de aprendizagens – AVA, e, presencialmente, nos polos municipais de apoio presencial da Universidade Aberta do Brasil – UAB e em outros espaços educativos.</p>
        <button>Saiba mais sobre EaD na Ufes</button>
      </section>

      <section id="conheca-os-cursos">
        <h2>Conheça os cursos desta oferta</h2>

        <div id="lista-cursos">
          <div id="botoes-curso">
          </div>
          <div id="polos-do-curso">
            <!--            <ul id="polos-artes-visuais">
                          <strong>Disponível nos polos:</strong>
                          <li>Afonso Cláudio</li>
                          <li>Ecoporanga</li>
                          <li>Itapemirim</li>
                          <a target="_blank" href="<?php echo site_url(); ?>/cursos/artes-visuais" title="Abrir página do curso Artes Visuais">Saiba mais sobre Artes Visuais</a>
                        </ul>
                        <ul id="polos-biologia">
                          <strong>Disponível nos polos:</strong>
                          <li>Ecoporanga</li>
                          <li>Itapemirim</li>
                          <a target="_blank" href="<?php echo site_url(); ?>/cursos/biologia" title="Abrir página do curso Biologia">Saiba mais sobre Biologia</a>
                        </ul>-->
          </div>
        </div>

        <?php include 'svg/mapaES.svg'; ?>
      </section>

      <section id="inscricao">
        <h2>Gostou? Quer se inscrever?</h2>
        <ul>
          <li>
            <div class="numero">1</div>
            <a class="instrucao" href="<?php echo site_url(); ?>/cursos" title="Ir para a página de Cursos">Informe-se sobre o curso que deseja fazer<span>Ver Cursos</span></a>
          </li>
          <li>
            <div class="numero">2</div>
            <a class="instrucao" href="<?php echo site_url(); ?>/polos" title="Ir para a página de Polos">Verifique se o curso é ofertado em um polo próximo a você<span>Ver Polos</span></a>
          </li>
          <li>
            <div class="numero">3</div>
            <a class="instrucao" href="<?php echo site_url(); ?>/editais" title="Ir para a página de Editais">Leia com atenção o edital do processo seletivo<span>Ver Editais</span></a>
          </li>
          <li>
            <div class="numero">4</div>
            <a class="instrucao" href="" title="Ir para a o Sistema de Seleção">Faça sua inscrição pelo Sistema de Seleção Sead<span>Ir para Sistema de Seleção</span></a>
          </li>
        </ul>
      </section>

    </main>

    <footer>

      <a title="Voltar ao topo" id="voltar-ao-topo" aria-hidden="true"><i class="fas fa-arrow-up"></i></a> 

      <div class="creditos">
        <p>© 2019 Sead Ufes. Todos os direitos reservados <span>| <a href="https://ldi.eadufes.org/" target="_blank" title="Abrir o sítio do LDI em nova aba">Desenvolvido por LDI</a></span></p>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
    <script src="https://unpkg.com/focus-visible@latest/dist/focus-visible.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/globais.js"></script>
    <script>
      $(function () {
        let cursos = [];

        $.getJSON('/sitiosead/wp-content/themes/sead-v2/js/polos-por-curso.json', function (data) {
          $.each(data.cursos, function (i, curso) {
            let botao = "<button onclick=\"mostraPolos('" + curso.id + "')\">" + curso.nome + "</button>";
            let ul = '<ul id="polos-' + curso.id + '">' +
                    '<strong>Disponível nos polos:</strong><br>' +
                    '<a target="_blank" href="<?php echo site_url(); ?>/cursos/' + curso.id + '" title="Abrir página do curso ' + curso.nome + '">Saiba mais sobre ' + curso.nome + '</a>' +
                    '</ul>';
            $(botao).appendTo("#botoes-curso");
            $(ul).appendTo("#polos-do-curso");

            let link = '#polos-' + curso.id + ' a';

            $.each(curso.polos, function (j, polo) {
              let li = '<li>' + polo.nome + '</li>';
              $(li).insertBefore(link);

              let geo = '#' + polo.id;
              let geoCurso = 'polos-' + curso.id ;
              $(geo).addClass(geoCurso);             
            });
          });
        });
      });

      // Mostra polos por curso
      function mostraPolos(curso) {
        let c = '#polos-' + curso;
        let p = '.polos-' + curso;
        let e = event.target;
        $('#polos-do-curso ul').hide();
        $(c).show();
        $('#botoes-curso button').removeClass('selecionado');
        $(e).addClass('selecionado');
        $('.geografia').removeClass('aceso');
        $(p).addClass('aceso');
      }

      // scroll to top
      $('#voltar-ao-topo').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
      });

      $(window).scroll(function () {
        $(window).scrollTop() > 20 ? $('#voltar-ao-topo').fadeIn(300) : $('#voltar-ao-topo').fadeOut(300);
      });

    </script>

  </body>
</html>