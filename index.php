<?php get_header('principal'); ?>

<main>
  <div class="container">

    <?php get_search_form(); ?>

    <h2><?php the_title() ?></h2>

    <section>
      <?php while (have_posts()) : the_post();
        the_content();
      endwhile; ?>
    </section>

  </div>
</main>

<?php get_footer(); ?>
