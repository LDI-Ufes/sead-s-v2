<?php

if (!function_exists('sitiosead_setup')) :

    function sitiosead_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
    }
endif; // sitiosead_setup

add_action('after_setup_theme', 'sitiosead_setup');

function create_post_type()
{
    register_post_type(
      'edital',
    array(
      'labels' => array(
        'name' => __('Editais'),
        'singular_name' => __('Edital')
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

    register_post_type(
        'noticia',
    array(
      'labels' => array(
        'name' => __('Notícias'),
        'singular_name' => __('Notícia')
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

    register_post_type(
        'galeria',
    array(
      'labels' => array(
        'name' => __('Galeria'),
        'singular_name' => __('Galeria')
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt',
      'supports' => array(
        'title',
        'editor'
      ),
      'rewrite' => array(
        'slug' => 'galeria',
      )
    )
  );

  register_post_type(
    'cursos',
    array(
      'labels' => array(
        'name' => __('Cursos'),
        'singular_name' => __('Curso')
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-book',
      'supports' => array(
        'title',
        'editor'
      ),
      'rewrite' => array(
        'slug' => 'cursos',
      )
    )
  );
}
add_action('init', 'create_post_type');

/* Criar taxonomia para curso, tipo de curso e atribuição */
add_action('init', 'create_editais_tax');

function create_editais_tax()
{
    register_taxonomy(
        'curso',
        'edital',
        array(
        'label' => __('Curso'),
        'rewrite' => array('slug' => 'curso'),
        'hierarchical' => true,
            )
    );
    register_taxonomy(
        'tipo-de-curso',
        'edital',
        array(
        'label' => __('Tipo de Curso'),
        'rewrite' => array('slug' => 'tipo-de-curso'),
        'hierarchical' => true,
            )
    );
    register_taxonomy(
        'atribuicao',
            'edital',
            array(
        'label' => __('Atribuição'),
        'rewrite' => array('slug' => 'atribuicao'),
        'hierarchical' => true,
            )
    );
    register_taxonomy(
        'ano',
            'edital',
            array(
        'label' => __('Ano'),
        'rewrite' => array('slug' => 'ano'),
        'hierarchical' => true,
            )
    );
}

add_action('init', 'create_galeria_tax');

function create_galeria_tax()
{
    register_taxonomy(
        'ano-evento',
        'galeria',
        array(
        'label' => __('Ano do evento'),
        'rewrite' => array('slug' => 'ano'),
        'hierarchical' => true,
            )
    );
}

add_action('init', 'create_noticia_tax');

function create_noticia_tax()
{
    register_taxonomy(
        'tag',
        'noticia',
        array(
        'label' => __('Tag'),
        'rewrite' => array('slug' => 'tag'),
        'hierarchical' => true,
            )
    );
    register_taxonomy(
        'curso-noticia',
        'noticia',
        array(
        'label' => __('Curso'),
        'rewrite' => array('slug' => 'curso'),
        'hierarchical' => true,
            )
    );
}

add_action('pre_get_posts', 'paginate_post_type_edital', 1, 1);

function paginate_post_type_edital($query)
{
    if (! is_admin() && is_post_type_archive('edital') && $query->is_main_query()) {
        $query->set('posts_per_page', 8);
    }
}

add_action('pre_get_posts', 'paginate_post_type_noticia', 1, 1);

function paginate_post_type_noticia($query)
{
    if (! is_admin() && is_post_type_archive('noticia') && $query->is_main_query()) {
        $query->set('posts_per_page', 6);
    }
}

add_action('pre_get_posts', 'paginate_search', 1, 1);

function paginate_search($query)
{
    if ($query->is_search()) {
        $query->set('posts_per_page', 6);
    }
}

include 'plugins/campo-customizado-autor.php';


/* Widgets */
function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'Cadastro Informativo',
		'id' => 'cadastro_informativo',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );


// Ocultar campos desnecessários no cadastro de usuários

function remove_personal_options(){
    echo '<script type="text/javascript">jQuery(document).ready(function($) {
  
$(\'form#your-profile > h2:first\').hide(); // remove the "Personal Options" title
  
$(\'form#your-profile tr.user-rich-editing-wrap\').hide(); // remove the "Visual Editor" field
  
$(\'form#your-profile tr.user-admin-color-wrap\').hide(); // remove the "Admin Color Scheme" field
  
$(\'form#your-profile tr.user-comment-shortcuts-wrap\').hide(); // remove the "Keyboard Shortcuts" field
  
$(\'form#your-profile tr.user-admin-bar-front-wrap\').hide(); // remove the "Toolbar" field
  
$(\'form#your-profile tr.user-language-wrap\').hide(); // remove the "Language" field
    
$(\'table.form-table tr.user-url-wrap\').hide();// remove the "Website" field in the "Contact Info" section

$(\'form#your-profile tr.user-profile-picture\').hide(); // remove the "Profile Picture" field

$(\'table.form-table tr.user-url-wrap\').hide();// remove the "Site" field in the "Contact Info" section

$(\'table.form-table tr.user-googleplus-wrap\').hide();// remove the "Google+" field in the "Contact Info" section

$(\'table.form-table tr.user-facebook-wrap\').hide();// remove the "Facebook" field in the "Contact Info" section

$(\'table.form-table tr.user-twitter-wrap\').hide();// remove the "Twiiter" field in the "Contact Info" section
    
$(\'table.form-table tr.user-aim-wrap\').hide();// remove the "AIM" field in the "Contact Info" section
 
$(\'table.form-table tr.user-yim-wrap\').hide();// remove the "Yahoo IM" field in the "Contact Info" section
 
$(\'table.form-table tr.user-jabber-wrap\').hide();// remove the "Jabber / Google Talk" field in the "Contact Info" section

$(\'div.yoast-settings\').hide();// remove the "Jabber / Google Talk" field in the "Contact Info" section
 
});</script>';
  
}
  
add_action('admin_head','remove_personal_options');


function remove_menu_items() {
  $remove_menu_items = array(__('Comments'),__('Posts'));
  global $menu;
  end ($menu);
  while (prev($menu)){
    $item = explode(' ',$menu[key($menu)][0]);
    if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
    unset($menu[key($menu)]);}
  }
}

add_action('admin_menu', 'remove_menu_items');
