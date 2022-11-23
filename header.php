<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tips_insight
 */

use function Automattic\Jetpack\Extensions\Eventbrite\get_current_url;

?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/font-face/fonts.css" />
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<style>

</style>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!--INICIO MOBILE-->
	<div class="menu-mobile">

		<div class="menu-mobile-header">
			<div class="header-container-left">
				<ul>
					<li><img class="menu-ativado" width="33" src="<?php echo get_template_directory_uri() ?>/icons/hamburger.svg"></li>
					<li><a href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/icons/logo-laje.svg" width="52" alt="tips insight" srcset=""></a></li>
				</ul>

				<ul>
					<li><img class="procurar" width="30" src="<?php echo get_template_directory_uri() ?>/icons/search.svg"></li>
				</ul>
			</div>

			<div class="header-container-right">
				<button class="btn-pink"><img class="btn-close-menu" width="14" src="<?php echo get_template_directory_uri() ?>/icons/close.svg"></button>
			</div>

		</div>

		<div class="menu-content">

			<div class="centralizar">



				<?php if (!is_user_logged_in()) { ?>

					<img class="perfil" width="55" src="<?php echo get_template_directory_uri() ?>/icons/icon_perfil.svg">

					<h2>ENTRE OU CADASTRE-SE =)</h2>

					<ul>
						<li><button class="btn-transparente" href="#">CADASTRAR</butt>
						</li>
						<li><button class="btn-pink" href="#">ENTRAR</button></li>
					</ul>
				<?php } else { ?>
					<?php

					$id = get_current_user_id();

					?>
					<input id="fileInput" type="file" class="ip_file" />
					<a class="edit-profile" href="#">

						<img class="perfil" width="55" src="<?php echo get_template_directory_uri() ?>/icons/icon_perfil.svg">
						<img class="edit" width="16" src="<?php echo get_template_directory_uri() ?>/icons/edit-profile.svg">
					</a>
					<div>
						<button type="submit" class="btn-salvar">Salvar</button>
					</div>

					<?php

					$user_info = get_userdata(get_current_user_id());
					$user_name = $user_info->display_name;

					echo "<h2 class='logged-in'>$user_name</h2>";


					?>
				<?php } ?>

			</div>

			<div class="menu-links">
				<div class="mt-2">
					<a href="#" class="menu-link">Sobre</a>
				</div>

				<div class="mt-2">
					<a href="#" class="menu-link">Cursos <span><img class="arrow" width="20" src="<?php echo get_template_directory_uri() ?>/icons/arrow-pink.svg"></span></a>
					<ul class="inner-menu-mobile">
						<li>
							<g class="red"></g> Branding Aplicado
						</li>
						<li>
							<g class="pink"></g> Branding Insider
						</li>
						<li>
							<g class="blue"></g> Inovação Aplicada
						</li>
					</ul>
				</div>

				<div class="mt-2">
					<a href="#" class="menu-link">Conteúdo</a>
				</div>

				<div class="mt-2">
					<a href="#" class="menu-link">Nossa comunidade</a>
				</div>

				<div class="mt-2">
					<a href="#" class="menu-link">Para Empresas</a>
				</div>


			</div>

		</div>

		<div class="menu-mobile-footer">
			<img class="linkedin" width="24" src="<?php echo get_template_directory_uri() ?>/icons/icon-linkedin.svg">
		</div>

	</div>



	<!--ADICIONAR MUDANCA DA COR DO HEADER
	Adicionar mudança cor texto header
	adicionar mudança logo header-->
	<header id="masthead" class="site-header header-container d-lg-none d-xl-none d-md-flex d-sm-flex d-xs-flex" style="background: white">
		<div class="header-container-left">
			<ul>
				<li><img class="menu" width="33" src="<?php echo get_template_directory_uri() ?>/icons/hamburger.svg"></li>
				<li><a href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/icons/logo-laje.svg" width="52" alt="tips insight" srcset=""></a></li>
			</ul>

			<ul>
				<li><img class="procurar" width="30" src="<?php echo get_template_directory_uri() ?>/icons/search.svg"></li>
				<?php if (is_front_page()) { ?>
					<li><img class="carrinho" width="25" src="<?php echo get_template_directory_uri() ?>/icons/cart.svg"></li>
				<?php } else {
				} ?>
			</ul>
		</div>

		<div class="header-container-right">
			<button class="btn-pink">entrar</button>
		</div>

	</header><!-- #masthead -->

	<!--<form role="search" method="get" action="http://localhost/tips/" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
		<div class="wp-block-search__inside-wrapper ">
			<input type="search" id="wp-block-search__input-1" class="wp-block-search__input " name="s" value="" placeholder="" required="">
			<button type="submit" class="wp-block-search__button  ">Pesquisar</button>
		</div>
	</form>-->





	<!--FIM MOBILE-->

	<!--INICIO DESKTOP-->
	<header class="header-desktop d-none d-xl-flex d-lg-flex">

		<div class="header-desktop-esquerdo"></div>

		<div class="header-desktop-centro">
			<div class="col">
				<a href="<?php echo site_url('/sobre/'); ?>">Sobre</a>
			</div>
			<div class="col">
				<a href="<?php echo site_url('/cursos/'); ?>">Cursos</a>
			</div>
			<div class="col">
				<a href="<?php echo site_url('/conteudo/'); ?>">Conteúdo</a>
			</div>

			<div class="col">
				<a class="site-url" href="<?php echo site_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/icons/logo-laje.svg" alt="tips insight" srcset=""></a>
			</div>

			<div class="col">
				<a href="<?php echo site_url('/nossa-comunidade/'); ?>">Nossa Comunidade</a>
			</div>
			<div class="col">
				<a href="<?php echo site_url('/para-empresas/'); ?>">Para empresas</a>
			</div>


		</div>



		<div class="header-desktop-direito">
			<div id="procurar" class="col">
				<img class="procurar" width="30" src="<?php echo get_template_directory_uri() ?>/icons/search.svg">
			</div>

			<div class="col cart-col">
				<img class="procurar" width="30" src="<?php echo get_template_directory_uri() ?>/icons/cart.svg">
			</div>

			<button class="btn-pink">ENTRAR</button>
		</div>
	</header>

	<?php include get_template_directory() . '/template-parts/buscar.php' ?>


	<!--FIM DESKTOP-->