<?php get_header(); ?>

<main id="conteudoPrincipal" class="inicio">

<section id="banner" class="destaque">
    <div class="container">
      <h2><span>Portal de Tecnologias Educacionais da Ufes</span> indicações para professores, estudantes e mediadores</h2>
      <a href="http://edutics.ufes.br/" target="_blank">Acesse o EduTics</a>
    </div>
  </section>

  <div class="container colunas">
    <section id="ead-na-ufes" class="coluna1">
      <h2>Você conhece a EaD da Ufes?</h2>
      <p>Nós somos a Superintendência responsável por promover ações educativas e de formação da EaD na Ufes. Fique atento aos editais para mais informações sobre cada curso!</p>
      <div class="topico-ead">
        <figure>
          <?php include 'svg/ingresso.svg' ?>
          <figcaption>Ingresso</figcaption>
        </figure>
        <p>O ingresso nos cursos ofertados na modalidade EaD pela Ufes ocorre por processos seletivos ou editais.</p>
      </div>
      <div class="topico-ead">
        <figure>
          <?php include 'svg/ava.svg' ?>
          <figcaption>AVA</figcaption>
        </figure>
        <p>Ambiente Virtual de Aprendizagem no qual acontece a interação e a distribuição do conteúdo das disciplinas.</p>
      </div>
      <div class="topico-ead">
        <figure>
          <?php include 'svg/polos-uab.svg' ?>
          <figcaption>Polos UAB</figcaption>
        </figure>
        <p>Os encontros semanais acontecem nos 27 Polos Municipais de Apoio Presencial da UAB no estado.</p>
      </div>
    </section>

    <aside class="coluna2">
      <?php include 'components/ultimos-editais.php' ?>
    </aside>
    

  </div>

  <section id="quer-ser">
    <div class="container">
      <div id="quer-ser-titulo">
        <div class="box-titulo"></div>
        <h2>Quer ser estudante?<br>Quer ser um tutor?</h2>
      </div>
      <div id="quer-ser-itens">
        <div class="box-titulo"></div>
        <ul>
          <li>
            <div class="numero">1</div>
            <a class="instrucao" href="<?php echo site_url(); ?>/ead-na-ufes" title="Ir para a página Ensino: Como é a Ead na Ufes?">Veja como funciona a EaD da Ufes<i class="fas fa-angle-double-right"></i></a>
          </li>
          <li>
            <div class="numero">2</div>
            <a class="instrucao" href="<?php echo site_url(); ?>/editais" title="Ir para a página de Editais">Fique de olho nos próximos editais<i class="fas fa-angle-double-right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div class="container">
    <section id="noticias">
      <h2>Notícias</h2>
      <div id="blocos">
        <?php $ultimas_noticias = new WP_Query(array('post_type' => 'noticia', 'posts_per_page' => 4));
          if ($ultimas_noticias->have_posts()) : while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post();?>

            <a class="noticia" href="<?php the_permalink() ?>" title="Ir para notícia: <?php the_title(); ?>">
              <?php the_post_thumbnail(); ?>
              <h3><?php the_title(); ?></h3>
            </a>

          <?php endwhile; wp_reset_postdata(); else : ?>

          <!--<p>Sem notícias.</p>-->

        <?php endif; ?>

        <div class="confira-mais">
          <span>Confira mais do que acontece nos polos:</span>
          <a href="https://www.facebook.com/sead.ufes/" target="_blank" title="Abrir página da Sead no Facebook em nova aba"><span class="somente-leitura">Página da Sead no Facebook</span><i class="fab fa-facebook-f"></i></a>
          <a href="<?php echo site_url(); ?>/noticias" title="Ir para a página de notícias"><span class="somente-leitura">Página de notícias</span><?php include 'svg/nossoBLOG.svg' ?></a>
        </div>
      </div>

    </section>
  </div>

  <section id="polos">
    <div class="container">
      <?php include 'svg/mapaInicio.svg' ?>
      <h2>A EaD está presente em todo o estado!</h2>
      <p>Atualmente a Ufes oferta cursos EaD em 27 Polos Municipais de Apoio Presencial – UAB.</p>
      <a href="<?php echo site_url(); ?>/polos" title="Ir para a página de Polos">Conheça nossos polos!</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
