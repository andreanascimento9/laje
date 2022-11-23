<?php
// Register Custom Post Type
function avaliacao_alunos() {

	$labels = array(
		'name'                  => _x( 'Avaliação Alunos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Avaliação Alunos', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Avaliação Alunos', 'text_domain' ),
		'name_admin_bar'        => __( 'Avaliação Alunos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todas as Avaliações', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Avaliações', 'text_domain' ),
		'add_new'               => __( 'Adicionar Avaliações', 'text_domain' ),
		'new_item'              => __( 'Adicionar Avaliações', 'text_domain' ),
		'edit_item'             => __( 'Editar Avaliação', 'text_domain' ),
		'update_item'           => __( 'Editar Avaliação', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Procurar', 'text_domain' ),
		'not_found'             => __( 'Nada Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Nada Encontrado', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		'featured_image'        => __( 'Aluno imagem', 'textdomain' ),    //used in post.php
		'set_featured_image'    => __( 'Selecione uma imagem', 'textdomain' ),    //used in post.php
		'remove_featured_image' => __( 'Remover imagem', 'textdomain' ), //used in post.php
		
	);
	$args = array(
		'label'                 => __( 'Avaliação Alunos', 'text_domain' ),
		'description'           => __( 'Avaliação Alunos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt' , 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
        'menu_icon'             => 'dashicons-money',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'avaliacao-alunos', $args );

}
add_action( 'init', 'avaliacao_alunos', 0 );