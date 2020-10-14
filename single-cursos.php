<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('cursos/curso', sanitize_title(get_the_title())); ?>

<?php endwhile; ?>

<?php get_footer(); ?>

<script>

// matriz - accordion 
  $('#matriz .semestre button').click(function () { 
    $(this).toggleClass('ativo'); 
    $(this).siblings().slideToggle(); 
    $('#matriz .semestre button').not($(this)).removeClass('ativo').siblings().slideUp(); 
  }); 

  $(document).ready(function (){
    $('#matriz .semestre button').first().addClass('ativo');
    $('#matriz .semestre ul').first().css('display', 'block');
  });

  // faq - accordion
  $('#faq-curso button').click(function () {
    $(this).toggleClass('ativo');
    $(this).siblings().slideToggle();
    $('#faq-curso button').not($(this)).removeClass('ativo').siblings().slideUp();
  });

</script>
