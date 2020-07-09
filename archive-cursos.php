<?php get_header('principal'); ?>

<main id="conteudoPrincipal" class='container page page-cursos'>
  <section class="breadcrumb">Você está em: <span>Cursos</span></section>
  <h1>Cursos</h1>

  <p>    
    Para ver os cursos que estão com processo seletivo aberto, fique ligado em nossos <a href="<?php echo site_url(); ?>/editais" title="Ir para Editais" class="bold">Editais <i class="fas fa-angle-double-right"></i></a> e participe de processos seletivos.

    <span class="alerta"><i class="fas fa-exclamation-circle"></i>Os cursos EaD da Ufes não possuem oferta regular.</span>
  </p> 
  
  <div id="abas"> 
    <button id='dropdown-menu'>Graduação<i class='fas fa-angle-down'></i></button> 
 
    <ul id="itens-abas"> 
      <li><a title="Listar cursos de graduação" href="#graduacao">Graduação</a></li> 
      <li><a title="Listar cursos de especialização" href="#especializacao">Especialização</a></li> 
      <li><a title="Listar cursos de aperfeiçoamento" href="#aperfeicoamento">Aperfeiçoamento</a></li> 
    </ul> 
 
    <div id="graduacao"> 
      <ul class="lista-cursos"> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/administracao"> 
            <div class="card-capa"><div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/administracao.jpg"></div></div> 
            <h3 class="titulo">Administração<span class="nivel">Bacharelado</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/artes-visuais"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/artes-visuais.jpg"></div> 
            <h3 class="titulo">Artes Visuais<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/ciencias-biologicas"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/biologia.jpg"></div> 
            <h3 class="titulo">Ciências Biológicas<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/ciencias-contabeis"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/ciencias-contabeis.jpg"></div> 
            <h3 class="titulo">Ciências Contábeis<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/filosofia"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/filosofia.jpg"></div> 
            <h3 class="titulo">Filosofia<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/fisica"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/fisica.jpg"></div> 
            <h3 class="titulo">Física<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/historia"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/historia.jpg"></div> 
            <h3 class="titulo">História<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/letras-italiano"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/letras-italiano.jpg"></div> 
            <h3 class="titulo">Letras Italiano<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/pedagogia"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/pedagogia.jpg"></div> 
            <h3 class="titulo">Pedagogia<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/quimica"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/quimica.jpg"></div> 
            <h3 class="titulo">Química<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso sem-pagina" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/educacao-fisica"> 
            <div class="card-capa"><img src="img/<?php echo get_template_directory_uri(); ?>/img/capas/educacao-fisica.jpg"></div> 
            <h3 class="titulo">Educação Física<span class="nivel">Licenciatura</span></h3> 
          </a> 
        </li> 
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
      </ul> 
    </div> 
     
    <div id="especializacao"> 
      <ul class="lista-cursos"> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/ciencia-e-10"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/ciencia-e-10.jpg"></div> 
            <h3 class="titulo">Ciência é 10!</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/educacao-em-direitos-humanos"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/educacao-em-direitos-humanos"></div> 
            <h3 class="titulo">Educação em Direitos Humanos</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/ensino-de-matematica-para-o-ensino-medio"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/ensino-de-matematica-para-o-ensino-medio"></div> 
            <h3 class="titulo">Ensino da Matemática para o Ensino Médio</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/epidemiologia"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/epidemiologia"></div> 
            <h3 class="titulo">Epidemiologia</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/filosofia-e-psicanalise"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/filosofia-e-psicanalise"></div> 
            <h3 class="titulo">Filosofia e Psicanálise</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/gestao-de-agronegocios"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/gestao-de-agronegocios"></div> 
            <h3 class="titulo">Gestão de Agronegócios</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/gestao-de-politicas-publicas-em-genero-e-raca"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/gestao-de-politicas-publicas-em-genero-e-raca"></div> 
            <h3 class="titulo">Gestão de Políticas Públicas em Gênero e Raça</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/gestao-em-saude"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/gestao-em-saude"></div> 
            <h3 class="titulo">Gestão em Saúde</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/gestao-publica"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/gestao-publica"></div> 
            <h3 class="titulo">Gestão Pública</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/logistica"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/logistica"></div> 
            <h3 class="titulo">Logística</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/oratoria"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/oratoria"></div> 
            <h3 class="titulo">Oratória, Transversalidade e Didática da Fala</h3> 
          </a> 
        </li> 
         
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
      </ul> 
    </div> 
 
    <div id="aperfeicoamento"> 
      <ul class="lista-cursos"> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/educacao-ambiental"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/educacao-ambiental"></div> 
            <h3 class="titulo">Educação Ambiental</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/educacao-do-campo"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/educacao-do-campo"></div> 
            <h3 class="titulo">Educação do Campo</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/educacao-para-a-diversidade-e-cidadania"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/educacao-para-a-diversidade-e-cidadania"></div> 
            <h3 class="titulo">Educação para a Diversidade e Cidadania</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/educacao-para-as-relacoes-etnicorraciais"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/educacao-para-as-relacoes-etnicorraciais"></div> 
            <h3 class="titulo">Educação para as Relações Etnicorraciais</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/genero-e-diversidade-na-escola"> 
            <div class="card-capa"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/genero-e-diversidade-na-escola"></div> 
            <h3 class="titulo">Gênero e Diversidade na Escola</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso sem-pagina" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/povos-indigenas"> 
            <div class="card-capa"><img src="img/<?php echo get_template_directory_uri(); ?>/img/capas/povos-indigenas.jpg"></div> 
            <h3 class="titulo">Cultura e Histórias dos Povos Indígenas</h3> 
          </a> 
        </li> 
        <li> 
          <a class="card-curso sem-pagina" title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/dimensoes-da-humanizacao"> 
            <div class="card-capa"><img src="img/<?php echo get_template_directory_uri(); ?>/img/capas/dimensoes-da-humanizacao.jpg"></div> 
            <h3 class="titulo">Dimensões da Humanização</h3> 
          </a> 
        </li> 
 
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
      </ul> 
    </div> 
  </div> 
 
