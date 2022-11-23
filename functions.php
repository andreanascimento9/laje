<?php

/**
 * tips insight functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tips_insight
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tips_insight_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tips insight, use a find and replace
		* to change 'tips-insight' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('tips-insight', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'tips-insight'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tips_insight_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'tips_insight_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tips_insight_content_width()
{
	$GLOBALS['content_width'] = apply_filters('tips_insight_content_width', 640);
}
add_action('after_setup_theme', 'tips_insight_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tips_insight_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'tips-insight'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'tips-insight'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'tips_insight_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tips_insight_scripts()
{
	wp_enqueue_style('tips-insight-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('tips-insight-style', 'rtl', 'replace');

	wp_enqueue_script('tips-insight-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	//script sobre
	wp_enqueue_script('tips-insight-sobre', get_template_directory_uri() . '/js/sobre.js', array(), _S_VERSION, true);

	//BOOTSTRAP
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'tips_insight_scripts');


//Header JS
function my_scripts_method()
{
	// register your script location, dependencies and version
	wp_register_script(
		'custom_script',
		get_template_directory_uri() . '/js/header.js',
		array('jquery'),
		'1.0'
	);
	// enqueue the script
	wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');


//Conteúdo JS
function scripts_conteudo()
{
	// register your script location, dependencies and version
	wp_register_script(
		'tip_insights_conteudo',
		get_template_directory_uri() . '/js/conteudo.js',
		array('jquery'),
		'1.0'
	);
	// enqueue the script
	wp_enqueue_script('tip_insights_conteudo');
}
add_action('wp_enqueue_scripts', 'scripts_conteudo');

//Nossa comunidade JS
function scripts_nossa_comunidade()
{
	// register your script location, dependencies and version
	wp_register_script(
		'tip_insights_nossa_comunidade',
		get_template_directory_uri() . '/js/nossa-comunidade.js',
		array('jquery'),
		'1.0'
	);
	// enqueue the script
	wp_enqueue_script('tip_insights_nossa_comunidade');
}
add_action('wp_enqueue_scripts', 'scripts_nossa_comunidade');


//Alterar Logo no Login
function my_login_logo()
{ ?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/icons/logo-laje.svg);
			height: 65px;
			width: 320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
			pointer-events: none
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');


// POSTS MAIS VISTOS  (NO FUNCTIONS)  
function shapeSpace_popular_posts($post_id)
{
	$count_key = 'popular_posts';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}
function shapeSpace_track_posts($post_id)
{
	if (!is_single()) return;
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}
	shapeSpace_popular_posts($post_id);
}
add_action('wp_head', 'shapeSpace_track_posts');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Post Type Facilitadores Cursos.
 */
require get_template_directory() . '/post-types/facilitadores-cursos.php';


/**
 * Post Type Perguntas Frequentes.
 */
require get_template_directory() . '/post-types/perguntas-frequentes.php';

/**
 * Post Type Avaliação Alunos.
 */
require get_template_directory() . '/post-types/avaliacoes-alunos.php';

/**
 * Post Type Calendário de Cursos.
 */
require get_template_directory() . '/post-types/calendario-cursos.php';

/**
 * Post Type Clientes.
 */
require get_template_directory() . '/post-types/clientes.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Botão Carregar Mais Página de Conteúdo
 */
