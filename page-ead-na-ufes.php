<?php get_header('principal'); ?>

<main class="page" id="ead-na-ufes">

  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
    <section class="destaque">

      <div class="titulo container">
        <h1>Como funciona <br> a EaD na Ufes?</h1>
        <i class="fas fa-play-circle"></i>
      </div>

    </section>
  </a>

  <div class="container">
    <section class="breadcrumb">Você está em: <a>Ensino</a> <span class="seta">></span> <span>EaD na Ufes</span></section>

    <div>
      <p>A Educação a Distância constitui-se em um instrumento eficaz de democratização do acesso ao ensino superior e uma opção de qualificação profissional. </p>
      <blockquote>Hoje, por meio da política de educação a distância assumida pela Administração Central da Ufes, o programa de Interiorização leva conhecimento a todas as regiões do estado.</blockquote>
      <p>Os Polos Municipais UAB interligam diversos municípios capixabas, os quais se apresentam como parceiros institucionais na oferta de ensino, pesquisa, formação e demais ações direcionadas ao conhecimento.</p>
      <p>A Secretaria de Ensino a Distância – Sead é a instância responsável por promover ações educativas e de formação, nas quais a mediação didático-pedagógica dos processos de ensino e de aprendizagem ocorre por meio da utilização das tecnologias da informação e da comunicação, nos ambientes virtuais de aprendizagens – AVA, e, presencialmente, nos polos municipais de apoio presencial da Universidade Aberta do Brasil – UAB e em outros espaços educativos.</p>     
    </div>
  </div> <!-- container -->
    
  <section id="destaques">
    <ul class="container">
      <button class="seta-prev">Anterior</button>
      <li class="item ativo"><?php include 'svg/encontros-pres.svg' ?><div class="grupo"><h2>Encontros presenciais</h2>O encontro presencial semanal obrigatório se dará com pequenos grupos de alunos e o tutor presencial nas salas e laboratórios em cada Polo UAB integrado ao curso.</div></li>
      <li class="item"><?php include 'svg/encontros-pres.svg' ?><div class="grupo"><h2>Momentos semipresenciais</h2>Os encontros semipresenciais entre alunos, tutores e professores especialistas ocorrerão no AVA e nas webconferências conforme planejamento do curso ou necessidade para esclarecimentos e aprofundamento de conteúdos.</div></li>
      <li class="item"><?php include 'svg/encontros-pres.svg' ?><div class="grupo"><h2>Ambiente Virtual de Aprendizagem</h2>A Plataforma Moodle trata-se de um sistema de gerenciamento de grupos de estudo, para dar suporte aos cursos oferecidos na modalidade a distância da Ufes, acompanhamento e ajuda ao aluno, executada no AVA e acessível via interface WEB.</div></li>
      <button class="seta-next">Próximo</button>
      <div class="dots">
        <ul aria-hidden="true">
          <li class="dot ativo">1</li>
          <li class="dot">2</li>
          <li class="dot">3</li>
        </ul>
      </div>
    </ul>
  </section>

  <section id="agentes" class="container">
    <h2>Agentes envolvidos</h2>
    <p>A equipe multidisciplinar EaD da Ufes apresenta quadro de profissionais com características diferenciadas, atribuições claras e definidas. Dentre as responsabilidades de cada profissional está o compromisso de pesquisar, planejar e aperfeiçoar os seus fazeres, para aplicá-los aos processos de oferta dos cursos EaD desta Universidade.</p>
    <ul>
      <li><h3>Professor</h3>A função é exercida por um professor da área de conhecimento diretamente relacionada à disciplina, cujo papel é responsabilizar-se por todos os processos de sua integralização, da apresentação do material didático à mediação dos saberes neles contidos junto a tutores e a estudantes e, de igual modo, é responsável pela concepção e elaboração dos instrumentos de avaliação da aprendizagem, aplicação, coordenação da correção dessas avaliações, além de responsabilizar-se pela  regularização da situação do aluno junto às instâncias de registros de notas da Ufes.</li>
      <li><h3>Tutor Presencial</h3>A função é exercida por professor vinculado às redes públicas, com formação nas áreas de conhecimento específico das disciplinas ou do Curso, que se vinculam a eles por módulo, semestre ou disciplina, com no mínimo um ano de experiência no exercício do magistério, cujo principal papel, dentre outros, é acolher, estimular e orientar os estudantes, mediando seus saberes e relações estabelecidas com os demais sujeitos envolvidos com o Curso que integraliza, responsáveis por setores acadêmicos da Ufes aos quais se vinculam.</li>
      <li><h3>Tutor a Distância</h3>A função é exercida por professor vinculado às redes públicas, com formação nas áreas de conhecimento específico das disciplinas ou dos Cursos aos quais se vinculam, por módulo, semestre ou por disciplina, com no mínimo um ano de experiência no exercício do magistério, cujo papel é mediar as atividades dos alunos nos ambientes on-line e as relações estabelecidas entre eles, tutores e professores especialistas, esclarecendo-lhes as dúvidas quanto aos conteúdos e a outros saberes relacionados ao Curso. De igual modo, auxilia o Professor na avaliação das aprendizagens dos alunos.</li>
      <li><h3>Coordenador do curso</h3>A função é exercida por um professor efetivo do Departamento e Centro ofertantes dos cursos, cujo papel é responsabilizar-se amplamente pelo gerenciamento dos processos de oferta do Curso sob sua responsabilidade.</li>
      <li><h3>Secretário de curso</h3>A função é exercida ​preferencialmente por servidor efetivo da Ufes, que tem como atribuição secretariar e assessorar as coordenações dos cursos ofertados na modalidade EaD da SEAD nas suas relações com os sujeitos e instâncias a eles vinculados​, especialmente nas atividades voltadas ao ensino, à pesquisa e à extensão.</li>
      <li><h3>Designer Instrucional</h3></li>
      <li><h3>Coordenador de Polo</h3>A função é exercida por professor vinculado às redes públicas, graduado e com, no mínimo, três anos de experiência no magistério, da educação básica ou superior, cuja atribuição, dentre outras, é responsabilizar-se pela gestão do Polo e por acompanhar os processos acadêmicos de integralização dos Cursos oferecidos na instância acadêmica que coordena.</li>
    </ul>
  </section>
  
</main>

<?php get_footer(); ?>

<script>

$('.seta-next').click(function(){
  $('.item.ativo').next().addClass('ativo');
  $('.item.ativo').prev().removeClass('ativo');
  $('.dot.ativo').next().addClass('ativo');
  $('.dot.ativo').prev().removeClass('ativo');
  $('.item.ativo').focus();
});

$('.seta-prev').click(function(){
  $('.item.ativo').prev().addClass('ativo');
  $('.item.ativo').next().removeClass('ativo');
  $('.dot.ativo').prev().addClass('ativo');
  $('.dot.ativo').next().removeClass('ativo');
  $('.item.ativo').focus();
});

</script>