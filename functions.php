<?php


if (!function_exists('sitiosead_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * Create your own sitiosead_setup() function to override in a child theme.
     */
    
    function sitiosead_setup() {

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
       
    }

endif; // sitiosead_setup
add_action('after_setup_theme', 'sitiosead_setup');

function create_post_type() {
  register_post_type( 'edital',
    array(
      'labels' => array(
        'name' => __( 'Editais' ),
        'singular_name' => __( 'Edital' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-links',
      'supports' => array( 
        'title', 
        'editor', 
        'excerpt', 
      ),
      'rewrite' => array(
        'slug' => 'editais',
        'with_front' => false
      )
    )
  );
}
add_action( 'init', 'create_post_type' );

/* Criar taxonomia para curso e modelo do projeto */
add_action('init', 'create_edital_tax');

function create_edital_tax() {
    register_taxonomy(
        'curso', 'edital', array(
        'label' => __('Curso'),
        'rewrite' => array('slug' => 'curso'),
        'hierarchical' => true,
            )
    );
    register_taxonomy(
        'tipo-de-curso', 'edital', array(
        'label' => __('Tipo de Curso'),
        'rewrite' => array('slug' => 'tipo-de-curso'),
        'hierarchical' => true,
            )
    );
        register_taxonomy(
        'atribuicao', 'edital', array(
        'label' => __('Atribuição'),
        'rewrite' => array('slug' => 'atribuicao'),
        'hierarchical' => true,
            )
    );
}

?>

<?php include 'plugins/campo-customizado-autor.php' ?>