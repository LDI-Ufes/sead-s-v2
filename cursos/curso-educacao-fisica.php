<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Educação Física</span></div> 
 
      <h1>Educação Física</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>Formar professores de Educação Física habilitados a buscar a compreensão das complexas relações presentes no cotidiano escolar e na cultura da escola, sendo eles atores ativos de suas práticas pedagógicas, construtores e reconstrutores de seus conhecimentos na relação escolar.</p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Licenciatura<br/> 
            <strong>Duração: </strong>5 anos (10 semestres)<br/> 
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
            <!-- <li><a title="Mostrar corpo docente" href='#corpo-docente'>Corpo docente</a></li> 
            <li><a title="Mostrar ofertas do curso" href='#ofertas-anteriores'>Ofertas</a></li>  -->
          </ul> 
        </div> 
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 

        <p>O perfil do egresso esperado é o de um professor convicto de sua opção profissional, ciente da sua responsabilidade social, competente no exercício de suas funções, interessado no processo de troca de experiências pedagógicas e no processo de formação continuada.</p>
         
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária total: 3145 horas</p> 
 
        <ul id="matriz"> 
          <?php $json = file_get_contents('grades/grade-educacao-fisica.json', true); $grade = json_decode($json); ?>

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

        </ul> 
 
 
        <!-- <h2 id='corpo-docente'>Corpo docente</h2>  -->

        <!-- <h2 id='ofertas-anteriores'>Ofertas do curso</h2> 
 
        <h3>2008</h3> 
        <p><strong>Coordenação do Curso</strong><br/></p> 
        <p><strong>Polos atendidos</strong><br/>Alegre, Barra de São Francisco, Cachoeiro de Itapemirim, Colatina, Guaçuí, Linhares, Montanha, Nova Venécia, Santa Teresa, São Mateus, Venda Nova do Imigrante, Vila Velha, Vitória.</p>  -->

 
    </section> 
 
  </div> 
 
</main>
