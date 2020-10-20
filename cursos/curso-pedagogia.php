<main class='page curso' id="conteudoPrincipal">
 
  <section class="curso-destaque"><?php the_post_thumbnail() ?></section>

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
          <p><strong>Coordenação</strong><br/>Iguatemi Santos Rangel</p> 
         </div> 
 
        <ul class="docentes"> 

          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7373603338907946" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Alessandro da Silva Guimarães</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9217767617403655" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Alexandro Braga Vieira</span> 
              Doutorado 
            </a> 
          </li> 
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4004473327151252" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Cleyde Rodrigues Amorim</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0848394898016789" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Denise Meyrelles de Jesus</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8600829409961701" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Débora Monteiro do Amaral</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4115960878343816" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Douglas Christian Ferrari de Melo</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7035954005812531" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Dulcinea Campos Silva</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1029441038069805" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Edna Castro de Oliveira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0593971079410326" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Edson Maciel Júnior</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2060844750389871" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Edson Pantaleão Alves</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3246701331584528" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Eduardo Augusto Moscon Oliveira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4414820772031494" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Eliza Bartolozzi Ferreira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7184033522040803" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Gilda Cardoso de Araújo</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6088850997286228" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Gilfredo Carrasco Maulin</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4245026471647635" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Janinha Gerke de Jesus</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7858518863941371" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>João Assis Rodrigues</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4922760708506266" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>José Américo Cararo</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3044243677860576" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Juçara Luzia Leite</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0529970839857956" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Mariangela Lima de Almeida</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6745822194240257" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Marcelo Lima</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9927289483795110" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Marlene de Fátima Cararo Pires</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2276583662907573" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Miriã Lucia Luiz</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2327451507961703" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Patrícia Gomes Rufino de Andrade</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8436866512999341" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Regina Celi Frechiani Bitte</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6496906753146666" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Regina Helena Silva Simões</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8290558218053006" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Reginaldo Célio Sobrinho</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1326024270450510" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Robson Loureiro</span> 
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
            <a href="http://lattes.cnpq.br/5829639085638451" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Soler Gonzalez</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3149862597424749" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Terezinha Maria Schuchter</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4422269305808605" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Vânia Carvalho de Araújo</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5094999227615859" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Valter Martins Giovedi</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2258402424414309" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Vilmar José Borges</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7471423621490631" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Adriana Magro</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8542248825007935" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Andréa Antolini Grijó</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6585693734181022" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Cláudia Maria Mendes Gontijo</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1768605311310158" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Cleonara Maria Schwartz</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7717139160457330" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Daísa Teixeira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1473912232379405" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Dania Monteiro Vieira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1092652029646547" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ednalva Gutierrez Rodrigues</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3616098103273342" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ericler Oliveira Gutierrez</span> 
              Mestrado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3294719644172070" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Erineu Foerste</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3626587521917442" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Fernanda Monteiro Barreto Camargo</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0730961188712069" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Iguatemi Santos Rangel</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9259877374436417" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Jacyara Silva de Paiva</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4653490966124652" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>João Luiz Simplício Porto</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1973788294795614" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Júlia Rocha Pinto</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1362680854630598" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Júlio Francelino Ferreira Filho</span> 
              Mestrado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3939282778671246" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Kalline Pereira Aroeira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0450221868938200" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Karla Ribeiro de Assis Cezarino</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4297153426007763" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Keila Cardoso Teixeira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0171463367458285" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Kezia Rodrigues Nunes</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1076562311962755" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Kyria Rebeca N. L. Finardi</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3655054745868550" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Marcello Pereira Nunes</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5504378088842871" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Margarete Sacht Goes</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9399371418356916" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Maria Amélia Dalvi</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2783865522513397" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Maria José Campos Rodrigues</span> 
              Mestrado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1114035410099626" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Renata Duarte Simões</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1442579234138944" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Silvana Ventorim</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7335579662236147" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Valdete Côco</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7985936674676993" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Alexsandro Rodrigues</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0054673032961970" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ana Carolina Galvão Marsiglia</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3568062062898469" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Andressa Mafezoni Caetano</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4231564319302829" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Carlos Eduardo Ferraço</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3089785123426262" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Débora Cristina de Araújo</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/6963604132826532" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Elizabete Bassani</span> 
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
            <a href="http://lattes.cnpq.br/3493324457073231" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Gustavo Henrique Araújo Forde</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1205391955459402" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Hellen Castro de Almeida Leite</span> 
              Mestrado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5570074668970394" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Humberto Derci Capai</span> 
              Mestrado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1975169078870006" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ines de Oliveira Ramos</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2477851211882211" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Itamar Mendes da Silva</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4371604685952253" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Ivone Martins de Oliveira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/1684807534900881" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Jair Ronchi Filho</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9550759814628513" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Jaqueline Magalhães Brum</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/5889291921323079" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Junia Freguglia Machado Garcia</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8515689976488963" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Kiusam Regina de Oliveira</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/9721382552736385" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Maria Hermínia Baião Passamai</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0786682219012611" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Mari Inêz Tavares</span> 
              Mestrado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/7161650456080225" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Mirian do Amaral Jonis Silva</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3216357509717121" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Patricia Silveira da Silva Trazzi</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8595961404664412" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rogério Drago</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/4552417282744625" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Rosali Rauta Siller</span> 
              Doutorado 
            </a> 
          </li>  
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0611688078195189" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Sandra Kretli da Silva</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/8330548752405550" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Silvanete Pereira dos Santos</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/2432786277131614" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Sonia Lopes Victor</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/3008422505347658" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Tania Mara Zanotti Guerra Frizzera Delboni</span> 
              Doutorado 
            </a> 
          </li>   
          <li class="professor"> 
            <a href="http://lattes.cnpq.br/0321902761650299" target="_blank" title="Abrir perfil na plataforma Lattes em nova aba"> 
              <span>Tércio Girelli Kill</span> 
              Doutorado 
            </a> 
          </li>  
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
        <p><strong>Coordenação de Curso:</strong> Iguatemi Santos Rangel</p>
        <p><strong>Polos atendidos: </strong>Castelo, Ecoporanga, Nova Venécia, Piúma e Santa Leopoldina.</p>
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
              'terms' => 'Pedagogia', 
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
