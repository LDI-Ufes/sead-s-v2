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
  
  <a title="Voltar ao topo" id="voltar-ao-topo" aria-hidden="true"><i class="fas fa-arrow-up"></i></a> 
  
  <div class="container">
    <section>
      <h4>Mapa do sítio</h4>
      <ul>
        <li><a href="<?php echo site_url(); ?>" title="Ir para página inicial">Início</a></li>
        <li>Ensino
          <ul class="subitens">
            <li><a href="<?php echo site_url(); ?>/ead-na-ufes" title="Ir para Ensino - Como é a EaD na Ufes?">Como é a EaD na Ufes?</a></li>
            <li><a href="<?php echo site_url(); ?>/a-sead" title="Ir para Ensino - A SEAD">A SEAD</a></li>
            <li><a href="<?php echo site_url(); ?>/contatos" title="Ir para Ensino - Contatos">Contatos</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url(); ?>/editais" title="Ir para Editais">Editais</a></li>
        <li><a href="<?php echo site_url(); ?>/cursos" title="Ir para Cursos">Cursos</a></li>
        <li><a href="<?php echo site_url(); ?>/polos" title="Ir para Polos">Polos</a></li>
        <li>Notícias
          <ul class="subitens">
            <li><a href="<?php echo site_url(); ?>/noticias" title="Ir para Notícias">Últimas notícias</a></li>
            <li><a href="<?php echo site_url(); ?>/fotos" title="Ir para Galeria de fotos">Galeria de fotos</a></li>
          </ul>
        </li>
      </ul>
    </section>

    <section>
      <h4>Fale conosco</h4>
      <p>Telefone: (27) 4009-2208</p>
      <p>E-mail: <a href="mailto: diretoria.sead@institucional.ufes.br">diretoria.sead@ufes.br</a></p>
      <p style="margin-top: .5rem;">Av. Fernando Ferrari, 514, Vitória - ES <br> Térreo do Teatro Universitário - Ufes Campus Goiabeiras</p>
      <p class="enderecoLink">
        <span>
          <img src="<?php echo get_template_directory_uri()?>/svg/google-maps.svg" alt="">
          <a href="https://goo.gl/maps/fLngzGoNbzq" target="_blank" title="Abrir endereço no Google Maps em nova aba"><span>Abrir endereço no Google Maps</span></a>
        </span>
        <span>
          <img src="<?php echo get_template_directory_uri()?>/svg/moovit.svg" alt="">
          <a href="https://moovit.com/?to=Teatro%20Universitário&tll=-20.27756_-40.301771&metroId=4794&lang=pt-br" target="_blank" title="Ver rotas de ônibus no Moovit em nova aba"><span>Ver rotas de ônibus no Moovit</span></a>
        </span>
      </p>
      <div class="fb-page" data-href="https://www.facebook.com/sead.ufes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/sead.ufes" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sead.ufes">Secretaria de Ensino a Distância - SEAD UFES</a></blockquote></div>
    </section>

    <section>
      <h4>Ambiente EaD Ufes</h4>
      <ul>
        <li><a href="http://acervo.sead.ufes.br/" target="_blank" title="Abrir o Acervo Digital em nova aba">Acervo Digital</a></li>
        <li><a href="http://www.ead.ufes.br/" target="_blank" title="Abrir o AVA de Graduação em nova aba">AVA Graduação</a></li>
        <li><a href="http://www.especializacao.aperfeicoamento.ufes.br/" target="_blank" title="Abrir o AVA de Especialização e Aperfeiçoamento em nova aba">AVA Especialização e Aperfeiçoamento</a></li>
        <li><a href="http://selecao.neaad.ufes.br" target="_blank" title="Abrir o Sistema de Seleção em nova aba">Sistema de Seleção</a></li>
        <li><a href="http://videos.ufes.br/sead" target="_blank" title="Abrir o Canal em Vídeos Ufes em nova aba">Canal em Vídeos Ufes</a></li>
        <li><a href="https://calendar.google.com/calendar/embed?src=webconf.ufes%40gmail.com&ctz=America/Sao_Paulo" target="_blank" title="Abrir agenda de Webconferências da Sead em nova aba">Agenda de Webonferências</a></li>
      </ul>
    </section>
  </div>
  <div class="creditos">
    <p>© 2019 Sead Ufes. Todos os direitos reservados <span>| <a href="http://ldi.ufes.br/" target="_blank" title="Abrir o sítio do LDI em nova aba">Desenvolvido por LDI</a></span></p>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/globais.js"></script>

<script>
  // scroll top

  $('#voltar-ao-topo').click(function () {
    $('html, body').animate({scrollTop: 0}, 800);
  });

  $(window).scroll(function () {
    $(window).scrollTop() > 20 ? $('#voltar-ao-topo').fadeIn(300) : $('#voltar-ao-topo').fadeOut(300);
  });

</script>

</body>
</html>
