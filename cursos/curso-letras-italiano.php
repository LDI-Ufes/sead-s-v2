<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Letras Italiano</span></div> 
 
      <h1>Letras Italiano</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>O Curso de Licenciatura de Letras Italiano na modalidade EaD visa fundamentalmente à formação do professor na língua estrangeira para o ensino fundamental e médio.</p> 
 
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
            <li><a title="Mostrar corpo docente" href='#corpo-docente'>Corpo docente</a></li> 
            <li><a title="Mostrar ofertas do curso" href='#ofertas-anteriores'>Ofertas</a></li> 
          </ul> 
        </div> 
 
        <h4>Contato</h4> 
 
        <p class="contato-curso"> 
          <strong>Karoliny Tosta</strong><br/> 
          <mail>letrasitalianoufes@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2063</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 
        <p>Qualificamos o perfil dos egressos do curso de Licenciatura em Letras Italiano EaD pelas competências a serem exercidas em seu ofício de docente, que assim se estruturam:</p>
        <ol type="I">
          <li>o reconhecimento da Escola como uma instituição que, além de promover a educação formal, promova a cidadania;</li>
          <li>a renovação contínua de seu ofício por meio da pesquisa, da participação de eventos intra e interinstitucional;</li>
          <li>a atuação profissional na instituição de ensino deve abranger a participação na gestão da Escola ou similar, com especial atenção ao projeto pedagógico;</li>
          <li>a partir do pressuposto de que a interdisciplinaridade esteve presente no projeto pedagógico, o egresso terá feito o empoderamento para desenvolver o seu oficio em diferentes espaços educativos públicos e/ou privados;</li>
          <li>a partir do pressuposto de que a interdisciplinaridade esteve presente no projeto pedagógico, o egresso será capaz de desenvolver relações interpessoais que valorizem o trabalho coletivo e intercultural, seja no âmbito do processo de ensino-aprendizagem, seja na esfera da gestão escolar;</li>
          <li>por conta da inserção do curso na modalidade EaD, prevemos que o licenciado saiba manejar os recursos da TDICs na edificação de atividades cooperativas na sala de aula e/ou na organização acadêmica;</li>
          <li>que o egresso, como professor, tenha na leitura um hábito para promoção da discussão de referenciais teóricos contemporâneos educacionais à sua área de formação, como também estar atualizado sobre novas propostas didático – pedagógicas emanadas dos órgãos gestores da educação no Brasil;</li>
          <li>que o egresso, a partir da experiência da leitura e da pesquisa, aliada ao uso das TDICs, estruture material didático dinâmico, inovador e que introduza práticas avaliativas pautadas pelas teorias do ensino de língua;</li>
          <li>devido ao recurso sistemático da produção de portfólios durante a graduação, o egresso, ao final do curso, terá alimentado este memorial e terá construído um consubstanciado currículo de formação.</li>
        </ol>
         
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total de integralização curricular: 3.200h</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-letras-italiano.json', true); $grade = json_decode($json); ?>

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
          <p><strong>Coordenação</strong><br/>Mariza Silva de Moraes</p> 
 
          <p><strong>Designer Instrucional</strong><br/>Otávio Lube dos Santos</p> 
 
          <p><strong>Colegiado do curso</strong> 
          <br>Mariza Silva de Moraes
          <br>Leni Ribeiro Leite
          <br>Luis Fernando Bulhões Figueira
          <br>Julio Francelino Ferreira Filho
          <br>Maria Aparecida Souza Coelho
          <br>Bruna Frizzera
          <br>Sueli Gomes
          </p> 
 
          <p><strong>Núcleo Docente Estruturante</strong> 
            <br>Orlando Lopes Albertino
            <br>Leila Tesch
            <br>Fernanda Muller
            <br>Eduardo Augusto Moscon Oliveira
            <br>Mariza Silva de Moraes
          </p> 
        </div> 
 
        <ul class="docentes"> 

          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9217767617403655" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Alexandro Braga Vieira</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6954814492049911" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Edna da Silva Polese</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7388566141261259" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Edson Rufino de Souza</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6749345243234671" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Fernanda Silva Veloso</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9246869415381080" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Herberth Gomes Ferreira</span> 
              Mestrado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7858518863941371" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>João Assis Rodrigues</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1222376244857241" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Leni Ribeiro Leite</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5073990176516263" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Luciana Dias Thomaz</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5498101714248941" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Luciana Lanhi Balthazar</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4882978450027561" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ludimila Caliman Campos</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3443269939361169" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Mariza Silva de Moraes</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6910760911003070" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Mônica Lopes Smiderle De Oliveira</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2414179194113087" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Nilma Moreira da Penha</span> 
              Mestrado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6167625366359201" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rafael Ferreira da Silva</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8290558218053006" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Reginaldo Celio Sobrinho</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3539192483058949" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rosemeire dos Santos Brito</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3043880926873607" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Santinho Ferreira de Souza</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0616774249777386" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Vitor da Cunha Gomes</span> 
              Doutorado 
            </a> 
          </li> 

        </ul> 

        <h3>Tutores</h3>
        <ul class="docentes">
          <li class="professor"> 
              <span>Celiane Tainá Belon </span> 
              Especialização 
          </li> 
          <li class="professor"> 
              <span>Cleuzeni Felberg Betini Taquini</span> 
              Especialização
          </li> 
          <li class="professor"> 
              <span>Gisele Santos de Nadai</span> 
              Mestrado
          </li> 
          <li class="professor"> 
              <span>Jessica Santos Prasser Croce</span> 
              Especialização
          </li> 
          <li class="professor"> 
              <span>Kátia Regina Giesen</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Luana Araujo Neto</span> 
              Especialização 
          </li>
          <li class="professor"> 
              <span>Luana Santos Lemos</span> 
              Mestrado
          </li> 
          <li class="professor"> 
              <span>Luzimara de Souza Cordeiro</span> 
              Mestrado 
          </li> 
          <li class="professor"> 
              <span>Maiara Oliveira Nascimento</span> 
              Especialização 
          </li>
          <li class="professor"> 
              <span>Marcia Cristina de Aguiar</span> 
              Especialização 
          </li> 
          <li class="professor"> 
              <span>Marcos Antônio Borges</span> 
              Especialização 
          </li> 
          <li class="professor"> 
              <span>Roberta Decarli Bof</span> 
              Mestrado 
          </li>
          <li class="professor"> 
              <span>Savio Bernardo Scussulin Vieira Guimaraes</span> 
              Especialização 
          </li> 
          <li class="professor"> 
              <span>Sueli Gomes da Silva Oliveira</span> 
              Especialização
          </li>
          <li class="professor"> 
              <span>Verônica Belfi Roncetti Paulino</span> 
              Mestrado
          </li> 
        </ul>
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2018</h3> 
        <p><strong>Coordenação do Curso</strong><br/>Mariza Silva de Moraes</p> 
        <p><strong>Polos atendidos</strong><br/>Afonso Cláudio, Alegre, Colatina, Domingos Martins, Iúna, Santa Teresa, Vargem Alta e Venda Nova do Imigrante.</p> 

 
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
              'terms' => 'Letras Italiano', 
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
