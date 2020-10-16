<main class='page curso' id="conteudoPrincipal">
 
  <section class="destaque destaque-imagem" style="background-image: linear-gradient(#043166, rgba(4, 49, 102, 0.3)), url('<?php echo get_template_directory_uri()?>/img/capas/biblioteconomia.jpg')"></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Biblioteconomia</span></div> 
 
      <h1>Biblioteconomia</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>A Licenciatura EaD em Biblioteconomia visa contribuir com a formação de um profissional bibliotecário que atenda as demandas da sociedade brasileira. Nessa perspectiva pretende-se que seu egresso atue como mediador da informação, do conhecimento e da cultura, promovendo a democratização do acesso e da produção de saberes no seu contexto social.</p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>4 anos (8 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
          </p> 

          <p class="situacao"><strong>Situação: </strong> 
            <br><strong>Oferta 2020 aberta.</strong> 
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
 
        <!-- <h4>Contato</h4> 
 
        <p class="contato-curso"> 
          <strong>Fulano de Tal</strong><br/> 
          <mail>artesvisuais.ead@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p>  -->
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 

        <p>Na conclusão deste Curso, espera-se ter formado um profissional bibliotecário que seja:</p>
        <ul class="lista-conteudo">
          <li>autônomo e apto para o desempenho das atividades do ciclo informacional (produção, organização, gestão, mediação, acesso, uso e apropriação da informação);</li>
          <li>autônomo e apto para desenvolver na sociedade a competência em informação e propiciar a democratização da informação em suas múltiplas dimensões;</li>
          <li>capaz de atuar nos processos de construção e reconstrução da realidade social de modo crítico e reflexivo;</li>
          <li>capaz de agir com proficiência, criatividade e ética no enfrentamento dos problemas em suas práticas profissionais;</li>
          <li>capaz de empenhar-se no processo contínuo de seu aprimoramento profissional;</li>
          <li>capaz de comprometer-se com o desenvolvimento científico e tecnológico de seu campo de atuação.</li>
        </ul>
 

        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total de integralização curricular: 2895 horas</p> 
 
        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-biblioteconomia.json', true); $grade = json_decode($json); ?>

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
          <p><strong>Coordenação</strong><br/>Gleice Pereira</p> 
        </div> 
 
        <ul class="docentes"> 

          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5900211605766512" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Antonio Luiz Cardoso</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9286238899762353" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Carla Erler Mattos Batista</span> 
              Mestrado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9280443047358807" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Daniela Lucas da Silva</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0335559966184833" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Gleice Pereira</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3591203225395311" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>José Alimateia Ramos</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5544177179431479" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Lucileide Andrade de Lima do Nascimento</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4416354606492444" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Marcelo Nair dos Santos</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9975938191663170" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Maria Cristina Figueiredo Guasti</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8808213730426235" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Marta Leandro da Mata</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7448832399554247" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Meri Nádia Gerlin</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1917445298594080" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Mônica Alves da Fonseca</span> 
              Especialização 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5863424980906507" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Nádia Eloina Fraga</span> 
              Especialização 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8619170123781914" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Neusa Balbina de Souza</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1072374287964657" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Paula Regina Ventura Amorim Gonçalez</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1620542010841099" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rachel Cristina Mello Guimarães</span> 
              Doutorado 
            </a> 
          </li>
        </ul> 

        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2020</h3>
        <p><strong>Coordenação de Curso:</strong> Gleice Pereira</p>
        <p><strong>Polos atendidos:</strong> Afonso Cláudio, Alegre, Aracruz, Baixo Guandu, Bom Jesus do Norte, Cachoeiro de Itapemirim, Colatina, Domingos Martins, Itapemirim, Iúna, Mantenópolis, Mimoso do Sul, Pinheiros, Santa Leopoldina, Santa Teresa, São Mateus, Vargem Alta, Venda Nova do Imigrante.</p>


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
              'terms' => 'Biblioteconomia', 
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
