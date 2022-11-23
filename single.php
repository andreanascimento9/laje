<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tips_insight
 */

get_header();
?>
<main class="main-single-conteudo">

<!-- <div class="single-thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div> -->
<div class="single-thumbnail"></div>

<div class="single-container">

	<div class="container-post">
		<div class="titulo-post"><?php echo the_title();?></div>
		<div class="info-post">
			<div class="nome-autor">Por nome do autor</div>
			<div class="data">18/03/2022</div>
		</div>
		<div class="conteudo-post">
			<?php echo the_content(); ?>
		</div>
	</div>
	
	<div class="container-mais-lidos">

	</div>
	
</div>
	
</main>

<?php
//get_sidebar();
get_footer();
