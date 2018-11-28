<?php get_header('principal'); ?>

<main id="conteudoPrincipal" class="inicio">

  <section id="banner">
    <div class="container">
      <h2>os materiais do EaD da Ufes estão disponíveis em nosso <span>Acervo Digital</span></h2>
      <a href="https://acervodigital.eadufes.org" target="_blank" title="Abrir o Acervo Digital em nova aba">Conheça o Acervo Sead</a>
    </div>
  </section>

  <div class="container">

    <section id="ead-na-ufes">
      <h2>Você conhece a EaD da Ufes?</h2>
      <p>Nós somos a Secretaria responsável por promover ações educativas e de formação da EaD na Ufes. Fique atento aos editais para mais informações de cada curso!</p>
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
    </section>

    <aside>
      <?php include 'components/ultimos-editais.php' ?>
    </aside>

  </div>

  <section id="quer-ser">
    <div class="container">
      <div id="quer-ser-titulo">
        <div class="box-titulo"></div>
        <h2>Quer ser aluno?<br>Quer ser um tutor?</h2>
      </div>
      <div id="quer-ser-itens">
        <div class="box-titulo"></div>
        <ul>
          <li>
            <div class="numero">1</div>
            <a class="instrucao" href="/sitiosead/ead-na-ufes" title="Ir para Ensino - Como é a Ead na Ufes?">Veja como funciona a EaD da Ufes<i class="fas fa-external-link-square-alt"></i></a>
          </li>
          <li>
            <div class="numero">2</div>
            <a class="instrucao" href="/sitiosead/editais" title="Ir para Editais">Fique de olho nos próximos editais<i class="fas fa-external-link-square-alt"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div class="container">
    <section id="noticias">
      <?php $ultimas_noticias = new WP_Query(array('post_type' => 'noticia', 'posts_per_page' => 4));
        if ($ultimas_noticias->have_posts()) : while ($ultimas_noticias->have_posts()) : $ultimas_noticias->the_post();?>

          <a class="noticia" href="<?php the_permalink() ?>" title="Ir para notícia: <?php the_title(); ?>">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
          </a>

        <?php endwhile; wp_reset_postdata(); else : ?>

        <p>Sem notícias.</p>

      <?php endif; ?>

      <div class="confira-mais">
        <h2>Confira mais do que acontece nos polos:</h2>
        <a href="https://www.facebook.com/sead.ufes/" title="Ir para página da Sead no Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="/sitiosead/blog" title="Ir para a página Blog"><?php include 'svg/nossoBlog.svg' ?></a>
      </div>

    </section>
  </div>

  <section id="polos">
    <div class="container">
      <?php include 'svg/mapaInicio.svg' ?>
      <h2>A EaD está presente em todo o estado!</h2>
      <p>Atualmente a Ufes oferta cursos EaD em 27 Polos Municipais de Apoio Presencial – UAB.</p>
      <a href="/sitiosead/polos" title="Ir para Polos">Conheça nossos polos!</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
