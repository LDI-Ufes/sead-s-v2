<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Química</span></div> 
 
      <h1>Química</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>O objetivo fundamental do Curso de Licenciatura em Química EaD é formar professores como sujeitos de transformação da realidade brasileira, comprometidos com a busca de respostas aos desafios e problemas existentes em nossas escolas, especialmente as da rede pública.</p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>4 anos (8 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
          </p> 
          <p class="situacao"><strong>Situação: </strong><br>
          <?php $situacaoCurso = get_post_custom_values('situacao'); if ($situacaoCurso != "") { echo $situacaoCurso[0]; } ?>
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
            <!-- <li><a title="Mostrar corpo docente" href='#corpo-docente'>Corpo docente</a></li>  -->
            <li><a title="Mostrar ofertas do curso" href='#ofertas-anteriores'>Ofertas</a></li> 
          </ul> 
        </div> 
 
        <h4>Contato</h4> 
 
        <p class="contato-curso"> 
          <strong>Pedro Henrique Passamani</strong><br/> 
          <mail>quimica1.ead@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2064</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 
        <p><strong>No âmbito profissional:</strong></p>
        <ul class="lista-conteudo">
          <li>ter consciência da importância social da profissão como possibilidade de desenvolvimento social coletivo;</li>
          <li>ter capacidade de disseminar e utilizar o conhecimento químico para a comunidade;</li>
          <li>atuar no ensino da Educação Básica, utilizando metodologia de ensino variada;</li>
          <li>contribuir para despertar o interesse científico e o desenvolvimento intelectual do educando;</li>
          <li>organizar e utilizar laboratórios de química;</li>
          <li>produzir e analisar criticamente livros didáticos e paradidáticos e indicar bibliografia para o ensino da Química;</li>
          <li>analisar e elaborar programas para a Educação Básica;</li>
          <li>exercer a sua profissão com espírito dinâmico, criativo, na busca de novas alternativas educacionais, enfrentando como desafio as dificuldades da docência;</li>
          <li>conhecer criticamente os problemas educacionais brasileiros;</li>
          <li>identificar no contexto da realidade escolar os fatores determinantes do processo educativo, tais como o contexto socioeconômico, a política educacional, a administração escolar e os fatores específicos do processo ensino-aprendizagem de Química;</li>
          <li>assumir conscientemente a tarefa educativa, cumprindo o papel social de preparar os estudantes para o exercício consciente da cidadania.</li>
        </ul>
        <p><strong>No âmbito do ensino de Química:</strong></p>
        <ul class="lista-conteudo">
          <li>refletir de forma crítica acerca de sua prática docente, identificando problemas de ensino e aprendizagem;</li>
          <li>compreender e avaliar criticamente os aspectos sociais, tecnológicos, ambientais, políticos e éticos relacionados às aplicações da química na sociedade;</li>
          <li>saber trabalhar em laboratório e saber usar a experimentação em química como recurso didático;</li>
          <li>possuir conhecimentos básicos do uso de computadores e sua aplicação em ensino de Química;</li>
          <li>possuir conhecimentos dos procedimentos e normas de segurança no trabalho;</li>
          <li>conhecer teorias psicopedagógicas que fundamentam o processo de ensino-aprendizagem, bem como os princípios de planejamento educacional;</li>
          <li>conhecer os fundamentos, a natureza e as principais pesquisas de ensino de Química;</li>
          <li>conhecer e vivenciar projetos e propostas curriculares de ensino de Química;</li>
          <li>ter atitude favorável à incorporação, em sua prática, dos resultados da pesquisa educacional em ensino de Química, visando a solucionar os problemas relacionados ao ensino-aprendizagem.</li>
        </ul>
         
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total de integralização curricular: 3200 horas</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-quimica.json', true); $grade = json_decode($json); ?>

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
 
 
        <!-- <h2 id='corpo-docente'>Corpo docente</h2> 
 
        <div class="administrativo"> 
          <p><strong>Coordenação</strong><br/>Pedro Mitsuo Takahashi</p> 
 
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
        </ul>  -->
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2014</h3> 
        <p><strong>Coordenação do Curso</strong><br/>Rafael de Queiroz Ferreira / Pedro Mitsuo Takahashi</p> 
        <p><strong>Polos atendidos</strong><br/>Aracruz, Itapemirim e Iúna.</p> 
        <p><a href="<?php echo get_template_directory_uri(); ?>/arquivos/ofertas/Quimica-oferta2014.pdf" title="Abrir arquivo de informações da oferta 2014" target="_blank">Mais informações sobre a oferta</a></p> 

        <h3>2020</h3> 
        <p><strong>Coordenação do Curso</strong><br/>Pedro Mitsuo Takahashi</p> 
        <p><strong>Polos atendidos</strong><br/>Aracruz, Conceição da Barra, Iúna, Mimoso do Sul e Vitória.</p>
 
    </section> 
 
  </div> 

  <section id='noticias-curso' class="secao-destacada"> 
    <?php $ultimas_noticias = new WP_Query(array( 
      'post_type' => 'noticia', 
      'posts_per_page' => 3, 
      'tax_query' => array( 
          array( 
              'taxonomy' => 'curso-noticia', 
              'field' => 'slug', 
              'terms' => 'Química', 
            ), 
        ), 
    )); 
 
    if ($ultimas_noticias->found_posts > 2) : ?> 
 
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
