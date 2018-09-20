<?php get_header('blog'); ?>

<main id="noticia">
  <div class="post-capa gradient">
    <?php the_post_thumbnail(); ?>  
  <!--<img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg">-->
  </div>

  <article class="container">
    <h1><?php the_title(); ?></h1>
    <!--<h1>A gestão do design no âmbito da produção de materiais didáticos para o ensino a distância</h1>-->
    <div class="post-date"><i class="fas fa-clock"></i><?php the_date('j \d\e F \d\e Y'); ?></div>

    <div class="post-body">
      <?php the_content(); ?>
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
      <img class="autor-avatar" src="<?php echo get_avatar(get_the_author_meta('ID')); ?>">
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

<?php get_footer(); ?>