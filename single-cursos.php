<?php get_header('principal'); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('cursos/curso', sanitize_title(get_the_title())); ?>

<?php endwhile; ?>

<?php get_footer(); ?>

<script>
  $('#faq-curso button').click(function () {
    $(this).toggleClass('ativo');
    $(this).siblings().slideToggle().toggleClass('expandido');
    $('#faq-curso button').not($(this)).removeClass('ativo').siblings().slideUp();
  });

</script>
