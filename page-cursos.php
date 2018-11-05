<?php get_header('principal'); ?>

<main id="page-cursos" class='container page'>
  <section class="breadcrumb">Você está em: <span>Cursos</span></section>
  <h1>Cursos</h1>

  <p>Os cursos EaD da Ufes são por turma única e não possuem oferta regular. Fique ligado em nossos <a href="<?php echo site_url(); ?>/editais" title="Ir para Editais">Editais</a> para participar de processos seletivos.</p>

  <div id="abas">
    <ul>
      <li><a href="#graduacao">Graduação</a></li>
      <li><a href="#especializacao">Especialização</a></li>
      <li><a href="#aperfeicoamento">Aperfeiçoamento</a></li>
    </ul>
    <div>
      <ul>
        <a href="<?php echo site_url(); ?>/cursos/artes-visuais"><li><h3>Artes Visuais</h3>Licenciatura</li></a>
        <a href=""><li><h3>Biologia</h3>Licenciatura</li></a>
        <a href=""><li><h3>Filosofia</h3>Licenciatura</li></a>
        <a href=""><li><h3>Física</h3>Licenciatura</li></a>
        <a href=""><li><h3>História</h3>Licenciatura</li></a>
        <a href=""><li><h3>Letras Italiano</h3>Licenciatura</li></a>
        <a href=""><li><h3>Pedagogia</h3>Licenciatura</li></a>
        <a href=""><li><h3>Química</h3>Licenciatura</li></a>
      </ul>
    </div>
    <div>
      <p>cursos aperfeicoamento</p>
    </div>
    <div>
      <p>cursos especializacao</p>
    </div>
  </div>

</main>

<?php get_footer(); ?>

<script>

  $(function () {
    var tabs = $("#abas");

    // For each individual tab DIV, set class and aria-hidden attribute, and hide it
    $(tabs).find("> div").attr({
      "class": "tabPanel",
      "aria-hidden": "true"
    }).hide();

    // Get the list of tab links
    var tabsList = tabs.find("ul:first").attr({
      "class": "tabsList",
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
                "aria-selected": "false",
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
                        tabPanel.children("ul").find('a:first-of-type').focus();
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
                  if (tab.parent().prev().length != 0) {
                    tab.parent().prev().find("> a").click();
                  } else {
                    $(tabsList).find("li:last > a").click();
                  }
                  break;
                case 39:
                case 40:
                  if (tab.parent().next().length != 0) {
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
