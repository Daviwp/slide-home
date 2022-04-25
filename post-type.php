<?php 

function slidehome_registrer(){
     $labels = array(
        'name' => _x('Slide Home', 'post type general name'),
        'singular_name' => _x('Slide Home', 'post type singular name'),
        'add_new' => _x('Adicionar novo', ''),
        'add_new_item' => __('Adicionar novo'),
        'edit_item' => __('Editar '),
        'new_item' => __('Novo '),
        'view_item' => __('Ver '),
        'search_items' => __('Procurar '),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'show_in_nav_menus' => false,
        'menu_icon'   => 'dashicons-megaphone',
        'menu_position' => 4,
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('slidehome',$args);

}
add_action('init', 'slidehome_registrer');
 

/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
    // Trigger our function that registers the custom post type plugin.
    slidehome_registrer();
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );