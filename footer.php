<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
      return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<footer>
  <div class="content">
    <section>
      <h4>Mapa do sítio</h4>
      <ul>
        <li><a href="<?php echo site_url(); ?>" title="Ir para página inicial">Início</a></li>
        <li>Ensino
          <ul class="subitens">
            <li><a href="/sitiosead/ead-na-ufes" title="Ir para Ensino - Como é a EaD na Ufes?">Como é a EaD na Ufes?</a></li>
            <li><a href="/sitiosead/secretaria" title="Ir para Ensino - A Secretaria">A Secretaria</a></li>
            <li><a href="/sitiosead/contatos" title="Ir para Ensino - Contatos">Contatos</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url(); ?>/editais" title="Ir para Editais">Editais</a></li>
        <li><a href="<?php echo site_url(); ?>/cursos" title="Ir para Cursos">Cursos</a></li>
        <li><a href="<?php echo site_url(); ?>/polos" title="Ir para Polos">Polos</a></li>
        <li><a href="<?php echo site_url(); ?>/blog" title="Ir para Notícias">Notícias</a></li>
      </ul>
    </section>

    <section>
      <h4>Fale conosco</h4>
      <p>Av. Fernando Ferrari, 514, Vitória-ES. Ufes.<br>Térreo do Teatro Universitário</p>
      <p>(27) 4009-2208</p>
      <p><a href = "mailto: diretoria.sead@institucional.ufes.br">diretoria.sead@institucional.ufes.br</a></p>
      <div class="fb-page" data-href="https://www.facebook.com/sead.ufes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/sead.ufes" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sead.ufes">Secretaria de Ensino a Distância - SEAD UFES</a></blockquote></div>
    </section>

    <section>
      <h4>Ambiente EaD Ufes</h4>
      <ul>
        <li><a href="http://acervodigital.eadufes.org/" title="Ir para o Acervo Digital da Sead">Acervo Digital</a></li>
        <li><a href="http://www.ead.ufes.br/" title="Ir para o AVA de Graduação">AVA Graduação</a></li>
        <li><a href="http://www.especializacao.aperfeicoamento.ufes.br/" title="Ir para o AVA de Especialização e Aperfeiçoamento">AVA Especialização e Aperfeiçoamento</a></li>
        <li><a href="http://selecao.neaad.ufes.br" title="Ir para o Sistema de Seleção da Sead">Sistema de Seleção</a></li>
        <li><a href="http://videos.ufes.br/sead" title="Ir para Vídeos Ufes">Vídeos Ufes</a></li>
      </ul>
    </section>
  </div>
  <div class="creditos">
    <p>2018 - Todos os direitos reservados. <span><a href="http://www.ufes.br/" target="_blank" title="Ir para o sítio da Ufes">Ufes</a> | Sead | <a href="https://ldi.eadufes.org/" target="_blank" title="Ir para o sítio do LDI">LDI</a> | Educação a Distância Ufes</span></p>
    <span title="Sítio desenvolvido pelo Laboratório de Design Instrucional" class="creditosMarca"><?php include 'svg/ldi.svg'; ?></span>
  </div>
</footer>

<script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/altoContraste.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/pesquisa.js"></script>

<!-- Lity Lightbox -->
<link href="<?php echo get_template_directory_uri(); ?>/plugins/lity/lity.min.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/plugins/lity/lity.min.js"></script>

<script src="https://unpkg.com/focus-visible@latest/dist/focus-visible.min.js"></script>

<?php wp_footer(); ?>

<script>
  // Todas as tags meta e link para dentro tag head
  $('meta').appendTo('head');
  $('link').appendTo('head');
</script>
</body>
</html>
