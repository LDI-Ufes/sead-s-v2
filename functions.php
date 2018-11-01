<?php

if (!function_exists('sitiosead_setup')) :

    function sitiosead_setup() {
      add_theme_support('post-thumbnails');
      add_theme_support('title-tag');
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
        'custom-fields'
      ),
      'rewrite' => array(
        'slug' => 'editais',
      )
    )
  );

    register_post_type( 'noticia',
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
        'name' => __( 'Galeria' ),
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
        register_taxonomy(
        'ano', 'edital', array(
        'label' => __('Ano'),
        'rewrite' => array('slug' => 'ano'),
        'hierarchical' => true,
            )
    );
}

add_action('init', 'create_galeria_tax');

function create_galeria_tax() {
    register_taxonomy(
        'ano-evento', 'galeria', array(
        'label' => __('Ano'),
        'rewrite' => array('slug' => 'ano'),
        'hierarchical' => true,
            )
    );
}

add_action('init', 'create_noticia_tax');

function create_noticia_tax() {
    register_taxonomy(
        'tag', 'noticia', array(
        'label' => __('Tag'),
        'rewrite' => array('slug' => 'tag'),
        'hierarchical' => true,
            )
    );
    register_taxonomy(
        'curso-noticia', 'noticia', array(
        'label' => __('Curso'),
        'rewrite' => array('slug' => 'curso'),
        'hierarchical' => true,
            )
    );
}

add_action( 'pre_get_posts' ,'paginate_post_type_edital', 1, 1 );

function paginate_post_type_edital( $query ){
  if ( ! is_admin() && is_post_type_archive( 'edital' ) && $query->is_main_query() ){
    $query->set( 'posts_per_page', 8 );
  }
}

add_action( 'pre_get_posts' ,'paginate_post_type_noticia', 1, 1 );

function paginate_post_type_noticia( $query ){
  if ( ! is_admin() && is_post_type_archive( 'noticia' ) && $query->is_main_query() ){
    $query->set( 'posts_per_page', 4 );
  }
}

add_action( 'pre_get_posts' ,'paginate_search', 1, 1 );

function paginate_search( $query ){
  if ( $query->is_search() ){
    $query->set( 'posts_per_page', 4 );
  }
}

include 'plugins/campo-customizado-autor.php';
