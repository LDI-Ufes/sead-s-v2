<main class='page curso' id="conteudoPrincipal">

  <section class="destaque destaque-imagem" style="background-image: linear-gradient(#043166, rgba(4, 49, 102, 0.3)), url('<?php echo get_template_directory_uri()?>/img/capas/ciencia-e-10.jpg')"></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Ciência é 10!</span></div> 
 
      <h1>Ciência é 10!</h1> 
 
      <div class="colunas"> 
 
      <p class='coluna1 objetivo'>O público-alvo do curso Especialização em Ensino de Ciências - Ciência é 10! são professores graduados que estão atuando no sistema público de ensino e ministrando aulas de Ciências no Ensino Fundamental dos anos finais (Fundamental II).</p>  
 
        <div class="coluna2"> 
          <p> 
          <strong>Nível: </strong>Especialização<br/> 
            <strong>Duração: </strong>18 meses<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
          </p> 
          <p class="situacao"><strong>Situação: </strong> 
            <br>Oferta 2014/2 em fase de conclusão. 
            <br>Aprovado pelo CEPE em 23/07/2014 por meio da Resolução n° 32/2014. 
            <br><strong>Sem previsão de nova reoferta.</strong> 
          </p> 
        </div> 
      </div> 
    </div> 
  </section> 
 
    <section id='conteudo-curso' class='container colunas'> 
 
      <aside class="coluna2"> 
         
        <div class='menu'> 
          <h4>Navegue</h4> 
 
          <ul> 
            <li><a title="Mostrar perfil do egresso" href='#perfil-do-egresso'>Perfil do egresso</a></li> 
            <li><a title="Mostrar currículo" href='#curriculo'>Grade curricular</a></li> 
            <li><a title="Mostrar corpo docente" href='#corpo-docente'>Corpo docente</a></li> 
            <li><a title="Mostrar ofertas do curso" href='#ofertas-anteriores'>Ofertas</a></li> 
          </ul> 
        </div> 
 
        <h4>Contato</h4> 
 
        <p class="contato-curso"> 
        <strong>Jaqueline Ferreira Almeida</strong><br/> 
          <mail>ead.ensinodeciencias@ufes.br</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <!-- <h2 id='perfil-do-egresso'>Perfil do egresso</h2>  -->
         
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total: 480h<br>
          Módulo 1: 150h<br>
          Módulo 2: 240h<br>
          Módulo 3: 90h</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-ciencia-e-10.json', true); $grade = json_decode($json); ?>

            <!-- Loop pelos módulos -->
            <?php foreach($grade as $modulo => $disciplinas) { ?>
            
            <li class='semestre'> 
              <button><h3><?php $modulo = str_replace('_', ' ', $modulo); echo $modulo; ?></h3></button> 
              <ul> 

                <div class="rotulos-matriz"> 
                  <div>Disciplina</div> 
                  <!-- <div>Ementa</div>  -->
                  <div> 
                    <span class="desktop">Carga horária</span> 
                    <span class="mobile">C. hr.</span> 
                  </div> 
                </div>

                <!-- Loop pelas disciplinas -->
                <?php foreach ( $disciplinas as $d ){ ?>

                  <li> 
                    <div><?php echo $d->nome; ?></div> 

                    <?php if ( isset( $d->arquivo ) ){ ?>

                      <div> 
                        <a href="<?php echo get_template_directory_uri(); ?>/arquivos/artes/<?php echo $d->arquivo; ?>" target="_blank" title='Abrir documento em nova aba'> 
                          <i class="far fa-file-pdf"></i>PDF 
                          <span class="somente-leitura">Programa da disciplina <?php echo $d->nome; ?></span> 
                      </a> 
                      </div> 
                    <?php } ?>

                    <div><?php echo $d->ch; ?>h</div> 
                  </li> 

                <?php } ?> <!-- Fim do Loop pelas disciplinas -->

              </ul> 
            </li>

            <?php } ?> <!-- Fim do Loop pelos módulos -->

        </ul> 
  
    </section> 
 
  </div> 
 
  <section id='noticias' class="secao-destacada"> 
    <?php $ultimas_noticias = new WP_Query(array( 
      'post_type' => 'noticia', 
      'posts_per_page' => 3, 
      'tax_query' => array( 
          array( 
              'taxonomy' => 'curso-noticia', 
              'field' => 'slug', 
              'terms' => 'Ciências é 10!', 
            ), 
        ), 
    )); 
 
    if ($ultimas_noticias->have_posts()) : ?> 
 
      <div class='container'> 
        <h2 class="titulo-destacado">Notícias do curso</h2> 
        <div class='cards-noticias-curso'> 
 
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
