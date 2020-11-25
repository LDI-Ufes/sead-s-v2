<main class='page curso' id="conteudoPrincipal">
 
<a class="video-curso" href='https://youtu.be/1ktrKilKMhc' data-lity> 
      <section class='curso-destaque'> 
        <video autoplay loop>
          <source src='<?php echo get_template_directory_uri(); ?>/video/cursos.mp4' type='video/mp4'>
        </video>
 
        <div class='curso-destaque-titulo container'> 
          <i class='fas fa-play-circle'></i> 
          <h2>Conheça o curso de <br>Licenciatura em Pedagogia</h2> 
        </div> 
      </section> 
    </a> 

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Pedagogia</span></div> 
 
      <h1>Pedagogia</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>A Licenciatura EaD em Pedagogia destina-se à formação de professores para exercer funções na: Docência da educação infantil e dos anos iniciais do ensino fundamental, docência dos cursos de ensino médio na modalidade normal, docência da educação profissional da área de serviços, apoio escolar e outras áreas nas quais sejam previstos conhecimentos pedagógicos; Gestão educacional: participação na organização e gestão de sistemas e instituições de ensino; planejamento, execução, coordenação, acompanhamento e avaliação de tarefas próprias do setor da educação; planejamento, execução, coordenação, acompanhamento e avaliação de projetos e experiências educativas não escolares e Produção e difusão do conhecimento do campo da educação.</p> 
 
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
            <li><a title="Mostrar ofertas do curso" href='#ofertas-anteriores'>Ofertas</a></li> 
          </ul> 
        </div> 
 
        <h4>Contato</h4> 
 
        <p class="contato-curso"> 
          <strong>Isabella Maria de Castro Filogônio</strong><br/> 
          <mail>pedagogia.seadufes@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 

        <p>Em consonância com as Diretrizes para formação de professores propomos que o egresso do curso de graduação em pedagogia esteja apto:</p>
        <ul class="lista-conteudo">
       
          <li>à integração e interdisciplinaridade curricular, dando significado e relevância aos conhecimentos e vivência da realidade social e cultural, consoantes às exigências da educação básica e da educação superior para o exercício da cidadania e qualificação para o trabalho;</li>
          <li>à construção do conhecimento, valorizando a pesquisa e a extensão como princípios pedagógicos essenciais ao exercício e aprimoramento do profissional do magistério e ao aperfeiçoamento da prática educativa;</li>
          <li>ao acesso às fontes nacionais e internacionais de pesquisa, ao material de apoio pedagógico de qualidade, ao tempo de estudo e produção acadêmica-profissional, viabilizando os programas de fomento à pesquisa sobre a educação básica;</li>
          <li>às dinâmicas pedagógicas que contribuam para o exercício profissional e o desenvolvimento do profissional do magistério por meio de visão ampla do processo formativo, seus diferentes ritmos, tempos e espaços, em face das dimensões psicossociais, histórico-culturais, afetivas, relacionais e interativas que permeiam a ação pedagógica, possibilitando as condições para o exercício do pensamento crítico, a resolução de problemas, o trabalho coletivo e interdisciplinar, a criatividade, a inovação, a liderança e a autonomia;</li>
          <li>à elaboração de processos de formação do docente em consonância com as mudanças educacionais e sociais, acompanhando as transformações gnosiológicas e epistemológicas do conhecimento;</li>
          <li>ao uso competente das Tecnologias de Informação e Comunicação (TIC) para o aprimoramento da prática pedagógica e a ampliação da formação cultural dos(das) professores(as) e estudantes;</li>
          <li>à promoção de espaços para a reflexão crítica sobre as diferentes linguagens e seus processos de construção, disseminação e uso, incorporando-os ao processo pedagógico, com a intenção de possibilitar o desenvolvimento da criticidade e da criatividade;</li>
          <li>à consolidação da educação inclusiva através do respeito às diferenças, reconhecendo e valorizando a diversidade étnico-racial, de gênero, sexual, religiosa, de faixa geracional, entre outras;</li>
          <li>à aprendizagem e ao desenvolvimento de todos(as) os(as) estudantes durante o percurso educacional por meio de currículo e atualização da prática docente que favoreçam a formação e estimulem o aprimoramento pedagógico das instituições.</li>
      </ul>
        
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária mínima de integralização curricular: 3280 horas</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-pedagogia.json', true); $grade = json_decode($json); ?>

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
                        <a href="/arquivos/pedagogia/<?php echo $d->arquivo; ?>" target="_blank" title='Abrir documento em nova aba'> 
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
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2001</h3>
        <p><strong>Coordenação de Curso: </strong>Júlio Francelino Ferreira Filho</p>
        <p><strong>Cre@ads atendidos: </strong>Alegre, Barra de São Francisco, Cachoeiro de Itapemirim, Colatina, Guaçuí, Linhares, Montanha, Nova Venécia, Santa Teresa, São Mateus, Venda Nova do Imigrante, Vila Velha e Vitória.</p>

        <h3>2014</h3>
        <p><strong>Coordenação de Curso:</strong> Iguatemi Santos Rangel</p>
        <p><strong>Polos atendidos: </strong>Afonso Cláudio, Aracruz, Baixo Guandu, Cachoeiro de Itapemirim, Castelo, Colatina, Domingos Martins, Ecoporanga, Itapemirim, Iúna, Linhares, Mantenópolis, Mimoso do Sul, Montanha, Pinheiros, Piúma, Santa Leopoldina, Santa Teresa, Vargem Alta e Venda Nova do Imigrante.</p>
        <p><a href="<?php echo get_template_directory_uri(); ?>/arquivos/ofertas/Pedagogia-Oferta2014.pdf" title="Baixar arquivo de informações da oferta 2014" target="_blank">Mais informações da oferta</a></p>
      
        <h3>2020</h3>
        <p><strong>Polos atendidos: </strong>Castelo, Ecoporanga, Nova Venécia, Piúma e Santa Leopoldina.</p>
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
              'terms' => 'Pedagogia', 
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
