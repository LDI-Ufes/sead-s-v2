<main id="noticia">
  <div class="post-capa" style="background-image: linear-gradient(#043166, transparent), url('<?php echo get_the_post_thumbnail_url(); ?>');">
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
      <a href="http://twitter.com/share?text=Ead na Ufes:&url=<?php echo get_permalink(); ?>" target="_blank"><i class="fab fa-twitter"></i></a>   
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>      
    </div>

  </article>
</main>