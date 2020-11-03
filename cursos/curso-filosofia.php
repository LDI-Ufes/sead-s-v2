<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Filosofia</span></div> 
 
      <h1>Filosofia</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>A perspectiva central da Licenciatura EaD em Filosofia é o desenvolvimento, de um lado, de habilidades para produzir e lidar com o conhecimento, de maneira radical, crítica, criativa e pluralista, pressupondo procedimentos de pesquisa, numa atitude de investigação contínua no tratamento do conhecimento; do outro lado, o desenvolvimento das competências e das habilidades necessárias à atuação profissional em filosofia. A articulação teoria-prática, além de ser incentivada no interior de cada disciplina, está muito bem organizada ao longo de todo o desenvolvimento curricular. </p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>4 anos (8 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
            <!-- <strong>Conceito Geral: </strong>3  -->
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
          <strong>Thiago Sobreira Marques</strong><br/> 
          <mail>licfilosofia.ead@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2094</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 
        <p>Espera-se que o formando tenha uma formação sólida na História da Filosofia que o capacite para a compreensão e a transmissão dos principais temas, problemas e sistemas filosóficos, assim como para a análise e reflexão crítica da realidade social em que se insere. Espera-se, com isso, que o futuro profissional tenha um conhecimento aprofundado da filosofia e seja competente no exercício das suas atividades. O licenciado deverá estar habilitado a enfrentar com sucesso os desafios e as dificuldades inerentes à tarefa de despertar os jovens para a reflexão filosófica, bem como a transmitir aos alunos do Ensino Fundamental e Médio o legado da tradição e o gosto pelo pensamento inovador, crítico e independente. Os egressos podem contribuir profissionalmente também em outras áreas, no debate interdisciplinar, nas assessorias culturais etc.</p>

        <p><strong>Competências e Habilidades:</strong></p>

        <ul class="lista-conteudo">
          <li>habilidade de formular problemas de um modo especificamente filosófico e de formular e propor soluções nos diversos campos do conhecimento;</li>
          <li>habilidade de desenvolver uma consciência crítica sobre conhecimento, razão e realidade sócio-histórico-política;</li>
          <li>habilidade de analisar e interpretar as questões acerca do sentido e da significação da própria existência e das produções culturais;</li>
          <li>habilidade de perceber a integração necessária entre a filosofia e a produção científica e artística, bem como com o agir individual e coletivo;</li>
          <li>capacidade de relacionar o exercício da crítica filosófica com a promoção integral da cidadania e com o respeito à pessoa, dentro da tradição de defesa dos direitos humanos;</li>
          <li>competência na utilização da informática como instrumento pedagógico.</li>
        </ul>

        <p>O Colegiado do Curso, juntamente com todos os professores, espera que o egresso seja capaz de:</p>

        <ul class="lista-conteudo">
          <li>analisar, compreender, julgar e expor um tema (problema, argumento, tese, conceito, teoria etc.) em forma oral ou escrita;</li>
          <li>analisar um texto, discurso ou experiência e extrair conceitos, teses, argumentos etc., e posicionar-se diante do conteúdo encontrado, comparando-o com outros, variando métodos e pontos de vista;</li>
          <li>investigar e sintetizar, de um ponto de vista ou segundo um procedimento aceitável para o estado atual da arte, um tema ou questão, e fornecer uma solução ou consideração conclusiva, teórica e prática;</li>
          <li>planejar e executar uma exposição (aula, conferência, curso, texto) para público geral, curso de ensino médio e graduação, sobre um tema filosófico.</li>
        </ul>
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total de integralização curricular: 3350h</p> 
 
        <!-- <ul id="matriz"> 
          <?php $json = file_get_contents('grades/grade-filosofia.json', true); $grade = json_decode($json); ?>

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

                <?php } ?>

              </ul> 
            </li>

            <?php } ?>

        </ul>  -->
 
<!--  
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
        </ul>  -->
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2014</h3> 
        <p><strong>Coordenação do Curso</strong><br/>Claudia Pereira do Carmo Murta</p> 
        <p><strong>Polos atendidos</strong><br/>Afonso Cláudio, Aracruz, Baixo Guandu, Cachoeiro de Itapemirim, Castelo, Domingos Martins, Itapemirim, Mantenópolis, Mimoso do Sul, Montanha, Pinheiros, Santa Teresa e Venda Nova do Imigrante.</p> 

 
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
              'terms' => 'Filosofia', 
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
