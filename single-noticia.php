<?php get_header('principal'); ?>

<?php while (have_posts()) : the_post(); ?>

  <main id="conteudoPrincipal" class="noticia page">
    <div class="destaque destaque-imagem" style="background-image: linear-gradient(#043166, rgba(4, 49, 102, 0.3)), url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>

    <article class="container">
      <section class='breadcrumb'>Você está em: <a href="<?php echo site_url(); ?>/noticias">Notícias</a><i class='fas fa-greater-than'></i><span><?php the_title(); ?></span></section>
      <h1><?php the_title(); ?></h1>
      <div class="post-date"><i class="fas fa-clock"></i><?php the_date('j \d\e F \d\e Y'); ?></div>

      <div class="post-body">
        <?php the_content(); ?>
      </div>

      <div class="post-autor">
        <?php echo get_avatar(get_the_author_meta('ID')); ?>
        <div class="autor-info">
          postado por
          <div class="autor-name"><?php the_author(); ?></div>
          <div class="autor-role"><?php the_author_meta('cargo'); ?></div>
          <div class="autor-bio"><?php the_author_meta('description'); ?></div>
        </div>
      </div>

      <div class="links-compartilhamento">
        <span>Gostou do que leu?</span> Compartilhe essa notícia:
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" title="Compartilhar notícia no Facebook"><i class="fab fa-facebook"></i> <span class="somente-leitura">Compartilhar notícia no Facebook</span></a>
        <a href="http://twitter.com/share?text=Ead na Ufes:&url=<?php echo get_permalink(); ?>" target="_blank" title="Compartilhar notícia no Twitter"><i class="fab fa-twitter"></i> <span class="somente-leitura">Compartilhar notícia no Twitter</span></a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank" title="Compartilhar notícia no LinkedIn"><i class="fab fa-linkedin"></i> <span class="somente-leitura">Compartilhar notícia no LinkedIn</span></a>
      </div>

    </article>
  </main>

<?php endwhile; ?>

<?php get_footer(); ?>

<script>
  // aplicando lightbox com o lity
  $(document).ready(function(){
    $('.gallery').find('a').attr('data-lity', '');
  });
</script>