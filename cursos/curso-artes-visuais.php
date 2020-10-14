<main class='page curso' id="conteudoPrincipal">

  <section class="destaque destaque-imagem" style="background-image: linear-gradient(#043166, rgba(4, 49, 102, 0.3)), url('<?php echo get_template_directory_uri()?>/img/capas/artes-visuais.jpg')"></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Artes Visuais</span></div> 
 
      <h1>Artes Visuais</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>O curso forma, de modo consistente e contextualizado, professores para atuarem como arte-educadores no sistema de ensino, desde a Educação Infantil ao Ensino Fundamental e Ensino Médio</p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>4 anos (8 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
            <strong>Conceito Geral: </strong>3 
          </p> 
          <p class="situacao"><strong>Situação: </strong> 
            <br><strong>Sem previsão de nova oferta.</strong> 
          </p> 
        </div> 
      </div> 
    </div> 
  </section> 
 
    <section id='conteudo-curso' class='container colunas'> 
 
      <aside class="coluna2"> 
        <!-- <button id='dropdown-menu'>Menu<i class='fas fa-angle-down'></i></button> --> 
         
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
          <mail>artesvisuais.ead@gmail.com</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 
        <p>O Curso de Licenciatura em Artes Visuais se propõe um programa de forma a qualificar os seus graduados para o exercício da atividade docente em nível da Educação Infantil, Ensino Fundamental e Médio, assim como para a Pós-graduação, ou para oportunidades de trabalho fora do ambiente acadêmico. Dentro dessas perspectivas, o programa de Licenciatura em Artes visa a oferecer aos licenciandos uma formação que priorize a carreira acadêmica, o que necessita, além de uma sólida base de conteúdos do ensino da Arte, de uma formação que contemple áreas de aplicação e sua interação com as práticas culturais.</p> 
        <p>O curso  deve garantir que seus egressos tenham: uma sólida formação de conteúdos de Arte e de seu ensino; uma formação que lhes prepare para enfrentar os desafios das rápidas transformações sociais, ambientais e tecnológicas da sociedade, do mercado de trabalho e das condições de exercício profissional. </p> 
        <p>Por outro lado, deseja-se as seguintes características para o Licenciado em Artes Visuais: </p> 
        <ul class="lista-conteudo">       
          <li>visão de seu papel social de educador e capacidade de se inserir em diversas realidades com sensibilidade para interpretar as ações dos educandos;</li> 
          <li>visão da contribuição que a aprendizagem das artes visuais pode oferecer à formação dos indivíduos para o exercício de sua cidadania, respeitando a diversidade social e cultural;</li> 
          <li>visão de que o conhecimento estético pode e deve ser acessível a todos, e consciência de seu papel na superação dos preconceitos traduzidos pela angústia, inércia ou rejeição, que, muitas vezes, ainda estão presentes no ensino-aprendizagem da disciplina nas escolas da Educação Básica.</li> 
         </ul>
 
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
                        <a href="/arquivos/artes/<?php echo $d->arquivo; ?>" target="_blank" title='Abrir documento em nova aba'> 
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
          <p><strong>Coordenação</strong><br/>Erick Orloski</p> 
 
          <p><strong>Vice coordenação</strong><br/>Andreia Chiari Lins</p> 
 
          <p><strong>Colegiado do curso</strong> 
            <br>Andreia Chiari Lins 
            <br>Ariane De Nadai  
            <br>Dulcemar da Penha Pereira Uliana  
            <br>Erick Orloski 
            <br>Fernanda Monteiro Barreto Camargo 
            <br>Júlio Francelino Ferreira Filho 
            <br>Maria Goretti Moro Gomes 
            <br>Orlando da Rosa Faria 
          </p> 
 
          <p><strong>Núcleo Docente Estruturante</strong> 
            <br>Andreia Chiari Lins 
            <br>Erick Orloski 
            <br>Fernanda Monteiro Barreto Camargo 
            <br>Stela Maris Sanmartin 
          </p> 
        </div> 
 
        <ul class="docentes"> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7471423621490631" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
                <span>Adriana Rosely Magro</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/5450445723454857" target="_blank"> 
                <span>Aissa Afonso Guimarães</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/2093865480708815" target="_blank"> 
                <span>Alexandre Emerick Neves</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/8500994614485241" target="_blank"> 
                <span>Andreia Chiari Lins</span> 
                Doutorado 
            </a> 
          </li> 
           
          <li class="professor"> 
              <span>Aparecido José Cirilo</span> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/4344109121068889" target="_blank"> 
                <span>César Pereira Cola</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/5756326758544618" target="_blank"> 
                <span>Erick Orloski</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
              <span>Ericler Oliveira Gutierrez Ouedraogo</span> 
          </li> 
 
          <li class="professor"> 
              <span>Fabiola Veloso Menezes</span> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/3626587521917442" target="_blank"> 
                <span>Fernanda Monteiro Barreto Camargo</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/8230499627602455" target="_blank"> 
                <span>Fernando Augusto dos Santos Neto</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/5302702058647922" target="_blank"> 
                <span>Fernando Gómez Alvarez</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/5152530982132224" target="_blank"> 
                <span>Gaspar Leal Paz</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/5263258908602198" target="_blank"> 
                <span>Gerda Margit Schutz Foerste</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/9563994096531487" target="_blank"> 
                <span>João Wesley de Souza</span> 
              Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
              <span>José Otávio Lobo Name</span> 
          </li> 
 
          <li class="professor"> 
              <span>Julia Almeida de Mello</span> 
          </li> 
 
          <li class="professor"> 
                <span>Juliana de Souza Silva Almonfrey</span> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/1595799399527303" target="_blank"> 
                <span>Larissa Fabricio Zanin</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/3501642639807824" target="_blank"> 
                <span>Leticia Nassar Matos Mesquita</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/5766230898713582" target="_blank"> 
                <span>Lincoln Guimarães Dias</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/5659824152931044" target="_blank"> 
                <span>Maira Pego de Aguiar</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/9509542300688827" target="_blank"> 
                <span>Marcos Paulo Martins de Freitas</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/2152811885251427" target="_blank"> 
                <span>Maria Angélica Vago Soares</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
              <span>Maria Aparecida Ramaldes</span> 
          </li> 
          </p> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/4349371263342966" target="_blank"> 
                <span>Maria Auxiliadora de Carvalho Corassa</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/1501571974747341" target="_blank"> 
                <span>Maria Gorete Dadalto Gonçalves</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/8089325619947496" target="_blank"> 
                <span>Maria Regina Rodrigues</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/4414451806305375" target="_blank"> 
                <span>Moema Lúcia Martins Rebouças</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
              <span>Myriam Salomão</span> 
          </li> 
          </p> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/1991586309948453" target="_blank"> 
                <span>Ricardo Maurício Gonzaga</span> 
                Doutorado 
            </a> 
          </li> 
           
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/0741130770905561" target="_blank"> 
                <span>Rodrigo Otávio da Silva Paiva</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/3169230790004855" target="_blank"> 
                <span>Stela Maris Sanmartin</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/4202486740653920" target="_blank"> 
                <span>Telma Elita Juliano Valente</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
            <a title="Abrir perfil na plataforma Lattes em nova aba" href="http://lattes.cnpq.br/4619436077412697" target="_blank"> 
                <span>Vera Lúcia de Oliveira Simões</span> 
                Doutorado 
            </a> 
          </li> 
 
          <li class="professor"> 
              <span>Verônica Devens Costa</span> 
          </li> 
        </ul> 
 
        <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2008</h3> 
        <p><strong>Coordenador do Curso</strong><br/>Maria Gorete Dadalto Gonçalves</p> 
        <p><strong>Polos atendidos</strong><br/>Afonso Cláudio, Alegre, Aracruz, Bom Jesus do Norte, Cachoeiro de Itapemirim, Colatina, Conceição da Barra, Domingos Martins, Ecoporanga, Itapemirim, Iúna, Linhares, Mantenópolis, Nova Venécia, Pinheiros, Piúma, Santa Leopoldina, Santa Teresa, São Mateus, Vargem Alta, Venda Nova do Imigrante, Vila Velha.</p> 
 
        <h3>2014</h3> 
        <p><strong>Coordenador do Curso</strong><br/>Maria Gorete Dadalto Gonçalves / Andreia Chiari Lins / Erick Orloski</p> 
        <p><strong>Polos atendidos</strong><br/>Afonso Cláudio, Aracruz, Cachoeiro de Itapemirim, Colatina, Domingos Martins, Itapemirim, Iúna, Linhares, Pinheiros, Piúma, Santa Teresa e Vargem Alta.</p> 
 
    </section> 
 
  </div> 
<!--  
  <section id='faq-curso' class="secao-destacada"> 
    <div class='container'> 
      <h2 class="titulo-destacado">Perguntas frequentes</h2> 
        <ul> 
          <li> 
            <button><h3>O diploma/certificado EAD é válido?</h3></button> 
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p> 
          </li> 
          <li> 
            <button><h3>O diploma/certificado EAD é válido?</h3></button> 
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p> 
          </li> 
          <li> 
            <button><h3>O diploma/certificado EAD é válido?</h3></button> 
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p> 
          </li> 
          <li> 
            <button><h3>O diploma/certificado EAD é válido?</h3></button> 
            <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p> 
          </li> 
 
        </ul> 
    </div> 
  </section>  -->

  <section id='noticias' class="secao-destacada"> 
    <?php $ultimas_noticias = new WP_Query(array( 
      'post_type' => 'noticia', 
      'posts_per_page' => 3, 
      'tax_query' => array( 
          array( 
              'taxonomy' => 'curso-noticia', 
              'field' => 'slug', 
              'terms' => 'Artes Visuais', 
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
