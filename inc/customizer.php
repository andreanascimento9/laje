<?php
/**
 * tips insight Theme Customizer
 *
 * @package tips_insight
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tips_insight_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'tips_insight_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'tips_insight_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'tips_insight_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tips_insight_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tips_insight_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tips_insight_customize_preview_js() {
	wp_enqueue_script( 'tips-insight-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'tips_insight_customize_preview_js' );



/**				RODAPE			 */
function tips_rodape_customize_register($wp_customize){
	$wp_customize->add_section(
		'rodape',
		array(
			'title' => ('Rodapé'),
			'priority' => 2,
		)
	);

	//CONTATO - EMAIL, TELEFONE
	$wp_customize->add_setting('email');
	
	$wp_customize->add_control(
		'email',
		array(
			'label' => 'Contato',
			'description' => 'E-Mail',
			'section' => 'rodape'
		)
	);

	$wp_customize->add_setting('telefone');
	$wp_customize->add_control(
		'telefone',
		array(
			
			'description' => 'Telefone',
			'section' => 'rodape',
		)
	);

	//COPYRIGHT - 2 CAMPOS
	$wp_customize->add_setting('direitos');
	$wp_customize->add_control(
		'direitos',
		array(
			'label' => 'Copyright',
			'description' => 'Direitos',
			'section' => 'rodape'
		)
	);

	

	//LOGO RODAPE
	$wp_customize->add_setting('logo_rodape');
	$wp_customize->add_control(
		
		new WP_Customize_Media_Control(
			$wp_customize,
			'logo_rodape',
			array(
				'label' => 'Logo Rodapé',
				'description' => 'Insira uma imagem',
				'section' => 'rodape',
				'mime_type' => 'image'
			)

		)
		
	);
}
//hook registrar section
add_action('customize_register', 'tips_rodape_customize_register');



/** 		CURSOS				 */

/** 		SOBRE				 */
/**				RODAPE			 */
function tips_sobre_customize_register($wp_customize){
	$wp_customize->add_section(
		'sobre',
		array(
			'title' => ('Sobre'),
			'priority' => 3,
		)
	);

	//CONTATO - EMAIL, TELEFONE
	$wp_customize->add_setting('txt_sobre_esquerdo');
	
	$wp_customize->add_control(
		'txt_sobre_esquerdo',
		array(
			'label' => 'Seção 1',
			'description' => 'Coluna Esquerda',
			'section' => 'sobre'
		)
	);

	$wp_customize->add_setting('txt_sobre_direito');
	$wp_customize->add_control(
		'txt_sobre_direito',
		array(
			
			'description' => 'Texto coluna direita',
			'section' => 'sobre',
		)
	);

	$wp_customize->add_setting('txt_sobre_centro');
	
	$wp_customize->add_control(
		'txt_sobre_centro',
		array(
			'label' => 'Seção 2',
			'description' => 'Coluna central',
			'section' => 'sobre'
		)
	);

	$wp_customize->add_setting('txt_sobre_direito_2');
	$wp_customize->add_control(
		'txt_sobre_direito_2',
		array(
			
			'description' => 'Texto coluna direita',
			'section' => 'sobre',
		)
	);

	//COPYRIGHT - 2 CAMPOS
	$wp_customize->add_setting('direitos');
	$wp_customize->add_control(
		'direitos',
		array(
			'label' => 'Copyright',
			'description' => 'Direitos',
			'section' => 'sobre'
		)
	);

	

	// //LOGO sobre
	// $wp_customize->add_setting('logo_sobre');
	// $wp_customize->add_control(
		
	// 	new WP_Customize_Media_Control(
	// 		$wp_customize,
	// 		'logo_sobre',
	// 		array(
	// 			'label' => 'Logo Rodapé',
	// 			'description' => 'Insira uma imagem',
	// 			'section' => 'sobre',
	// 			'mime_type' => 'image'
	// 		)

	// 	)
		
	// );
}
//hook registrar section
add_action('customize_register', 'tips_sobre_customize_register');

