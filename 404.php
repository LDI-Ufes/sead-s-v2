<?php get_header('principal'); ?>

<main class="page page-erro" id="conteudoPrincipal">
  <div id="fundo"></div>
  <div class="container">
    <h1>Essa página não existe</h1>

    <p>Essa página não pôde ser encontrada, pode ter sido excluída ou mesmo nunca existiu. 
      <br>Volte para a <a href="javascript:history.back()" title="Voltar para página anterior">página anterior <i class="fas fa-angle-double-right"></i></a> ou vá direto para a <a href="<?php echo site_url(); ?>" title="Ir para página inicial">página principal <i class="fas fa-angle-double-right"></i></a>.</p>

    <blockquote>Onde quer que haja mulheres e homens, há sempre o que fazer, há sempre o que ensinar, há sempre o que aprender. <span>Paulo Freire</span></blockquote>
  </div>
</main>

<?php get_footer(); ?>