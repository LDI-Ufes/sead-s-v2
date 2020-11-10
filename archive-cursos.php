<?php get_header(); ?>

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
        <?php
          $args = array(
            'post_type' => 'cursos', 
            'posts_per_page'=>-1,
            'tax_query' => array(
              array(
                'taxonomy' => 'tipo',
                'field' => 'slug',
                'terms' => 'graduacao'
              )
            ),
            'orderby' => 'post_title',
            'order' => 'ASC'
          );

          $eventos = new WP_Query($args);

          if ($eventos->have_posts()) : while ($eventos->have_posts()) : $eventos->the_post(); ?>

            <li> 
              <a class="card-curso" title="Ir para a página do curso" href="<?php the_permalink(); ?>"> 
                <?php 
                  if( has_term( 'encerrado', 'situacao' ) ){ 
                    echo  '<div class="card-etiqueta">encerrado</div>';
                  } elseif( has_term( 'edital-aberto', 'situacao' ) ) {
                    echo  '<div class="card-etiqueta card-etiqueta-edital">edital aberto</div>';
                  } ?>
                <div class="card-capa"><?php the_post_thumbnail() ?></div> 
                <h3 class="titulo"><?php the_title(); ?><span class="nivel"><?php echo strip_tags(get_the_term_list($post->ID, 'habilitacao')); ?></span></h3> 
              </a> 
            </li> 

        <?php endwhile; wp_reset_postdata(); endif; ?>

        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
      </ul> 
    </div> 
     
    <div id="especializacao"> 
      <ul class="lista-cursos"> 
        <?php
          $args = array(
            'post_type' => 'cursos', 
            'posts_per_page'=>-1,
            'tax_query' => array(
              array(
                'taxonomy' => 'tipo',
                'field' => 'slug',
                'terms' => 'especializacao'
              )
            ),
            'orderby' => 'post_title',
            'order' => 'ASC'
          );

          $eventos = new WP_Query($args);

          if ($eventos->have_posts()) : while ($eventos->have_posts()) : $eventos->the_post(); ?>

            <li> 
              <a class="card-curso" title="Ir para a página do curso" href="<?php the_permalink(); ?>"> 
                <?php 
                  if( has_term( 'encerrado', 'situacao' ) ){ 
                    echo  '<div class="card-etiqueta">encerrado</div>';
                  } elseif( has_term( 'edital-aberto', 'situacao' ) ) {
                    echo  '<div class="card-etiqueta card-etiqueta-edital">edital aberto</div>';
                  } ?>
                <div class="card-capa"><?php the_post_thumbnail() ?></div> 
                <h3 class="titulo"><?php the_title(); ?></h3> 
              </a> 
            </li> 

        <?php endwhile; wp_reset_postdata(); endif; ?>

        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
        <li class="placeholder" aria-hidden="true"></li> 
      </ul>
    </div> 
 
    <div id="aperfeicoamento"> 
      <ul class="lista-cursos"> 
        <?php
          $args = array(
            'post_type' => 'cursos', 
            'posts_per_page'=>-1,
            'tax_query' => array(
              array(
                'taxonomy' => 'tipo',
                'field' => 'slug',
                'terms' => 'aperfeicoamento'
              )
            ),
            'orderby' => 'post_title',
            'order' => 'ASC'
          );

          $eventos = new WP_Query($args);

          if ($eventos->have_posts()) : while ($eventos->have_posts()) : $eventos->the_post(); ?>

            <li> 
              <a class="card-curso" title="Ir para a página do curso" href="<?php the_permalink(); ?>"> 
                <?php 
                  if( has_term( 'encerrado', 'situacao' ) ){ 
                    echo  '<div class="card-etiqueta">encerrado</div>';
                  } elseif( has_term( 'edital-aberto', 'situacao' ) ) {
                    echo  '<div class="card-etiqueta card-etiqueta-edital">edital aberto</div>';
                  } ?>
                <div class="card-capa"><?php the_post_thumbnail() ?></div> 
                <h3 class="titulo"><?php the_title(); ?></h3> 
              </a> 
            </li> 

        <?php endwhile; wp_reset_postdata(); endif; ?>

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
