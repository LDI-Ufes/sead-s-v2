<section id="ultimos-editais"> <!-- componente -->
    <div class="box-title"><span>#</span><h2>&nbsp últimos<br>editais</h2></div>
    <ul>
        <?php           
            $ultimos_editais = new WP_Query( array( 'post_type' => 'edital', 'posts_per_page' => 4 ) );
            
            if ( $ultimos_editais->have_posts() ) : while ( $ultimos_editais->have_posts() ) : $ultimos_editais->the_post(); ?>
                <li>
                    <h3><a href="<?php the_permalink() ?>" title="Ir para o edital <?php the_title(); ?>">Edital <?php the_title(); ?></a></h3>
                    <p class="atribuicao"><?php echo strip_tags(get_the_term_list( $post->ID, 'atribuicao' )); ?></p>

                    <?php if ( !has_term( 'N/A', 'tipo-de-curso' )) : ?>
                        <p><?php echo strip_tags(get_the_term_list( $post->ID, 'tipo-de-curso' )); ?> - <?php echo strip_tags(get_the_term_list( $post->ID, 'curso' )); ?></p>
                    <?php endif; ?>

                </li>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Não há editais cadastrados.' ); ?></p>
        <?php endif; ?>
    </ul>
</section>
