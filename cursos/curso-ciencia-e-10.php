<main class='page curso' id="conteudoPrincipal">

  <!--Com imagem-->

  <section class="destaque destaque-imagem" style="background-image: linear-gradient(#043166, rgba(4, 49, 102, 0.3)), url('<?php echo get_template_directory_uri() ?>/img/capas/ciencia-e-10.png')"></section>

  <div class='container'>
    <section class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Ciência é 10!</span></section>
    <h1>Especialização em Ensino de Ciências - Ciência é 10!</h1>

    <p id='objetivo'>O público-alvo do curso são professores graduados que estão atuando no sistema público de ensino e ministrando aulas de Ciências no Ensino Fundamental dos anos finais (Fundamental II).</p>

    <section id='info-curso'>
      <div>
        <p><strong>Nível: </strong>Especialização</p>
        <p><strong>Duração: </strong>18 meses</p>
        <p><strong>Modalidade: </strong>Semipresencial</p>
      </div>

      <div id='situacao'>
        <p><strong>Situação: </strong>
          <br><strong>Seleção em andamento.</strong>
        </p>
      </div>
    </section>


    <section id='conteudo'>

      <div id='matriz'>
        <h2 id='curriculo'>Duração do curso</h2>
        <p>Carga horária total: 480h<br>
          Módulo 1: 150h<br>
          Módulo 2: 240h<br>
          Módulo 3: 90h
        </p>

        <h2>Matriz Curricular</h2>

        <ul>
          <li class='semestre'>
            <button class='ativo'><h3>Módulo 1 - Para perguntar e experimentar, é só começar!</h3></button>
            <ul style='display: block;'>

              <li>Uma introdução <span>30h</span></li>
              <li>Começando a experimentar e a pensar no TCC <span>60h</span></li>
              <li>Hora de perguntar e propor <span>30h</span></li>
              <li>Na sala de aula <span>30h</span></li>
            </ul>
          </li>

          <li class='semestre'>
            <button class='ativo'><h3>Módulo 2 - Para perguntar e responder, melhor saber!</h3></button>
            <ul style='display: block;'>

              <li>TCC2: Fundamentos do projeto de investigação <span>120h</span></li>
              <li>Investigação para o Ensino de Ciências <span>120h</span></li>
            </ul>
          </li>

          <li class='semestre'>
            <button class='ativo'><h3>Módulo 3 - Se é para experimentar, vamos fazer!</h3></button>
            <ul style='display: block;'>

              <li>TCC3: Projeto de investigação em sala de aula <span>90h</span></li>
            </ul>
          </li>

        </ul>

      </div>

    </section>

  </div>

  <!-- <section id='noticias'>
    <//?php $ultimas_noticias = new WP_Query(array(
      'post_type' => 'noticia',
      'posts_per_page' => 3,
      'tax_query' => array(
          array(
              'taxonomy' => 'curso-noticia',
              'field' => 'slug',
              'terms' => 'Ciência é 10',
          ),
      ),
    ));

    if ($ultimas_noticias->have_posts()) : ?>
      <div class='container'>
        <h2>Notícias do curso</h2>
        <div class='flex'>

          <//?php while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post(); ?>
            <a class='noticia' href='<//?php the_permalink() ?>' title='Ir para notícia: <//?php the_title(); ?>'>
              <//?php the_post_thumbnail(); ?>
              <h3><//?php the_title(); ?></h3>
            </a>

          <//?php endwhile; wp_reset_postdata(); else : ?>
        </div>
      </div>
    <//?php endif; ?>
  </section> -->

</main>
