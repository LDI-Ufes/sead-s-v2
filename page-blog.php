<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog | Sead Ufes</title>

    <!-- Contexto do órgão no Portal de Serviços -->
    <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/425">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/sead-v2/css/blog-page.css">
    
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700i" rel="stylesheet"> <!-- Conferir necessidade de variações -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <?php include 'components/barra-acessibilidade.php' ?>
        <?php include 'components/barra-brasil.php' ?>
        <?php include 'components/topoBlog.php' ?>
      </header>
      
      <main>  
          <ul id="posts">
            <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'posts_per_page' => 4,
              'paged'          => $paged,
              'post_type' => 'noticia',
//              'nopaging' => false,
//              'order' => 'DESC',
//              'orderby' => 'date',
            );
            
            $noticias = new WP_Query( $args );

            if ( $noticias->have_posts() ) : ?>
                <?php while ( $noticias->have_posts() ) : $noticias->the_post(); ?>	
                    <li class="blog-post">
                        <div class="blog-post-header">
                          <span>Seminários</span>
                          <?php the_post_thumbnail( ); ?>
                          <div class="post-date"><?php the_date('j \d\e F \d\e Y'); ?></div>
                        </div>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      <p><?php echo wp_trim_words( get_the_content(), 40, ' [...]' ); ?></p>
                    </li>
                  <?php endwhile; ?>
                  <div id="postsNav">  
                      <div class="nav-right"><?php next_posts_link( 'Notícias antigas  >', $noticias->max_num_pages ); ?></div>
                      <div class="nav-left"><?php previous_posts_link( '<  Notícias recentes', $noticias->max_num_pages ); ?></div>
                  </div>
                  <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>              
          </ul>
          
          <aside>
            <?php include 'components/ultimos-editais.php' ?>

            <section id="informativo">
                <h2><span>Informativo #17</span></h2>
                <ul>
                    <li><i class="fas fa-angle-right"></i><a>Curso de Licenciatura em Filosofia EaD/Ufes recebe nota máxima 5 do Inep/MEC</a></li>
                    <li><i class="fas fa-angle-right"></i><a>Curso de Especialização em Educação em Direitos Humanos realiza doação de livros para unidades do IASES</a></li>
                </ul>
                <label>Receba as notícias mais importantes direto no seu e-mail, cadastre-se:</label><br>
                <form><input type="email" placeholder="Digite seu e-mail"><input type="submit" value="Enviar"></form>
            </section>
              
              <button class="social-media"><span>Siga-nos também no facebook</span><i class="fab fa-facebook-f"></i></button>  
          </aside>         
      </main>
      
      <section id="galeria">
          <div class="content">
              <h2>Galeria de Fotos</h2>
              <ul>
                  <li>
                      <span>21/06/2018</span> Seminário da Disciplina de Linguagem V - Polo UAB de Montanha/ES
                      <ul>
                          <li><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></li>
                          <li><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></li>
                          <li><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></li>
                          <li class="verMais"><a href=""><span>Ver mais</span><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></a></li>
                      </ul>
                  </li>
                  <li>
                      <span>21/06/2018</span> Seminário da Disciplina de Linguagem V - Polo UAB de Montanha/ES
                      <ul>
                          <li><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></li>
                          <li><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></li>
                          <li><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></li>
                          <li class="verMais"><a href=""><span>Ver mais</span><img src="https://www.eadufes.org/site/wp-content/uploads/2018/06/IMG_20180621_212726229.jpg"></a></li>
                      </ul>
                  </li>
              </ul>
              <button>Confira os eventos antigos</button>
          </div>
          </section>
      
      <?php include 'components/rodape.php' ?>
      
    <script defer="defer" src="//barra.brasil.gov.br/barra.js"></script>          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/sead-v2/js/altoContraste.js"></script>
  </body>
</html>