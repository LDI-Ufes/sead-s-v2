<?php get_header('principal'); ?>

<main id="conteudoPrincipal" class='container page page-cursos'>
  <section class="breadcrumb">Você está em: <span>Cursos</span></section>
  <h1>Cursos</h1>

  <span class="alerta">Os cursos EaD da Ufes não possuem oferta regular.</span>
  <span><i class="fas fa-exclamation-circle"></i>Para ver os cursos que estão com processo seletivo aberto, fique ligado em nossos <a href="<?php echo site_url(); ?>/editais" title="Ir para Editais">Editais <i class="fas fa-angle-double-right"></i></a> e participe de processos seletivos.</span>

  <div id="abas">
    <button id='dropdown-menu'>Graduação<i class='fas fa-angle-down'></i></button>

    <ul id="itens-abas">
      <li><a title="Listar cursos de graduação" href="#graduacao">Graduação</a></li>
      <li><a title="Listar cursos de especialização" href="#especializacao">Especialização</a></li>
      <li><a title="Listar cursos de aperfeiçoamento" href="#aperfeicoamento">Aperfeiçoamento</a></li>
    </ul>

    <div id="graduacao">
      <ul>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/artes-visuais"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/artes-visuais.jpg"><h3><span>Licenciatura em</span>Artes Visuais</h3></a></li>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/biologia"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/biologia.jpg"><h3><span>Licenciatura em</span>Biologia</h3></a></li>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/filosofia"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/filosofia.jpg"><h3><span>Licenciatura em</span>Filosofia</h3></a></li>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/fisica"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/fisica.jpg"><h3><span>Licenciatura em</span>Física</h3></a></li>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/historia"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/historia.jpg"><h3><span>Licenciatura em</span>História</h3></a></li>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/letras-italiano"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/letras-italiano.jpg"><h3><span>Licenciatura em</span>Letras Italiano</h3></a></li>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/pedagogia"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/pedagogia.jpg"><h3><span>Licenciatura em</span>Pedagogia</h3></a></li>
        <li><a title="Ir para a página do curso" href="<?php echo site_url(); ?>/cursos/quimica"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/quimica.jpg"><h3><span>Licenciatura em</span>Química</h3></a></li>
        <li class="sem-pagina"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/administracao.jpg"><h3><span>Bacharelado em</span>Administração</h3> <span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/ciencias-contabeis.jpg"><h3><span>Bacharelado em</span>Ciências Contábeis</h3> <span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><img src="<?php echo get_template_directory_uri(); ?>/img/capas/educacao-fisica.jpg"><h3><span>Licenciatura em</span>Educação Física</h3> <span class="aviso">Curso sem página disponível.</span></li>

        <li class="placeholder" aria-hidden="true"></li>
        <li class="placeholder" aria-hidden="true"></li>
      </ul>
    </div>
    <div id="especializacao">
      <ul>
        <li tabindex="0" class="sem-pagina"><h3>Educação do Campo</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Ensino da Matemática para o Ensino Médio</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Filosofia e Psicanálise</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Gestão de Agronegócios</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Gestão de Políticas Públicas em Gênero e Raça</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Gestão em Saúde</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Logística</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Mídias na Educação</h3><span class="aviso">Curso sem página disponível.</span></li>

        <li class="placeholder" aria-hidden="true"></li>
        <li class="placeholder" aria-hidden="true"></li>
      </ul>
    </div>
    <div id="aperfeicoamento">
      <ul>
        <li tabindex="0" class="sem-pagina"><h3>Cultura e Histórias dos Povos Indígenas</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Dimensões da Humanização: Filosofia, Psicanálise e Medicina</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Educação Ambiental</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Educação em Direitos Humanos</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Educação para a Diversidade</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Educação para as relações Etnicorraciais</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Gênero e diversidade na Escola</h3><span class="aviso">Curso sem página disponível.</span></li>
        <li class="sem-pagina"><h3>Lingua Francesa</h3><span class="aviso">Curso sem página disponível.</span></li>

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
