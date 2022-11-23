<?php
// Register Custom Post Type
function facilitadores_cursos() {

	$labels = array(
		'name'                  => _x( 'Facilitadores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Facilitador', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Facilitadores', 'text_domain' ),
		'name_admin_bar'        => __( 'Facilitadores', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos os Facilitadores', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Facilitador', 'text_domain' ),
		'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
		'new_item'              => __( 'Adicionar Novo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Editar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Procurar', 'text_domain' ),
		'not_found'             => __( 'Não Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não Encontrado', 'text_domain' ),
		'featured_image'        => __( 'Imagem', 'text_domain' ),
		'set_featured_image'    => __( 'Adicione Imagem', 'text_domain' ),
		'remove_featured_image' => __( 'Remova Imagem', 'text_domain' ),
		'use_featured_image'    => __( 'Use Imagem', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Facilitador', 'text_domain' ),
		'description'           => __( 'Descritivo das pessoas que estarão ministrando os Cursos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'cargo' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'facilitadores-cursos', $args );

}
add_action( 'init', 'facilitadores_cursos', 0 );

//Registrar taxonomia(Categorias especificas)
function wpdocs_register_private_taxonomy_estrategia_cargo()
{
    $args = array(
        //label do wp é como aparece para o usuário ver
        //porém na hora de registrar em REGISTER_TAXONOMY, você botará a slug
        'label' => __('Cargo', 'textdomain'),
        'public' => true,
        'rewrite' => false,
        'hierarchical' => true
    );

    //nome da taxonomia, custom post type(o nome do post, e variavel args acima)
    register_taxonomy('cargo', 'facilitadores-cursos', $args);
}

add_action('init', 'wpdocs_register_private_taxonomy_estrategia_cargo', 0);
