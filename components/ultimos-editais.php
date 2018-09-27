<section id="ultimos-editais"> <!-- componente -->
    <div class="box-title"><span>#</span><h2>&nbsp últimos<br>editais</h2></div>
    <ul>
<!--        <li>
            <h3><a href="">Edital n°003/2018</a></h3>
            <em>inscrições abertas</em>
            <p class="atribuicao">Professores Orientadores (TCC)</p>
            <p>Especialização em Oratória, Transversalidade e Didática da Fala para Formação de Professores</p>
        </li>
        <li>
            <h3>Edital n°003/2018</h3>
            <em>inscrições abertas</em>
            <p class="atribuicao">Professores Orientadores (TCC)</p>
            <p>Especialização em Oratória, Transversalidade e Didática da Fala para Formação de Professores</p>
        </li>-->
        <?php           
            $ultimos_editais = new WP_Query( array( 'post_type' => 'editais', 'posts_per_page' => 3 ) );
            
            if ( $ultimos_editais->have_posts() ) : while ( $ultimos_editais->have_posts() ) : $ultimos_editais->the_post(); ?>
                <li>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <p class="atribuicao"><?php echo strip_tags(get_the_term_list( $post->ID, 'atribuicao' )); ?></p>
                    <p><?php echo strip_tags(get_the_term_list( $post->ID, 'tipo-de-curso' )); ?>: <?php echo strip_tags(get_the_term_list( $post->ID, 'curso' )); ?></p>
                </li>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sem notícias.' ); ?></p>
        <?php endif; ?>
    </ul>
</section>