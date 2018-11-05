<?php get_header('principal'); ?>

<main class="page container" id="faq">
  <section class="breadcrumb">Você está em: <span>Dúvidas Frequentes</span></section>
  <h1>Dúvidas Frequentes (FAQ)</h1>

  <ul>
    <li>
      <button><h2>O diploma/certificado EAD é válido?</h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>
    <li>
      <button><h2>Como funcionam as aulas e os materiais didáticos? </h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>      
    <li>
      <button><h2>Posso fazer mais de um curso ao mesmo tempo? </h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>      
    <li>
      <button><h2>Onde posso entrar em contato para tirar outras dúvidas? </h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>     
    <li>
      <button><h2>O curso é totalmente a distância? </h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>     
    <li>
      <button><h2>Como funciona o processo de avaliação?</h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>
    <li>
      <button><h2>Como funciona o Trabalho de Conclusão de Curso (TCC)?</h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>
    <li>
      <button><h2>Quais são as vantagens de estudar na modalidade a distância?</h2></button>
      <p>Todo o material didático é disponibilizado on-line, por meio de recursos multimídia, podcasts, vídeos, videoaulas, animações, objetos de aprendizagem e-books, webconferências, no Ambiente Virtual de Aprendizagem. Caso prefira, é possível realizar a impressão.</p>
    </li>
  </ul>
</main>

<?php get_footer(); ?>

<script>
  $('button').click(function () {
    $(this).toggleClass('ativo');
    $(this).siblings().slideToggle().toggleClass('expandido');
    $('button').not($(this)).removeClass('ativo').siblings().slideUp();
  });

</script>