/*   Novos Campos Personalizar - HOME  */
function tips_customize_register($wp_customize){
	$wp_customize->add_section(
		'home',
		array(
			'title' => __('Home', 'odin'),
			'priority' => 1,
			
		)
	);

	//Imagem Banner
	$imagem_rota = get_template_directory_uri() . "/icons/icon-main-home.svg";
	$wp_customize->add_setting('imagem-banner', array(
		'default' =>  $imagem_rota
	));
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'imagem-banner',
			array(
				'label' => __('Banner', 'odin'),
				'description' => 'Imagem Banner',
				'section' => 'home',
				'mime_type' => 'image',
				'settings' => 'imagem-banner',
			)

		)
		
	);

	//Cor Fundo Banner
	$wp_customize->add_setting('cor-fundo-banner', array(
		'default' => '#E4EDEA',
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'cor-fundo-banner',
			array(
				'description' => 'Cor Fundo Banner',
				'section' => 'home',
				'setting' => 'cor-fundo-banner',
			)
		)

	);

	//Cor Texto Banner
	$wp_customize->add_setting('cor-texto-banner', array(
		'default' => '#000000',
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'cor-texto-banner',
			array(
				'description' => 'Cor texto Banner',
				'section' => 'home',
				'setting' => 'cor-texto-banner',
			)
		)

	);

	//Título Banner
	$wp_customize->add_setting('titulo-banner-home', array(
		'default' => 'CONHEÇA A MAIOR COMUNIDADE DE BRANDING DO BRASIL'
	));
	$wp_customize->add_control(
			'titulo-banner-home',
			array(
				
				'description' => 'Título Banner',
				'section' => 'home',
				'settings' => 'titulo-banner-home'
				
			)

	);

	//Texto Banner
	$wp_customize->add_setting('texto-banner-home', array(
		'default' => 'Aprenda como aplicar no seu dia a dia o método proprietário que a Ana Couto usa com seus clientes.'
	));
	$wp_customize->add_control(
		'texto-banner-home',
		array(
			
			'description' => 'Texto Banner',
			'section' => 'home',
			'settings' => 'texto-banner-home'
		)
	);

	$wp_customize->add_setting('texto-botao-banner-home', array(
		'default' => 'VEJA NOSSOS CURSOS'
	));
	$wp_customize->add_control(
		'texto-botao-banner-home',
		array(
			
			'description' => 'Texto botão Banner',
			'section' => 'home',
			'settings' => 'texto-botao-banner-home'
			
		)
	);

	//Texto esquerdo campo
	$wp_customize->add_setting('texto-esquerdo', array(
		'default' => 'Plataforma de conteúdo e aprendizagem da Ana Couto e da Laje.'
	));
	
		
	$wp_customize->add_control(
		
		'texto-esquerdo',
		array(
			'label' => '2ª Seção',
			'description' => 'Texto ao Lado esquerdo',
			'section' => 'home',
			'settings' => 'texto-esquerdo'
		
		)
	);

	//Texto direito campo
	$wp_customize->add_setting('texto-direito', array(
		'default' => 'Criada para fomentar a cultura de branding e inovação no Brasil,  a Laje oferece cursos, talks, estudos e uma newsletter para pessoas e times que querem aprender método, cultivar seu repertório, colocar tudo em prática imediatamente e fazer parte de uma comunidade com centenas de profissionais talentosos.'
	));
	$wp_customize->add_control(
		'texto-direito',
		array(
			
			'description' => 'Texto ao Lado direito',
			'section' => 'home',
			'settings' => 'texto-direito'
		)
	);

	//clientes aplicados campo
	$wp_customize->add_setting('clientes_aplicados', array(
		'default' => '20'
	));
	$wp_customize->add_control(
		'clientes_aplicados',
		array(
			'label' => 'Quantidade de Clientes Aplicados',
			'section' => 'home',
			'settings' => 'clientes_aplicados'
		)
	);

	//projeto branding campo
	$wp_customize->add_setting('projetos_branding', array(
		'default' => '45'
	));
	$wp_customize->add_control(
		'projetos_branding',
		array(
			'label' => 'Quantidade de Projetos Branding',
			'section' => 'home',
			'settings' => 'projetos_branding'
		)
	);

	//alunos campo
	$wp_customize->add_setting('alunos', array(
		'default' => '800'
	));
	$wp_customize->add_control(
		'alunos',
		array(
			'label' => 'Quantidade de Clientes Aplicados',
			'section' => 'home',
			'settings' => 'alunos'
		)
	);

}

add_action('customize_register', 'tips_customize_register');




	
