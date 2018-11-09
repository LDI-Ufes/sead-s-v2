<main class='page curso'>

  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
    <section class="destaque">

      <div class="titulo container">
        <i class="fas fa-play-circle"></i>
        <h2>Veja o que o coordenador<br>do curso tem a dizer!<br></h2>
      </div>

    </section>
  </a>

  <div class="container">
    <section class="breadcrumb">Você está em: <a href="<?php echo site_url(); ?>/cursos">Cursos</a><i class="fas fa-greater-than"></i><span>Filosofia</span></section>
    <h1>Licenciatura EaD em Filosofia</h1>

    <p id="objetivo">O curso forma, de modo consistente e contextualizado, professores para atuarem como arte-educadores no sistema de ensino, desde a Educação Infantil ao Ensino Fundamental e Ensino Médio</p>

    <section id="info-curso">
      <div>
        <p><strong>Nível: </strong>Graduação</p>
        <p><strong>Formação: </strong>Licenciatura</p>
        <p><strong>Duração: </strong>4 anos (8 semestres)</p>
        <p><strong>Modalidade: </strong>Semipresencial</p>
        <p><strong>Conceito Geral: </strong>3</p>
      </div>
      <div id="situacao">
        <p><strong>Situação: </strong>Oferta 2014/2 em andamento, previsão de conclusão em 2019/2.
          <br>Aprovado pelo CEPE em 23/07/2014 por meio da Resolução 33/2014.
          <br><strong>Sem previsão de nova reoferta.</strong>
        </p>
      </div>
    </section>

    <section id="menu">

      <aside>
        <ul>
          <li><a href="#o-curso">O curso</a></li>
          <li><a href="#matriz-curricular">Matriz curricular</a></li>
          <li><a href="#corpo-docente">Corpo docente</a></li>
          <li><a href="#perfil-do-egresso">Perfil do egresso</a></li>
          <li><a href="#ofertas-anteriores">Ofertas anteriores</a></li>
          <a>PPC</a>
          <a>Guia do aluno</a>
        </ul>

        <span>Contato</span>
        filspsi2017@gmail.com<br>
        (027) 3333-3333

        <a href="" title="Voltar ao topo" id="voltar-ao-topo">Voltar ao topo</a>

      </aside>

      <div>
        <h2 id="o-curso">O curso</h2>
      </div>

      <div>
        <h2 id="matriz-curricular">Matriz curricular</h2>
      </div>

      <div>
        <h2 id="corpo-docente">Corpo docente</h2>
      </div>

      <div>
        <h2 id="perfil-do-egresso">Perfil do egresso</h2>
      </div>

      <div>
        <h2 id="ofertas-anteriores">Ofertas anteriores</h2>
      </div>

    </section>

  </div>

  <section id="faq-curso">
    <div class="container">
      <h2>Dúvidas Frequentes</h1>
        <ul>
          <li>
            <button><h3>O diploma/certificado EAD é válido?</h3></button>
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
          </li>
          <li>
            <button><h3>Como funcionam as aulas e os materiais didáticos? </h3></button>
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
          </li>
          <li>
            <button><h3>Posso fazer mais de um curso ao mesmo tempo? </h3></button>
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
          </li>
          <li>
            <button><h3>Onde posso entrar em contato para tirar outras dúvidas? </h3></button>
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
          </li>
        </ul>
    </div>
  </section>

<?php $ultimas_noticias = new WP_Query(array(
    'post_type' => 'noticia',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'curso-noticia',
            'field' => 'slug',
            'terms' => 'Filosofia',
        ),
    ),
    ));

  if ($ultimas_noticias->have_posts()) :?>
  <section id="noticias">
    <div class="container">
      <h2>Notícias do curso</h2>
      <div class="flex">

        <?php while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post(); ?>
          <a class="noticia" href="<?php the_permalink() ?>" title="Ir para notícia: <?php the_title(); ?>">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
          </a>

        <?php endwhile; wp_reset_postdata(); else :?>

      </div>
    </div>
  </section>
  <?php endif; ?>

</main>