</main> 

<?php get_footer(); ?>

<script> 
 
  // menu mobile 
  $('#dropdown-menu').click( function(){ 
    $('#itens-abas').slideToggle(300); 
  }); 
 
  // If click outside dropdown-menu opened 
  $(document).click(function() { 
    if (!$(event.target).closest('#dropdown-menu,#itens-abas').length) { 
      // If max-width 991px 
      if ($(window).width() <= 991) { 
        // Slide up (close) menu panel 
        $('#itens-abas').slideUp(300); 
      } 
    } 
  }); 
 
  // abas 
 
  $(function () { 
    var tabs = $("#abas"); 
 
    // For each individual tab DIV, set class and aria-hidden attribute, and hide it 
    $(tabs).find("> div").attr({ 
      "class": "tabPanel", 
      "aria-hidden": "true" 
    }).hide(); 
 
    // Get the list of tab links 
    var tabsList = tabs.find("ul:first").attr({ 
      "class": "tabsList" 
    }); 
 
    // For each item in the tabs list... 
    $(tabsList).find("li > a").each( 
            function (a) { 
              var tab = $(this); 
 
              // Create a unique id using the tab link's href 
              var tabId = "tab-" + tab.attr("href").slice(1); 
 
              // Assign tab id and aria-selected attribute to the tab control, but do not remove the href 
              tab.attr({ 
                "id": tabId, 
                "aria-selected": "false" 
              }).parent().attr("role", "presentation"); 
 
              // Assign aria attribute to the relevant tab panel 
              $(tabs).find(".tabPanel").eq(a).attr("aria-labelledby", tabId); 
 
              // Set the click event for each tab link 
              tab.click( 
                      function (e) { 
                        var tabPanel; 
 
                        // Prevent default click event 
                        e.preventDefault(); 
 
                        // Change state of previously selected tabList item 
                        $(tabsList).find("> li.current").removeClass("current").find("> a").attr("aria-selected", "false"); 
 
                        // Hide previously selected tabPanel 
                        $(tabs).find(".tabPanel:visible").attr("aria-hidden", "true").hide(); 
 
                        // Show newly selected tabPanel 
                        tabPanel = $(tabs).find(".tabPanel").eq(tab.parent().index()); 
                        tabPanel.attr("aria-hidden", "false").show(); 
 
                        // Set state of newly selected tab list item 
                        tab.attr("aria-selected", "true").parent().addClass("current"); 
 
                        // Set focus to the paragraph in the newly revealed tab content 
                        tabPanel.children("ul").find('li:first-of-type').focus(); 
                        tabPanel.children("ul").find('li:first-of-type a').focus(); 
 
                        // If max-width 991px 
                        if ($(window).width() <= 991) { 
                          // Slide up (close) menu panel 
                          $('#itens-abas').slideUp(300); 
                        } 
 
                        // Change the menu collapsed title 
                        let itemSelecionado = tab.attr('aria-selected', 'true').html(); 
                        $('#dropdown-menu').html(itemSelecionado + '<i class="fas fa-angle-down"></i>'); 
 
                      } 
 
              ); 
            } 
    ); 
 
    // Set keydown events on tabList item for navigating tabs 
    $(tabsList).delegate("a", "keydown", 
            function (e) { 
              var tab = $(this); 
              switch (e.which) { 
                case 37: 
                case 38: 
                  if (tab.parent().prev().length !== 0) { 
                    tab.parent().prev().find("> a").click(); 
                  } else { 
                    $(tabsList).find("li:last > a").click(); 
                  } 
                  break; 
                case 39: 
                case 40: 
                  if (tab.parent().next().length !== 0) { 
                    tab.parent().next().find("> a").click(); 
                  } else { 
                    $(tabsList).find("li:first > a").click(); 
                  } 
                  break; 
              } 
            } 
    ); 
 
    // Show the first tabPanel 
    $(tabs).find(".tabPanel:first").attr("aria-hidden", "false").show(); 
 
    // Set state for the first tabsList li 
    $(tabsList).find("li:first").addClass("current").find(" > a").attr({ 
      "aria-selected": "true", 
      "tabindex": "0" 
    }); 
  }); 
 
</script> 
