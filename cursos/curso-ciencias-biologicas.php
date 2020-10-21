<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Ciências Biológicas</span></div> 
 
      <h1>Ciências Biológicas</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>O curso de Licenciatura EaD em Ciências Biológicas forma professores capazes de exercer o magistério nas disciplinas de Ciências, no Ensino Fundamental, e de Biologia, no Ensino Médio, bem como em disciplinas da área de Ciências Biológicas no Ensino Superior, contribuindo para a formação docente, de qualidade, fundamentada na associação entre teorias e práticas, inclusive mediante a capacitação em serviço.</p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>4 anos (8 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
          </p> 
          <p class="situacao"><strong>Situação: </strong> 
            <br>Oferta 2020 aberta. 
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
          <mail>biologia.ead.ufes@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 

        <p>Ao término de sua formação, os egressos do curso deverão ser capazes de compreender os elementos e processos concernentes ao meio natural e ao construído, com base nos fundamentos filosóficos, teóricos e metodológicos inerentes ao curso de Ciências Biológicas, bem como dominar e aprimorar as abordagens científicas pertinentes ao processo de produção e aplicação do conhecimento biológico.</p>
        <p>Os egressos do curso de Licenciatura em Ciências Biológicas/EaD da UFES são qualificados para atuar no ensino básico nas redes pública e privada, seja na regência, seja na execução de projetos educativos, seja, ainda na gestão escolar.</p>
        <p>São oriundos de nossa instituição a quase totalidade dos docentes de Ciências Biológicas que atuam no Ensino Fundamental e Médio nos diferentes municípios onde o curso já foi ofertado.</p>
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total de integralização curricular: 3420 horas</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-ciencias-biologicas.json', true); $grade = json_decode($json); ?>

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
          <p><strong>Coordenação</strong><br/>Luciana Dias Thomaz</p> 
        </div> 
 
        <ul class="docentes"> 

          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7199119599752978" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Debora Dummer Meira</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0341541450627705" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Diolina Moura Silva</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4288236123208847" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Francisco Candido Cardoso Barreto</span> 
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
            <a href="http://lattes.cnpq.br/2474229900403321" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Monique Pereira do Nascimento</span> 
              Mestrado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6127436626143032" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rogerio Faustini Cuzzuol</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3539192483058949" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rosimeire dos Santos Brito</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1956218219090768" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Sarah Maria Vargas</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2533393164526798" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Tânia Mara Guerra</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9562316044920852" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Taissa Rodrigues Marques da Silva</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2606838076983468" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Valeria Fagundes</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3694434981958328" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Viviana Borges Corte</span> 
              Doutorado 
            </a> 
          </li>
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8973606745193293" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Yuri Luiz Reis Leite</span> 
              Doutorado 
            </a> 
          </li>
        </ul> 
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 

        <h3>2014</h3> 
        <p><strong>Coordenação do Curso</strong><br/>Luciana Dias Thomaz</p> 
        <p><strong>Polos atendidos</strong><br/>Ecoporanga, Itapemirim, Iúna, Mimoso Do Sul, Pinheiros, Vargem Alta.</p> 
        <p><a href="<?php echo get_template_directory_uri(); ?>/arquivos/ofertas/Ciencias-Biologicas-oferta2014.pdf" title="Abrir arquivo de informações da oferta 2014" target="_blank">Mais informações sobre a oferta</a></p>
 
        <h3>2020</h3> 
        <p><strong>Coordenação do Curso</strong><br/>Luciana Dias Thomaz</p> 
        <p><strong>Polos atendidos</strong><br/>Bom Jesus do Norte, Linhares, Montanha, Nova Venécia e Vila Velha.</p> 

 
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
              'terms' => 'Ciências Biológicas', 
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
