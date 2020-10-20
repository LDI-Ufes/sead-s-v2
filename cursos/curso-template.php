<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Nome</span></div> 
 
      <h1>Nome</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'></p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>4 anos (8 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
            <!-- <strong>Conceito Geral: </strong>3  -->
          </p> 
          <p class="situacao"><strong>Situação: </strong> 
            <br>Oferta 2014/2 em fase de conclusão. 
            <br>Aprovado pelo CEPE em 23/07/2014 por meio da Resolução n° 32/2014. 
            <br><strong>Sem previsão de nova oferta.</strong> 
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
          <strong>Fulano de Tal</strong><br/> 
          <mail>artesvisuais.ead@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 
         
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária mínima de integralização curricular: 3280 horas</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-artes-visuais.json', true); $grade = json_decode($json); ?>

            <!-- Loop pelos módulos -->
            <?php foreach($grade as $modulo => $disciplinas) { ?>
            
            <li class='semestre'> 
              <button><h3><?php $modulo = str_replace('_', ' ', $modulo); echo $modulo; ?></h3></button> 
              <ul> 

                <div class="rotulos-matriz"> 
                  <div>Disciplina</div> 
                  <div>Ementa</div> 
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
 
 
        <h2 id='corpo-docente'>Corpo docente</h2> 
 
        <div class="administrativo"> 
          <p><strong>Coordenação</strong><br/></p> 
 
          <p><strong>Vice coordenação</strong><br/></p> 
 
          <p><strong>Colegiado do curso</strong> 
            <br>Andreia Chiari Lins 
            <br>Ariane De Nadai
          </p> 
 
          <p><strong>Núcleo Docente Estruturante</strong> 
            <br>Andreia Chiari Lins 
            <br>Erick Orloski 
          </p> 
        </div> 
 
        <ul class="docentes"> 

          <li class="professor"> 
            <a href="" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Nome</span> 
              Doutorado 
            </a> 
          </li> 
        </ul> 
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2008</h3> 
        <p><strong>Coordenação do Curso</strong><br/></p> 
        <p><strong>Polos atendidos</strong><br/></p> 

 
    </section> 
 
  </div> 
 
  <section id='faq-curso' class="secao-destacada"> 
    <div class='container'> 
      <h2 class="titulo-destacado">Perguntas frequentes</h2> 
        <ul> 
          <li> 
            <button><h3>O diploma/certificado EAD é válido?</h3></button> 
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p> 
          </li> 
        </ul> 
    </div> 
  </section> 

  <section id='noticias' class="secao-destacada"> 
    <?php $ultimas_noticias = new WP_Query(array( 
      'post_type' => 'noticia', 
      'posts_per_page' => 3, 
      'tax_query' => array( 
          array( 
              'taxonomy' => 'curso-noticia', 
              'field' => 'slug', 
              'terms' => 'Nome', 
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
