<?php get_header('principal'); ?>

<main class="page">

  <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
    <section class="destaque">

      <div class="titulo container">
        <h1>Secretaria de Ensino <br> a Distância</h1>
        <i class="fas fa-play-circle"></i>
      </div>

    </section>
  </a>

  <section class="conteudo container">

    <section class="breadcrumb">Você está em: <span>Ensino</span> <span class="seta">></span> <span><b>Secretaria de Ensino a Distância</b></span></section>

    <div id="misVisValCap" class="missaoAtivo">

      <div class="misVisVal missaoCap">
        <h2>
          <span class="missao ativo">missão</span>
          <span class="visao"aria-hidden="true">visão</span>
          <span class="valores" aria-hidden="true">valores</span>
        </h2>

        <p>Propiciar a missão do ensino superior e qualificação profissional aos cidadãos na modalidade EaD, de forma colaborativa.</p>
      </div>

      <div class="misVisVal visaoCap">
        <h2>
          <span class="missao" aria-hidden="true">missão</span>
          <span class="visao ativo">visão</span>
          <span class="valores" aria-hidden="true">valores</span>
        </h2>

        <p>Propiciar a visão do ensino superior e qualificação profissional aos cidadãos na modalidade EaD, de forma colaborativa.</p>
      </div>

      <div class="misVisVal valoresCap">
        <h2>
          <span class="missao" aria-hidden="true">missão</span>
          <span class="visao" aria-hidden="true">visão</span>
          <span class="valores ativo">valores</span>
        </h2>

        <p>Propiciar os valores do ensino superior e qualificação profissional aos cidadãos na modalidade EaD, de forma colaborativa.</p>
      </div>

    </div>
    
    <div>
      
      <p>A Universidade Federal do Espírito Santo – Ufes, ao longo de sua história, tem formado geração de profissionais e, por isso, conquistou respeito e credibilidade junto à sociedade espírito-santense. A partir de 2001,  credenciou-se junto ao Ministério da Educação – MEC para a oferta de cursos superiores na modalidade de EaD.</p>
      
      <p>Para dar suporte a essa iniciativa, a Ufes introduziu, na sua estrutura organizacional, o Núcleo de Educação Aberta e a Distância – Ne@ad. Ao longo dos anos, o ne@ad consolidou-se como órgão mediador e gestor das propostas de EaD, tornando-se responsável pela introdução sistematizada dessa cultura na Universidade, bem como  pela mediação, organização, oferta de cursos e demais atividades acadêmicas à população espírito-santense.</p>
      
      <p>A partir de abril/2014, por meio da Resolução n. 08/2014 do Conselho Universitário, foi aprovada a reestruturação organizacional da Ufes. Nessa nova estrutura, o ne@ad passou a ser denominado “Secretaria de Ensino a Distância” – Sead.</p>
  
      <p>Em 2006, a Universidade fez adesão ao projeto piloto do curso de Administração, a distância,  do Sistema Universidade Aberta do Brasil – UAB. Atualmente oferta cursos EaD em 27 Polos Municipais de Apoio Presencial –  UAB. Assim, a Ufes apresenta-se como parceira institucional no desenvolvimento do ensino, pesquisa, formação continuada e demais ações direcionadas à formação de cidadãos deste estado.</p>
      
      <blockquote>Nesse contexto, a  proposta de EaD da Ufes visa a intensificar a cultura da educação aberta e a distância na Universidade, bem como a utilização das novas tecnologias da comunicação e da informação nos espaços formadores internos.</blockquote>
    
      <p>O primeiro curso EaD da Ufes foi o de Pedagogia, por meio do qual formaram-se 6.171 professores das séries iniciais do ensino fundamental dos sistemas públicos de ensino dos 78 municípios capixabas, que atuavam sem formação em nível superior.</p>
    
    </div>

  </section>

</main>

<?php get_footer(); ?>

<script>

  $('.missao').click(function() {
    $('#misVisValCap').addClass('missaoAtivo');
    $('#misVisValCap').removeClass('visaoAtivo');
    $('#misVisValCap').removeClass('valoresAtivo');
  })
  
  $('.visao').click(function() {
    $('#misVisValCap').removeClass('missaoAtivo');
    $('#misVisValCap').addClass('visaoAtivo');
    $('#misVisValCap').removeClass('valoresAtivo');
  })

  $('.valores').click(function() {
    $('#misVisValCap').removeClass('missaoAtivo');
    $('#misVisValCap').removeClass('visaoAtivo');
    $('#misVisValCap').addClass('valoresAtivo');
  })

</script>