<form id="formPesquisa" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input title="Pesquisar" type="search" placeholder="Pesquisar" name="s" value="<?php echo get_search_query(); ?>">
</form>