<form id="formPesquisa" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="searchform"><span class="somente-leitura">Pesquisar no Portal Sead</span></label>
  <input id="searchform" title="Pesquisar" type="search" placeholder="Pesquisar no Portal Sead" name="s" value="<?php echo get_search_query(); ?>">
  <button type="submit" class="botaoSubmissao"><span class="somente-leitura">Buscar</span><i class="fas fa-search"></i></button>
  <span class="botaoFalso"><i class="fas fa-search"></i></span>
</form>