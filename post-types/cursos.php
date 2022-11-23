<?php
/**ESSE POST TYPE JA EXISTE SERÁ O POST TYPE DO PLUGIN LEARN PRESS
 * ESTOU SOMENTE CRIANDO NOVOS CAMPOS NECESSÁRIOS PARA FICAR FIEL
 * AO LAYOUT DESENVOLVIDO
 */

 //Registrando Infos de Fundo de Investimentos
function tips_campos_calendario_cursos2()
{
    add_meta_box(
        'tips_custom_meta_info2', //slug metabox
        'Informações do asdsda', //nome do meta box visivel usuario
        'tips_info_calendario_cursos2',
        'lp_course',//post type
       
    );
}
add_action('add_meta_boxes', 'tips_campos_calendario_cursos');

function tips_info_calendario_cursos2(){
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

function save_infos_calendario_cursos2($post_id)
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

add_action('save_post', 'save_infos_calendario_cursos2');