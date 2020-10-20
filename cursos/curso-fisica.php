<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Física</span></div> 
 
      <h1>Física</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>O objetivo principal do Curso de Licenciatura em Física, modalidade a distância, é formar professores capacitados a desenvolverem, de forma pedagogicamente consistente, o ensino-aprendizagem da Física clássica e contemporânea, valorizando a sua interação com as ciências afins, o mundo tecnológico, os determinantes e as implicações sociais daí decorrentes.</p> 
 
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
          <strong>Lívia Teixeira Lemos</strong><br/> 
          <mail>secretariafisicaead@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 

        <p>O licenciado em física na modalidade EaD da UFES deverá ter sólidos conhecimentos pedagógicos, de física, matemática e também uma consciência ambiental e étnico racial adquirida nas disciplinas do curso que permitirão desenvolver um trabalho de qualidade e que seja capacitado para:</p>
        <ol class="lista-conteudo">
          <li>Ministrar aulas teóricas e experimentais de física básica para o Ensino Médio e/ou Superior.</li>
          <li>Usar a capacidade de análises para desenvolver pesquisas em ensino de Física visando à melhoria da qualidade das aulas.</li>
          <li>Desenvolver projetos experimentais de pesquisa e extensão voltados para ensino de ciências físicas.</li>
          <li>Realizar a aprendizagem continuada, fazendo da sua prática profissional fonte de produção de conhecimento;</li>
          <li>Ter consciência da importância social da profissão como possibilidade de desenvolvimento social coletivo;</li>
          <li>Ter a capacidade de disseminar e utilizar os conhecimentos físicos adquiridos no dia-a-dia da vida da comunidade;</li>
          <li>Ter uma visão crítica com relação ao papel social da Ciência e à sua natureza epistemológica, compreendendo o processo histórico-social de sua construção;</li>
          <li>Enfatizar a formação cultural e humanística, com ênfase nos valores éticos e profissionais e nas questões étnico-raciais.</li>
          <li>Discutir aspectos relacionados à sustentabilidade e a educação ambiental no contexto dos conteúdos de algumas disciplinas do curso.</li>
        </ol>
        <p>Em um país multiétnico e multirracial como o Brasil, será fundamental que o egresso possua sensibilidade e valores éticos no âmbito das questões étnico-raciais, contribuindo à construção de uma sociedade mais justa e igual para todos. Além disso, é importante que o egresso contribua para o desenvolvimento de uma cultura da sustentabilidade e de mais atenção aos problemas ambientais.</p>

        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total de integralização curricular: 3335 horas</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-fisica.json', true); $grade = json_decode($json); ?>

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
          <p><strong>Coordenação</strong><br/>José Alexandre Nogueira</p> 
        </div> 
 
        <ul class="docentes"> 

          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1885284194756497" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Alan Miguel Velasquez Toribio</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5729487301175195" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Alfredo Gonçalves Cunha</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7660992016546465" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Anderson Coser Gaudio</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9283775492064031" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Antônio Canal Neto</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2380353135803549" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Breno Rodrigues Segatto</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2528679879816545" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Carlos Augusto Cardoso Passos</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1328163673123152" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Clisthenis Ponce Constantinidis</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5465449494182034" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Davi Cabral Rodrigues</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8953964693512884" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Denise Costa Assafrão de Lima</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9401385573887851" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Edson Passamani Caetano</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7331959117489023" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Fernando Nespoli Pansini</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7169430092692431" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Flavio Gimenes Alvarenga</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3344738411070832" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Gabriel Luchini </span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6372536076880230" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Galen Mihaylov Sotkov</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6143294915531803" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Geide Rosa Coelho</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8736403052879718" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Giuseppi Gava Camiletti</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3879935393431243" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Humberto Belich Junior</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3074997830683878" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Jair Carlos Checon de Freitas</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9030024304752445" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Jorge Luís Gonzalez Alfonso</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6774401855734421" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>José Alexandre Nogueira</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5445869592199028" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>José Luís Passamai Junior</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2820404320026694" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>José Rafael Capua Proveti</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5193649615872035" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Júlio Cesar Fabris</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3562894103432242" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Marcos Tadeu D'Azeredo Orlando</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3366999814625339" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Miguel Angelo Schettino Junior</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5707156831919279" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Oliver Fabio Piattella</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4306539548466706" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rogerio Netto Suave</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8959105081565479" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ronald Oliveira Francisco</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7149134147983654" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Sergio Mascarello Bisch</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4992784379693871" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Sergio Vitorino de Borba Gonçalves</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5243363621794078" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Thiago Eduardo Pedreira Buen</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2498870168245521" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Thieberson da Silva Gomes</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6782992379960964" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ulysses Camara da Silva</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9908042258225541" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Valberto Pedruzzi Nascimento</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6846011112691877" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Valerio Marra</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4038237972209273" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Vinicius Candido Mota</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1465127043013658" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Wanderlã Luis Scopel</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8332147920469110" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Wendel Silva Paz</span> 
              Doutorado 
            </a> 
          </li> 
        </ul> 
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2008</h3>
        <p><strong>Coordenação de Curso:</strong> Marcos Tadeu D'Azeredo Orlando</p>
        <p><strong>Polos atendidos:</strong> Afonso Cláudio, Aracruz, Bom Jesus do Norte, Conceição da Barra, Domingos Martins, Ecoporanga, Itapemirim, Iúna, Mantenópolis, Mimoso do Sul, Pinheiros, Piúma, Santa Leopoldina.</p>

        <h3>2014</h3>
        <p><strong>Coordenação de Curso:</strong> Valério Marra</p>
        <p><strong>Polos atendidos:</strong> Aracruz, Cachoeiro de Itapemirim, Colatina, Linhares, Piúma, Santa Teresa e Venda Nova do Imigrante.</p>
        <p><a href="<?php echo get_template_directory_uri(); ?>/arquivos/ofertas/Fisica-oferta2014.pdf" title="Abrir arquivo de informações da oferta 2014" target="_blank">Mais informações sobre a oferta</a></p>

        <h3>2020</h3>
        <p><strong>Coordenação de Curso:</strong> José Alexandre Nogueira</p>
        <p><strong>Polos atendidos:</strong> Aracruz, Linhares, Piúma, Venda Nova do Imigrante e Vila Velha.</p>

 
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
              'terms' => 'Física', 
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
