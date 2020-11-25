<?php get_header(); ?> 
 
<main class="container page page-contatos" id="conteudoPrincipal"> 
 
    <section class="breadcrumb">Você está em: <strong>Ensino</strong><i class="fas fa-greater-than"></i><span>Contatos</span></section> 
   
    <div class='container-texto'> 
      <h1>Contatos</h1> 
       
      <span class="alerta">Você está com alguma dúvida? Veja antes a quem deve recorrer.</span> 
       
      <p><strong>Coordenador de curso</strong><br>Para assuntos relacionados ao planejamento e à organização do curso em geral, através do Ambiente Virtual de Aprendizagem (AVA) de seu Curso EAD.</p> 
      <p><strong>Secretaria do curso</strong><br>Para assuntos relacionados a processos, tais como matrículas, termos de estágio, solicitação de histórico escolar, trancamento de curso, etc.</p> 
      <p><strong>Professor e tutores de disciplina</strong><br>Para assuntos relacionados ao conteúdo, aos prazos e ao modo de avaliação de disciplinas específicas, contate o professor. Para as atividades presencias, contate o tutor presencial; já para as provas, atividades e o lançamento dessas notas na plataforma, contate o tutor a distância. O contato com professores e tutores se dá através do Ambiente Virtual de Aprendizagem (AVA) de seu Curso EAD.</p> 
       
      <span class="alerta">Caso sua demanda não esteja entre as opções acima, ligue para a Secretaria Única da SEAD, através do número <strong style="white-space: nowrap;">(27) 4009-2091</strong>.</span> 
       
      <h2>Graduação</h2> 
       
      <ul id="graduacao" class="lista-contatos"> 
        <div class="titulos"><span>Curso</span><span>Coordenação</span><span>Secretaria</span></div> 
 
      </ul> 
       
      <h2>Especialização</h2> 
       
      <ul id="especializacao" class="lista-contatos"> 
        <div class="titulos"><span>Curso</span><span>Coordenação</span><span>Secretaria</span></div> 
         
      </ul> 
    </div> 
 
</main> 
 
<?php get_footer(); ?> 
 
<script>  
    
  $(function () {  
    var contatosGracuacao = [];  
  
    $.getJSON('/wp-content/themes/sead-v2.1/js/contatos.json', function (data) {  
      $.each(data.contatoGraduacao, function (i, curso) {  
        var lItem = '<li><h3>' + curso.curso + '</h3>' +   
                      '<div><span>Coordenação</span>'+ curso.coord +'</div>' +  
                      '<div><span>Secretaria</span>'+ curso.secr + '<br>'+ curso.secr_telefone +'<br>'+ curso.secr_email +'</div>' +  
                    '</li>';  
        $(lItem).appendTo("#graduacao");  
      });  
    });  
  });  
    
    $(function () {  
    var contatosEspecializacao = [];  
  
    $.getJSON('/wp-content/themes/sead-v2.1/js/contatos.json', function (data) {  
      $.each(data.contatoEspecializacao, function (i, curso) {  
        var lItem = '<li><h3>' + curso.curso + '</h3>' +   
                      '<div><span>Coordenação</span>'+ curso.coord +'</div>' +  
                      '<div><span>Secretaria</span>'+ curso.secr + '<br>'+ curso.secr_telefone +'<br>'+ curso.secr_email +'</div>' +  
                    '</li>';  
        $(lItem).appendTo("#especializacao");  
      });  
    });  
  });  
    
  </script>