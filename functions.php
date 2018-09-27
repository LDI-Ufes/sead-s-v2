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
  register_post_type( 'editais',
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
      )
    )
  );
  
    register_post_type( 'blog',
    array(
      'labels' => array(
        'name' => __( 'Notícias' ),
        'singular_name' => __( 'Notícia' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-format-aside',
      'supports' => array( 
        'title', 
        'editor', 
        'author',
        'thumbnail'  
      ),
      'rewrite' => array(
        'slug' => 'blog',
      )
    )
  );
    
    register_post_type( 'galeria',
    array(
      'labels' => array(
        'name' => __( 'Galerias' ),
        'singular_name' => __( 'Galeria' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt',
      'supports' => array( 
        'title', 
        'editor',
        'excerpt'
      ),
      'rewrite' => array(
        'slug' => 'galeria',
      )
    )
  );
}
add_action( 'init', 'create_post_type' );

/* Criar taxonomia para curso, tipo de curso e atribuição */
add_action('init', 'create_editais_tax');

function create_editais_tax() {
    register_taxonomy(
        'curso', 'editais', array(
        'label' => __('Curso'),
        'rewrite' => array('slug' => 'curso'),
        'hierarchical' => true,
            )
    );
    register_taxonomy(
        'tipo-de-curso', 'editais', array(
        'label' => __('Tipo de Curso'),
        'rewrite' => array('slug' => 'tipo-de-curso'),
        'hierarchical' => true,
            )
    );
        register_taxonomy(
        'atribuicao', 'editais', array(
        'label' => __('Atribuição'),
        'rewrite' => array('slug' => 'atribuicao'),
        'hierarchical' => true,
            )
    );
}

add_action('init', 'create_galeria_tax');

function create_galeria_tax() {
    register_taxonomy(
        'ano', 'galeria', array(
        'label' => __('Ano'),
        'rewrite' => array('slug' => 'ano'),
        'hierarchical' => true,
            )
    );
}

?>

<?php include 'plugins/campo-customizado-autor.php' ?>