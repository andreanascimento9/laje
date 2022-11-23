<?php
// Register Custom Post Type
function calendario_cursos() {

	$labels = array(
		'name'                  => _x( 'Calendário Cursos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Calendário Cursos', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Calendário Cursos', 'text_domain' ),
		'name_admin_bar'        => __( 'Calendário Cursos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todas os Curso no Calendário', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar Curso no Calendário', 'text_domain' ),
		'add_new'               => __( 'Adicionar Curso no Calendário', 'text_domain' ),
		'new_item'              => __( 'Adicionar Curso no Calendário', 'text_domain' ),
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
	);
	$args = array(
		'label'                 => __( 'Calendário Cursos', 'text_domain' ),
		'description'           => __( 'Calendário Cursos', 'text_domain' ),
		'supports'              => array( 'title', 'excerpt'),
		'labels'                => $labels,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
        'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'calendario-cursos', $args );

}
add_action( 'init', 'calendario_cursos', 0 );

//Registrando Infos de Fundo de Investimentos
function tips_campos_calendario_cursos()
{
    add_meta_box(
        'tips_custom_meta_info', //slug metabox
        'Informações do Lançamento', //nome do meta box visivel usuario
        'tips_info_calendario_cursos',
        'calendario-cursos',//post type
        'advanced',//side - sidebar || advanced - abaixo do texto
        'high'
    );
}
add_action('add_meta_boxes', 'tips_campos_calendario_cursos');

function tips_info_calendario_cursos(){
	?>
	<style>
		.form-group{
			display: inline-flex;
			gap: 10px;
			
			flex-wrap: wrap;
		}

		

	</style>
	<div class="form-group">
		<div class="input-group">
			<label class="font-weight-bold" for="">URL Curso</label> <br>
			<input type="url" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'tips_url_curso', true)); ?>" name="tips_url_curso" id="">
		</div>

		<div class="input-group">
			<label for="">Data Lançamento</label><br>
			<input type="date" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'tips_data_curso', true)); ?>" name="tips_data_curso" id="">
		</div>

		<div class="input-group">
			<label for="">Carga Horária</label><br>
			<input type="text" value="<?php echo esc_attr(get_post_meta(get_the_ID(), 'tips_carga_horaria', true)); ?>" name="tips_carga_horaria" id="">
		</div>


	</div>
	
	
	
	<?php
}

function save_infos_calendario_cursos($post_id)
{

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    $fields = array(
        'tips_url_curso',
		'tips_data_curso',
		'tips_carga_horaria',
		

    );
    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}

add_action('save_post', 'save_infos_calendario_cursos');