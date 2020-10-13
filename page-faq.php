<?php get_header(); ?>

<main class="page container faq" id="conteudoPrincipal">
  <section class="breadcrumb">Você está em: <span>Dúvidas Frequentes</span></section>
  <h1>Dúvidas Frequentes (FAQ)</h1>

  <ul>
    <li>
      <button><h2>O que é um curso a distância semipresencial?</h2></button>
      <p>É um curso feito na modalidade de ensino a distância, mas que exige a presença do discente no polo de apoio presencial ao ensino a distância em datas pré-fixadas para realização de encontros presenciais, aulas experimentais, avaliações, entrega de trabalho entre outras solicitações.</p>
    </li>
    <li>
      <button><h2>Os encontros presencias são obrigatórios? </h2></button>
      <p>O aluno deve possuir uma frequência igual ou superior a 75% da carga horária contabilizada para os encontros presenciais. As monitorias extras são opcionais e não são contabilizadas nesse cálculo.</p>
    </li>
    <li>
      <button><h2>O que é um tutor a distância e um tutor presencial?</h2></button>
      <p>O tutor a distância é o mediador entre o professor, os tutores presenciais e os alunos dos polos. Já o tutor presencial é responsável pelo acompanhamento direito e sistemático dos alunos nos polos.</p>
    </li>      
    <li>
      <button><h2>É possível realizar a transferência de curso da modalidade presencial para a modalidade a distancia e vice-versa?</h2></button>
      <p>Sim. Será assegurada a transferência de alunos da modalidade presencial para a modalidade a distância e vice-versa, conforme edital do Processo Seletivo para Vagas Surgidas. Maiores informações podem ser obtidas no <a href="http://www.psvs.ufes.br" target="_blank">sítio do PSVS Ufes</a>.</p>
    </li>      
    <li>
      <button><h2>É possível aproveitar disciplinas cursadas na modalidade presencial, para a modalidade a distância?</h2></button>
      <p>Sim. Será assegurado o aproveitamento de disciplina cursada na modalidade presencial ou em outros cursos da modalidade a distância, desde que haja equivalência de conteúdos e de carga horária das disciplinas cursadas.</p>
    </li>     
  </ul>
</main>

<?php get_footer(); ?>

<script>
  $('button').click(function () {
    $(this).parent().toggleClass('ativo');
    $(this).siblings().slideToggle();
    $('button').not($(this)).siblings().slideUp().parent().removeClass('ativo');
  });

</script>

