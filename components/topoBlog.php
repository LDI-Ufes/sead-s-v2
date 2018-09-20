<div id="topoBlog">
  <section class="caixa">
    <?php echo file_get_contents(get_template_directory_uri() . '/svg/nossoBlog.svg'); ?>
    <span class="btoMenu">Menu</span>
    <nav id="menuPrincipal" class="menu" role="navigation">
      <ul class="menuLista">
        <li class="temSubmenu">
          <span>Portal Sead <i class="fas fa-chevron-down"></i></span>
          <ul class="menuSuspenso">
            <li><a href="/sitiosead">Início</a></li>
            <li><a href="">Ensino</a></li>
            <li><a href="/sitiosead/editais">Editais</a></li>
            <li><a href="">Cursos</a></li>
            <li><a href="/sitiosead/editais">Polos</a></li>            
            <li><a href="/sitiosead/blog">Notícias</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <?php echo file_get_contents(get_template_directory_uri() . '/svg/sead-ufes.svg'); ?>
  </section>
</div>