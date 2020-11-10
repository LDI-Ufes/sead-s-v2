<?php get_header(); ?>

<main class="container page" id="conteudoPrincipal">

  <h1><?php the_title() ?></h1>

  <section>
    <?php while (have_posts()) : the_post();
      the_content();
    endwhile; ?>
  </section>

</main>

<?php get_footer(); ?>
