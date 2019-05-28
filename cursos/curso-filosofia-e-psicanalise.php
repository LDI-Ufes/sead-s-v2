<main class='page curso' id="conteudoPrincipal">

  <section class="destaque destaque-imagem" style="background-image: linear-gradient(#043166, rgba(4, 49, 102, 0.3)), url('<?php echo get_template_directory_uri() ?>/img/capas/filosofia-e-psicanalise.jpg')"></section>

  <div class='container'>
    <section class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Filosofia e Psicanálise</span></section>
    <h1>Especialização EaD em Filosofia e Psicanálise</h1>

    <p id='objetivo'>Capacitar docentes para o magistério no ensino médio, bem como pesquisadores para os cursos de Mestrado e Doutorado em Filosofia.</p>

    <section id='info-curso'>
      <div>
        <p><strong>Nível: </strong>Especialização</p>
        <p><strong>Duração: </strong>18 meses</p>
        <p><strong>Modalidade: </strong>Semipresencial</p>
      </div>

      <div id='situacao'>
        <p><strong>Situação: </strong>
          <br><strong>Sem previsão de reoferta.</strong>
        </p>
      </div>
    </section>


    <section id='conteudo'>

      <aside id='menu'>
        <button id='dropdown-menu'>Menu<i class='fas fa-angle-down'></i></button>

        <ul>
          <li><a href='#curriculo' alt="Mostrar currículo do curso">Currículo</a></li>
          <li><a href='#corpo-docente' alt="Mostrar corpo docente">Corpo docente</a></li>
          <!--<li><a href='#ofertas-anteriores' alt="Mostrar ofertas do curso">Ofertas</a></li>-->
        </ul>

      </aside>

      <div id='matriz'>
        <h2 id='curriculo'>Duração do curso</h2>
        <p>Carga horária total: 360 horas</p>

        <h2>Matriz Curricular</h2>

        <ul>
          <li class='semestre'>
            <ul style='display: block;'>

              <li>Metodologia do Ensino em EAD <span>30h</span></li>
              <li>Mídias na Educação <span>30h</span></li>
              <li>Epistemologia da Psicanálise <span>30h</span></li>
              <li>Amor em Filosofia e Psicanálise <span>30h</span></li>
              <li>O sonho é a realização de um desejo (Freud) e neurobiologia <span>30h</span></li>
              <li>A visão e o olhar na psicanálise <span>30h</span></li>
              <li>Lingüística e libertinagem <span>30h</span></li>
              <li>Psicanálise e Capitalismo: economia de gozo e economia política <span>30h</span></li>
              <li>Freud como teórico da modernidade e de seus processos de racionalização <span>30h</span></li>
              <li>Metodologia da Pesquisa <span>30h</span></li>
              <li>Elaboração da monografia final</li>

            </ul>
          </li>

        </ul>

      </div>

      <div id='professores'>
        <h2 id='corpo-docente'>Administração acadêmica</h2>
        <p><strong>Coordenação: </strong>Profª Drª Claudia Pereira do Carmo Murta</p>
        
        <h2>Corpo docente</h2>

        <p class='nome'>
          <a title='Abrir perfil na plataforma Lattes em nova aba' href='http://lattes.cnpq.br/7986103638057702' target='_blank'><span class='somente-leitura'>Perfil na plataforma Lattes de </span>Arthur Octávio de Melo Araújo</a>
          <span>Doutorado</span>
        </p>
        <p class='nome'>
          <a title='Abrir perfil na plataforma Lattes em nova aba' href='http://lattes.cnpq.br/7566489472975915' target='_blank'><span class='somente-leitura'>Perfil na plataforma Lattes de </span>Claudia Murta</a>
          <span>Doutorado</span>
        </p>
        <p class='nome'>
          <a title='Abrir perfil na plataforma Lattes em nova aba' href='http://lattes.cnpq.br/7717139160457330' target='_blank'><span class='somente-leitura'>Perfil na plataforma Lattes de </span>Daísa Teixeira</a>
          <span>Doutorado</span>
        </p>
        <p class='nome'>
          <a title='Abrir perfil na plataforma Lattes em nova aba' href='http://lattes.cnpq.br/3161542255903404' target='_blank'><span class='somente-leitura'>Perfil na plataforma Lattes de </span>Daniel Omar Perez</a>
          <span>Doutorado</span>
        </p>
        <p class='nome'>
          Antônio Teixeira
        </p>
        <p class='nome'>
          <a title='Abrir perfil na plataforma Lattes em nova aba' href='http://lattes.cnpq.br/5157393173050104' target='_blank'><span class='somente-leitura'>Perfil na plataforma Lattes de </span>Francisco Bocca</a>
          <span>Doutorado</span>
        </p>
        <p class='nome'>
          <a title='Abrir perfil na plataforma Lattes em nova aba' href='http://lattes.cnpq.br/5431145327759147' target='_blank'><span class='somente-leitura'>Perfil na plataforma Lattes de </span>Richard Simanke</a>
          <span>Doutorado</span>
        </p>
        <p class='nome'>
          <a title='Abrir perfil na plataforma Lattes em nova aba' href='http://lattes.cnpq.br/7208476340192177' target='_blank'><span class='somente-leitura'>Perfil na plataforma Lattes de </span>Vladimir Safatle</a>
          <span>Doutorado</span>
        </p>
        
      </div>

<!--      <div>
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2>

        <h3></h3>
        <p><strong>Coordenação de Curso: </strong>Profª Drª Claudia Pereira do Carmo Murta</p>
        <p><strong>Polos atendidos: </strong>Afonso Cláudio, Aracruz, Alegre, Cachoeiro de Itapemirim, Conceição da Barra, Colatina, Domingos Martins, Santa Teresa, Vila Velha.</p>

      </div>-->

    </section>

  </div>

  <section id='noticias'>
    <?php $ultimas_noticias = new WP_Query(array(
      'post_type' => 'noticia',
      'posts_per_page' => 3,
      'tax_query' => array(
          array(
              'taxonomy' => 'curso-noticia',
              'field' => 'slug',
              'terms' => 'Filosofia e Psicanálise',
          ),
      ),
    ));

    if ($ultimas_noticias->have_posts()) : ?>
      <div class='container'>
        <h2>Notícias do curso</h2>
        <div class='flex'>

          <?php while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post(); ?>
            <a class='noticia' href='<?php the_permalink() ?>' title='Ir para notícia: <?php the_title(); ?>'>
              <?php the_post_thumbnail(); ?>
              <h3><?php the_title(); ?></h3>
            </a>

          <?php endwhile; wp_reset_postdata(); else : ?>
        </div>
      </div>
    <?php endif; ?>
  </section>

</main>
