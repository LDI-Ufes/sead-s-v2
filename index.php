<?php get_header('principal'); ?>

<main style="margin-bottom: 50px;">
  <div class="container">

    <h1><?php the_title() ?></h1>

    <section>
      <?php
      while (have_posts()) : the_post();
        the_content();
      endwhile;
      ?>
    </section>

  </div>
</main>

<?php get_footer(); ?>
