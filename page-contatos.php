<?php get_header('principal'); ?>

<main class="page container" id="contatos">

    <section class="breadcrumb">Você está em: <strong>Ensino</strong><i class="fas fa-greater-than"></i><span>Contatos</span></section>

    <h1>Contatos</h1>
    
    <span class="alerta">Você está com alguma dúvida?<br>Veja antes a quem deve recorrer.</span>
    
    <p><strong>Coordenador de curso</strong><br>Para assuntos relacionados ao planejamento e à organização do curso em geral, através do AVA-Moodle.</p>
    <p><strong>Secretaria do curso</strong><br>Para assuntos relacionados à processos, tais como matrículas, termosde estágio, solicitação de histórico escolar, trancamento de curso, etc. </p>
    <p><strong>Professor e tutores de disciplina</strong><br>Para assuntos relacionados ao conteúdo, prazos e ao modo de avaliação de disciplinas específicas, contate o professor. Para as atividades presencias, contate o tutor presencial; já para as provas, atividades e o lançamento dessas notas na plataforma, contate o tutor a distância. O contato com professores e tutores se dá através do AVA-Moodle.</p>
    
    <span class="alerta">Caso sua demanda não esteja entre as opções acima, ligue para a Secretaria Geral da SEAD, através do número <strong>27 4009-2999</strong></span>
    
    <h2>Graduação</h2>
    
    <ul id="graduacao">
      <div class="titulos"><span>Curso</span><span>Secretaria</span><span>Coordenação</span></div>

    </ul>
    
    <h2>Especialização e Aperfeiçoamento</h2>
    
    <ul id="especializacao">
      <div class="titulos"><span>Curso</span><span>Secretaria</span><span>Coordenação</span></div>
      
    </ul>

</main>

<?php get_footer(); ?>

<script>
  
  $(function () {
    var contatosGracuacao = [];

    $.getJSON('/sitiosead/wp-content/themes/sead-v2/js/contatos.json', function (data) {
      $.each(data.contatoGraduacao, function (i, curso) {
        var lItem = '<li><h3>' + curso.curso + '</h3>' + 
                      '<div><span>Secretaria</span>'+ curso.secr + '<br>'+ curso.secr_telefone +'<br>'+ curso.secr_email +'</div>' +
                      '<div><span>Coordenação</span>'+ curso.coord + '<br>'+ curso.coord_telefone +'</div>' +
                    '</li>';
        $(lItem).appendTo("#graduacao");
      });
    });
  });
  
    $(function () {
    var contatosEspecializacao = [];

    $.getJSON('/sitiosead/wp-content/themes/sead-v2/js/contatos.json', function (data) {
      $.each(data.contatoEspecializacao, function (i, curso) {
        var lItem = '<li><h3>' + curso.curso + '</h3>' + 
                      '<div><span>Secretaria</span>'+ curso.secr + '<br>'+ curso.secr_telefone +'<br>'+ curso.secr_email +'</div>' +
                      '<div><span>Coordenação</span>'+ curso.coord + '<br>'+ curso.coord_telefone +'</div>' +
                    '</li>';
        $(lItem).appendTo("#especializacao");
      });
    });
  });
  
  </script>