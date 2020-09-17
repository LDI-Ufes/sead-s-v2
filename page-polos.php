<?php get_header(); ?> 
 
<main id="conteudoPrincipal" class='container page page-polos'> 
  <div class="breadcrumb"> 
    Você está em:  
    <span>Polos</span> 
  </div> 
 
  <section class="container-texto"> 
    <h1>Polos</h1> 
    <p>Os polos de apoio presencial são as unidades operacionais para o desenvolvimento descentralizado de atividades pedagógicas e administrativas relativas aos cursos e programas ofertados a distância pelas instituições públicas de ensino superior no âmbito do Sistema UAB. Mantidos por Municípios ou Governos de Estado, os polos oferecem a infraestrutura física, tecnológica e pedagógica para que os alunos possam acompanhar os cursos a distância.</p> 
    <p>O polo de apoio presencial também pode ser entendido como "local de encontro" onde acontecem os momentos presenciais, o acompanhamento e a orientação para os estudos, as práticas laboratoriais e as avaliações presenciais.</p> 
    <blockquote>O objetivo dos polos é oferecer o espaço físico de apoio presencial aos alunos da sua região, mantendo as instalações físicas necessárias para atender aos alunos em questões tecnológicas, de laboratório, de biblioteca, entre outras.</blockquote> 
    <p>A Superintendência de Educação a Distância-SEAD da Universidade Federal do Espírito Santo-UFES está presente em 27 polos de apoio presencial da Universidade Aberta do Brasil (UAB), estrategicamente espalhados por várias regiões do estado do Espírito Santo.</p> 
  </section> 
 
  <section class="container-texto"> 
    <div class="container-lista">
        <h2>Selecione um polo para exibir mais informações</h2> 
        <ul id="lista-polos"></ul> 
    </div>
    <div class="container-mapa"><?php include 'svg/mapaES-polos.svg'; ?></div> 
  </section> 
</main> 
 
<?php get_footer(); ?> 
 
<script> 
 
  $(function () { 
    var polos = []; 
 
    $.getJSON('/sead/wp-content/themes/sead-s-v2/js/polos.json', function (data) { 
      $.each(data.polo, function (i, municipio) { 
        var lItem = '<li id="'+ municipio.id +'">' + '<button class="polo-titulo">' + municipio.nome + '</button>' + 
                      '<div class="polo-info">' + 
                        '<i class="fa fa-user" style="margin-right:5px;"></i> <b>Coordenador</b><br>' + municipio.coord + '<br><br>' + 
                        '<i class="fa fa-envelope" style="margin-right:5px;"></i> <b>E-mail(s)</b> <br>' + municipio.email + '<br><br>' + 
                        '<i class="fa fa-phone" style="margin-right:5px;"></i> <b>Telefone(s)</b> <br>' + municipio.telefone + '<br><br>' + 
                        '<i class="fas fa-map-marker-alt" style="margin-right:5px;"></i> <b>Endereço</b> <br>' + municipio.endereco + 
                      '</div>' + 
                    '</li>'; 
        $(lItem).appendTo("#lista-polos"); 
      }); 
    }).then(function(){ 
      $(".polo-titulo").click( function(){ 
        $('li').not($(this).parent()).removeClass('expandido'); 
        $(this).parent().toggleClass('expandido'); 
        $('#lista-polos li .polo-info').hide(); // Edge 
        $('#lista-polos li.expandido .polo-info').show(); // Edge 
        $('html, body').animate({ scrollTop: $(this).offset().top-($(window).height() / 2 - 200) }, 800); 
        $('#mapaES-polos #comPolos path').removeClass('selecionado'); 
        let parentID = '#' + $('.expandido').attr('id'); 
        $('#mapaES-polos #comPolos path' + parentID).addClass('selecionado'); 
      });} 
    ); 
  }); 
 
  function mostrarContatoPolo(municipio){ 
    var idt = '#' + municipio; 
    $('li').not( idt ).removeClass('expandido'); 
    $('li'+idt).toggleClass('expandido'); 
    $('#lista-polos li .polo-info').hide(); // Edge 
    $('#lista-polos li.expandido .polo-info').show(); // Edge 
    $('html, body').animate({ scrollTop: $("li"+idt).offset().top-($(window).height() / 2 - 200) }, 800); 
    $('path').removeClass('selecionado'); 
    $('path' + idt).addClass('selecionado'); 
  }; 
 
</script> 
