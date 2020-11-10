<main class='page curso' id="conteudoPrincipal">

  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

  <section id='info-curso'> 
    <div class="container"> 
      <div class='breadcrumb'>Você está em: <a href='<?php echo site_url(); ?>/cursos'>Cursos</a><i class='fas fa-greater-than'></i><span>Administração</span></div> 
 
      <h1>Administração</h1> 
 
      <div class="colunas"> 
 
        <p class='coluna1 objetivo'>O objetivo principal do Curso de Bacharelado em Administração – modalidade de ensino a distância, é formar o profissional, através do ensino, da pesquisa e da extensão, para contribuir decisivamente para o desenvolvimento das organizações pela construção de um contexto eficaz e pela sua transformação em oportunidades empreendedoras, sem perder de vista a sua inserção no processo de desenvolvimento sócio-econômico, cultural e político da sociedade em que estas se inserem.</p> 
 
        <div class="coluna2"> 
          <p> 
            <strong>Nível: </strong>Graduação<br/> 
            <strong>Formação: </strong>Bacharelado<br/> 
            <strong>Duração: </strong>4,5 anos (9 semestres)<br/> 
            <strong>Modalidade: </strong>Semipresencial<br/> 
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
            <!-- <li><a title="Mostrar corpo docente" href='#corpo-docente'>Corpo docente</a></li>  -->
            <li><a title="Mostrar ofertas do curso" href='#ofertas-anteriores'>Ofertas</a></li> 
          </ul> 
        </div> 
 
        <!-- <h4>Contato</h4>  -->
 
        <!-- <p class="contato-curso"> 
          <strong>Fulano de Tal</strong><br/> 
          <mail>email</mail> 
          <span><i class="fas fa-phone"></i>(27) 4009-2091</span> 
        </p>  -->
 
      </aside> 
 
      <div class="coluna1"> 
 
        <h2 id='perfil-do-egresso'>Perfil do egresso</h2> 

        <p>O Curso de Bacharelado em Administração da Universidade Federal do Espírito Santo pretende formar profissionais com conhecimentos conceituais e técnicos necessários ao seu desempenho, capazes de exercer seu papel com consciência crítica em relação aos contextos organizacionais e sociais em que estiver inserido.</p>
        <p>Como profissionais com responsabilidades sociais e competência técnica, pretende-se que os egressos do Curso possuam conhecimentos que os habilitem ao exercício de suas atividades com consciência de sua atuação política como mediadores dos conflitos sociais contemporâneos. </p>
        <p>Além disso, pretende-se que eles consigam desenvolver habilidades como comunicação interpessoal e expressão adequada em documentos técnicos e científicos; de intervenção criativa nas questões organizacionais apresentadas; de compreensão do todo organizacional e sua relação com o meio ambiente; de desenvolvimento de estratégias adequadas de atuação; de estabelecimento de alternativas segundo prioridades diferenciadas; de conhecimento e adoção de modelos inovadores de gestão; e outras habilidades que os capacitem ao exercício profissional com competência, responsabilidade social e consciência crítica, aliadas à compreensão da necessidade de seu contínuo aperfeiçoamento profissional e intelectual.</p>

        <ol type="A">

        <li>Internalização de valores de responsabilidade social, justiça e ética profissional.O Departamento está fortalecendo linhas de pesquisa que chamam os estudantes à internalização desses valores por meio da elaboração de Trabalhos de Conclusão de Curso que contemplem temas a eles pertinentes. Assim, além da abordagem em sala de aula, os TCC’s revelam a estratégia adotada por meio do número de estudantes que manifestaram interesse em desenvolver suas pesquisas dentro dessa temática, incluindo a responsabilidade social.</li> 

        <li>Sólida formação humanística e visão global que o habilite a compreender o meio social, político, econômico e cultural em que está inserido e a tomar decisões em um mundo diversificado e interdependente.</li>

        <li>Sólida formação técnica e científica para atuar na administração das organizações, além de desenvolver atividades específicas da prática profissional.</li>

        <li>Competência para empreender, analisando criticamente as organizações, antecipando e promovendo suas transformações.</li>

        <li>A capacidade de atuar de forma interdisciplinar pode ser vista por meio da própria estrutura do curso, que procura focar o conteúdo do ementário não só na sua finalidade precípua, como também relacionando-o às disciplinas já cursadas mesmo que não seja em nível de pré-requisito, mas de complementação e interdisciplinaridade.</li>  

        <li>A capacidade de compreensão da necessidade do contínuo aperfeiçoamento profissional e do desenvolvimento da autoconfiança são desafios presentes em todas as disciplinas. Todos os professores procuram, na medida do possível, implementar um processo de avaliação que contemple apresentações de pesquisas realizadas em ambientes organizacionais diversos, de modo geral, onde os estudantes já trabalham ou estagiam, a fim de propiciar a oportunidade de desenvolver a confiança sobre o domínio de determinado tema e das relações de trabalho com o grupo, com a classe e com o professor.</li>
         
        </ol>
 
        <h2 id='curriculo'>Grade curricular</h2> 
        <p>Carga horária mínima de integralização curricular: 3280 horas</p> 
 

        <ul id="matriz"> 
          <!-- Importando json -->
          <?php $json = file_get_contents('grades/grade-administracao.json', true); $grade = json_decode($json); ?>

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
                        <a href="<?php echo get_template_directory_uri(); ?>/arquivos/administracao/<?php echo $d->arquivo; ?>" target="_blank" title='Abrir documento em nova aba'> 
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
 
        <h3>2006</h3> 
        <p><strong>Coordenação do Curso</strong><br/>Teresa Cristina Janes Carneiro</p> 
        <p><strong>Polos atendidos</strong><br/>Alegre, Barra de São Francisco, Cachoeiro de Itapemirim, Colatina, Guaçuí, Linhares, Montanha, Nova Venécia, Santa Teresa, São Mateus, Venda Nova do Imigrante, Vila Velha e Vitória.</p> 

 
    </section> 
 
  </div> 
 

</main>
