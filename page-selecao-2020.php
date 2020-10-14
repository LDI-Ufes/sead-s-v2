<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon/sead.png">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicon/sead.svg">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  </head>

  <body id="hotsite-selecao">

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
        <h1><span class="editais">Processo Seletivo 2020:</span> <span class="aluno">quer ser um estudante EaD da</span> <span class="ufes">Ufes?</span></h1>
      </div>     

    </header>

    <main class="page container">

      <section id="como-funciona">
        <h2>Como funciona a Educação a Distância da Ufes?</h2>
        <div class="topicos">
        <div class="topico-ead">
          <figure>
            <?php include 'svg/ingresso.svg' ?>
            <figcaption>Ingresso</figcaption>
          </figure>
          <p>Assim como o ensino presencial, é realizado um processo seletivo para ingressar nos cursos.</p>
        </div>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/ava.svg' ?>
            <figcaption>AVA</figcaption>
          </figure>
          <p>O ensino e aprendizagem ocorre por meio de tecnologias da informação e da comunicação, através do Ambiente Virtual de Aprendizagem.</p>
        </div>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/polos-uab.svg' ?>
            <figcaption>Polos UAB</figcaption>
          </figure>
          <p>Os polos da Universidade Aberta do Brasil oferecem a infraestrutura necessária para atender aos estudantes nos encontros presenciais.</p>
        </div>
        <div class="topico-ead">
          <figure>
            <?php include 'svg/encontros-presenciais.svg' ?>
            <figcaption>Encontros Presenciais</figcaption>
          </figure>
          <p>O curso é semipresencial, ocorrendo encontros regulares nos polos, para discussão, atividades, orientações.</p>
        </div>
        <!-- <div class="topico-ead">
          <figure>
            <?php include 'svg/formacao.svg' ?>
            <figcaption>Formação</figcaption>
          </figure>
          <p>O diploma é emitido pela Ufes. A EaD consegue levar ensino de qualidade para o interior do Estado.</p>
        </div> -->
        </div>

        <p>A Superintendência de Educação a Distância – Sead é a instância responsável por promover ações educativas e de formação, nas quais a mediação didático-pedagógica dos processos de ensino e de aprendizagem ocorre por meio da utilização das tecnologias da informação e da comunicação, nos ambientes virtuais de aprendizagens – AVA, e, presencialmente, nos polos municipais de apoio presencial da Universidade Aberta do Brasil – UAB e em outros espaços educativos.</p>
        <button>Saiba mais sobre EaD na Ufes</button>
      </section>

      <section id="conheca-os-cursos">
        <h2>Conheça os cursos desta oferta</h2>

        <div id="lista-cursos">
          
          <div id="botoes-curso">
          </div>
          
          <div id="polos-do-curso">
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
            <a class="instrucao" href="<?php echo site_url(); ?>/polos" title="Ir para a página de Polos">Verifique se o curso é ofertado em um Polo próximo a você<span>Ver Polos</span></a>
          </li>
          <li>
            <div class="numero">3</div>
            <a class="instrucao" href="<?php echo site_url(); ?>/editais" title="Ir para a página de Editais">Leia com atenção o Edital do Processo Seletivo<span>Ver Editais</span></a>
          </li>
          <li>
            <div class="numero">4</div>
            <a class="instrucao" href="https://www.concursos.ufes.br/sead/" title="Ir para Concursos Ufes">Faça sua inscrição no Processo Seletivo 2020 EaD/Ufes<span>Inscreva-se</span></a>
          </li>
        </ul>
      </section>

    </main>

    <footer>

      <a title="Voltar ao topo" id="voltar-ao-topo" aria-hidden="true"><i class="fas fa-arrow-up"></i></a> 

      <div class="creditos">
        <p>2020 Sead Ufes. Todos os direitos reservados <span>| <a href="http://ldi.ufes.br/" target="_blank" title="Abrir o sítio do LDI em nova aba">Desenvolvido por LDI</a></span></p>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/focus-visible@latest/dist/focus-visible.min.js"></script>
    <script>
      $(function () {
        let cursos = [];

        $.getJSON('/sead/wp-content/themes/sead-s-v2/js/oferta2020.json', function (data) {
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