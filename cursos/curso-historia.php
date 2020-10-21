<main class='page curso' id="conteudoPrincipal">

  <section class="destaque destaque-imagem" style="background-image: linear-gradient(#043166, rgba(4, 49, 102, 0.3)), url('<?php echo get_template_directory_uri()?>/img/capas/historia.jpg')"></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>História</span></div> 
 
      <h1>História</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>O objetivo da Licenciatura EaD em História é formar professores para o Ensino Fundamental e Médio com visão holística da História, familiarizados com o desenvolvimento das ideias e com a metodologia científica, em seus múltiplos aspectos teóricos e práticos, permitindo o debate com a comunidade científica e com a população em geral, e capazes de difundir um processo de ensino-aprendizagem abordando as diferentes áreas de História de forma integrada e fundamentada na observação e experimentação.</p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>4 anos (8 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
          </p> 

          <p class="situacao"><strong>Situação: </strong> 
            <br>Oferta 2020 em andamento. 
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
          <strong>Sônia Maria Calisto</strong><br/> 
          <mail>historia.ead.ufes@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 

        <p>A formulação de um perfil desejado para o profissional egresso do Curso de História, na habilitação em Licenciatura, implica em reconhecer que se trata de desafios relativamente à formação pedagógica, científica, cultural e política, desafios que se impõem a docentes e discentes e se relacionam à (ao):</p>

        <ol class="lista-conteudo">

          <li>autonomia intelectual;</li>
          <li>pensamento reflexivo;</li>
          <li>capacidade para atuar de forma ética, crítica e criativa na busca de soluções para as questões que lhe são apresentadas pela sociedade;</li>
          <li>capacidade para trabalhar em equipes interdisciplinares;</li>
          <li>criatividade, iniciativa e flexibilidade nas relações interpessoais e profissionais;</li>
          <li>respeito à diversidade própria dos ambientes profissionais;</li>
          <li>compreensão dos elementos e dos processos relativos ao meio natural e ao construído;</li>
          <li>sólida fundamentação filosófica, teórica e metodológica;</li>
          <li>capacidade de aplicar o conhecimento em prol do desenvolvimento social;</li>
          <li>disposição para o aprendizado contínuo;</li>
          <li>capacidade de se interagir com as Novas Tecnologias de Informação e de Comunicação (NTICs), tendo-as como instrumentos que possam contribuir para o desenvolvimento de um trabalho reflexivo e crítico;</li>
          <li>domínio e constante aprimoramento das abordagens científicas inerentes ao processo de produção e aplicação do conhecimento em História;</li>
          <li>conhecimento e sobre o uso das novas tecnologias de informação e comunicação a serem utilizados no seu cotidiano profissional e social.</li>
        </ol>

 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total de integralização curricular: 3210 horas</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-historia.json', true); $grade = json_decode($json); ?>

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
 
 
        <h2 id='corpo-docente'>Corpo docente</h2> 
 
        <div class="administrativo"> 
          <p><strong>Coordenação</strong><br/>Geraldo Antônio Soares</p> 
         </div> 
 
        <ul class="docentes"> 

          <li class="professor"> 
              <span>Adriana Pereira Campos</span> 
              Doutorado 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7373603338907946" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Alessandro da Silva Guimarães</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
              <span>André Ricardo Valle Vasco Pereira</span> 
              Doutorado 
          </li>
          <li class="professor"> 
              <span>Antônio Carlos Amador Gil</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3242122972916358" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Belchior Monteiro Lima Neto</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
              <span>Carlos Vinícius Costa de Mendonça</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Claudia Pereira do Carmo Murta</span> 
              Doutorado 
          </li>  
          <li class="professor"> 
              <span>Daisa Teixeira</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Edson Maciel Junior</span> 
              Doutorado 
          </li>  
          <li class="professor"> 
              <span>Emiliano Unzer Macedo</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Érica Cristhyane Morais da Silva</span> 
              Doutorado 
          </li>  
          <li class="professor"> 
              <span>Fabio Muruci dos Santos</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Geraldo Antonio Soares</span> 
              Doutorado 
          </li>  
          <li class="professor"> 
              <span>Gilvan Ventura da Silva</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Josemar Machado de Oliveira</span> 
              Doutorado 
          </li>  
          <li class="professor"> 
              <span>Juçara Luzia Leite</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Julio Cesar Bentivoglio</span> 
              Doutorado 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4297153426007763" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Keila Cardoso Teixeira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
              <span>Leonor Franco de Araujo</span> 
              Mestrado
          </li> 
          <li class="professor"> 
              <span>Maria Beatriz Nader</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2276583662907573" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Miriã Lúcia Luiz</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
              <span>Patrícia Maria da Silva Merlo</span> 
              Doutorado 
          </li>   
          <li class="professor"> 
              <span>Reginaldo Celio Sobrinho</span> 
              Doutorado 
          </li> 
          <li class="professor"> 
              <span>Rossana Gomes Britto</span> 
              Doutorado 
          </li>   
          <li class="professor"> 
              <span>Sandra Kretli da Silva</span> 
              Doutorado 
          </li>
          <li class="professor"> 
              <span>Sandro José da Silva</span> 
              Doutorado 
          </li>   
          <li class="professor"> 
              <span>Sergio Alberto Feldman</span> 
              Doutorado 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4446167716354950" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ueber José de Oliveira</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
              <span>Valter Pires Pereira</span> 
              Doutorado 
          </li>   
        </ul> 
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2014</h3>
        <p><strong>Coordenação de Curso:</strong> Geraldo Antônio Soares</p>
        <p><strong>Polos atendidos:</strong> Afonso Cláudio, Aracruz, Cachoeiro de Itapemirim, Castelo, Ecoporanga, Itapemirim, Iúna, Linhares, Montanha, Pinheiros, Piúma e Santa Teresa.</p>
        <p><a href="<?php echo get_template_directory_uri(); ?>/arquivos/ofertas/Historia-oferta2014.pdf" title="Abrir arquivo de informações da oferta 2014" target="_blank">Mais informações sobre a oferta</a></p>

        <h3>2020</h3>
        <p><strong>Coordenação de Curso:</strong> Geraldo Antônio Soares</p>
        <p><strong>Polos atendidos:</strong> Alegre, Conceição da Barra, Domingos Martins, Mantenópolis e Vargem Alta.</p>
  
 
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
              'terms' => 'História', 
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
