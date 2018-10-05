<?php get_header('principal'); ?>

<main class="container">
  
  <section class="conteudo">

    <h1><?php the_title() ?></h1>

    <section>
      <?php
      while (have_posts()) : the_post();
        the_content();
      endwhile;
      ?>
    </section>

  </section>
  
</main>

<?php get_footer(); ?>
