<div id="topoPrincipal">
  <section class="caixa">
    <?php echo file_get_contents(get_template_directory_uri() . '/svg/sead.svg'); ?>
    <span class="btoMenu">Menu</span>
    <nav id="menuPrincipal" class="menu" role="navigation">
      <ul class="menuLista">
        <li><a href="/sitiosead">Início</a></li>
        <li class="temSubmenu">
          <span>Ensino <i class="fas"></i></span>
          <ul class="menuSuspenso">
            <li><a href="">Como é a EaD na Ufes?</a></li>
            <li><a href="">A Secretaria</a></li>
            <li><a href="">Contatos</a></li>
          </ul>
        </li>
        <li><a href="/sitiosead/editais">Editais</a></li>
        <li><a href="">Cursos</a></li>
        <li><a href="/sitiosead/polos">Polos</a></li>            
        <li><a href="/sitiosead/blog">Notícias</a></li>
      </ul>
    </nav>
  </section>
</div>