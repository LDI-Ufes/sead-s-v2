<?php get_header('blog'); ?>

<main id="noticia">
  <div class="post-capa gradient">
    <?php the_post_thumbnail(); ?>  
  </div>

  <article class="container">
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
      <span>Gostou do que leu?</span> Compartilhe essa notícia.
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
    </div>

  </article>
</main>

<?php get_footer(); ?>