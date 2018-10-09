<?php get_header('principal'); ?>

<main id="page-polos" class='container'>
  <section class="breadcrumb">Você está em: <span>Polos</span></section>
  <section class="conteudo">
    <h1>Polos</h1>   

    <p>Os polos de apoio presencial são as unidades operacionais para o desenvolvimento descentralizado de atividades pedagógicas e administrativas relativas aos cursos e programas ofertados a distância pelas instituições públicas de ensino superior no âmbito do Sistema UAB. Mantidos por Municípios ou Governos de Estado, os polos oferecem a infraestrutura física, tecnológica e pedagógica para que os alunos possam acompanhar os cursos a distância.
    </p>

    <p>O polo de apoio presencial também pode ser entendido como "local de encontro" onde acontecem os momentos presenciais, o acompanhamento e a orientação para os estudos, as práticas laboratoriais e as avaliações presenciais.
    </p>

    <blockquote>O objetivo dos polos é oferecer o espaço físico de apoio presencial aos alunos da sua região, mantendo as instalações físicas necessárias para atender aos alunos em questões tecnológicas, de laboratório, de biblioteca, entre outras.
    </blockquote>

    <p>A Secretaria de Educação a Distância-SEAD da Universidade Federal do Espírito Santo-UFES está presente em 27 polos de apoio presencial da Universidade Aberta do Brasil (UAB), estratégicamente espalhados por várias regiões do estado do Espírito Santo.
    </p>
  </section>
  <section id="mapaInterativo">         
    <div class="popoverMunicipios">
      <p>Selecione um polo para exibir mais informações</p>

      <ul id="polos">

      </ul>
    </div>
    <?php echo file_get_contents(get_template_directory_uri() . '/svg/mapaES.svg'); ?>

  </section>
</main>

<script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/mostrarContatoPolo.js"></script> 
<?php get_footer(); ?>

<script>
  
  $(function () {
    var polos = [];

    $.getJSON('/sitiosead/wp-content/themes/sead-v2/js/polos.json', function (data) {
      $.each(data.polo, function (i, municipio) {
        var lItem = '<li id="'+ municipio.id +'">' + '<a class="municipioTitulo">' + municipio.nome + '</a>' + 
                      '<div class="info-polo">' +
                        '<i class="fa fa-user"></i> <b>Coordenador</b><br>' + municipio.coord + '<br><br>' +
                        '<i class="fa fa-envelope" style="margin-right:5px;"></i> <b>E-mail(s)</b> <br>' + municipio.email + '<br><br>' +
                        '<i class="fa fa-phone" style="margin-right:5px;"></i> <b>Telefone(s)</b> <br>' + municipio.telefone +
                      '</div>' +
                    '</li>';
        $(lItem).appendTo("#polos");
      });
    }).then(function(){
      $(".municipioTitulo").click( function(){
        $(this).parent().toggleClass('expandido');
      });}    
    );

  });
  
  function mostrarContatoPolo(municipio){
    var idt = '#' + municipio.id;
    $('li'+idt).toggleClass('expandido');
    $('html, body').animate({ scrollTop: $("li"+idt).offset().top }, 800);
  };
   
</script>

        
        
        