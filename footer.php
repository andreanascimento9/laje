<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tips_insight
 */
$template_pdf = esc_html( get_page_template_slug( $post->ID ) );
if($template_pdf == 'template-parts/pdf.php'){
	$display_pdf_footer = 'd-none';
	$padding_pdf_mobile = 'style="padding:160px 40px 0 40px"';
	
} else {
	$display_pdf_footer = '';
	$padding_pdf_mobile = '';
}
?>
<!--      INICIO MOBILE       -->
	<footer id="colophon" class="site-footer d-lg-none d-xl-none d-md-block d-sm-block d-xs-block">
		
		<div class="converse" <?php echo $padding_pdf_mobile;?>>
			<div class="titulo">Converse com a sua empresa</div>
			<div class="subtitulo">Apresente a proposta da laje para a sua empresa.</div>
			<div class="descricao">
				Para o faturamento no CNPJ e condições especiais para empresas, entre em contato conosco.
			</div>
			
			<button class="btn-pink">Conheça nosso curso</button>

			<div class="imagem">
				<img width="185" src="<?php echo get_template_directory_uri() ?>/icons/forma-a.svg">
			</div>

		</div>
		

		<div class="newsletter" >
			<div class="tip-flex">
				<div class="tip-col-left">
					<div class="titulo">Quer receber a nossa newsletter?</div>
					<div class="subtitulo">Seja o primeiro a receber as novidades sobre os nossos cursos</div>
				</div>
				<div class="tip-col-right">
					<img width="176" src="<?php echo get_template_directory_uri() ?>/icons/stranger_form.svg">
				</div>
			</div>
			
			<div class="formulario">
				<?php echo do_shortcode('[contact-form-7 id="36" title="Newsletter"]')?>
			</div>
			
		</div>
		
		<div class="info">
			
			<div class="centralizar">
			<ul>
				<li class="texto-esquerdo">
					<img class="logo-rodape" width="122" src="<?php echo get_template_directory_uri() ?>/icons/logo_dark.svg" alt="Logo Tips">
				</li>

				<li class="texto-direito">
					<p>
						<strong>Contado</strong><br>
						
						<?php echo get_theme_mod('telefone', '+55 11 9.7542-3082'); ?>
					</p>
					<br>
					<p>
						<strong>E-Mail</strong><br>
						
						<?php echo get_theme_mod('email', 'contato@laje-ac.com.br'); ?>
					</p>
				</li>
			</ul>
			</div>
			
		</div>

		<p class="creditos">
			
			<?php echo get_theme_mod('direitos', 'AC - Laje - Todos os direitos reservados'); ?>

		</p>

	</footer><!-- #colophon -->
<!--      FIM MOBILE          -->


<!--	FALTA AJUSTAR O GRID	-->
<!--      INICIO DESK         -->
	<footer class="footer-desk d-none d-xl-block">
		

		<div class="converse <?php echo $display_pdf_footer; ?>">
			<div class="textos">

			
				<div class="titulo-principal">CONVERSE COM A SUA EMPRESA</div>
				

				<div class="textos-cta">
					<div class="titulo">Apresente a proposta da Laje para a sua empresa.</div>
					<p class="descricao">Para faturamento no CNPJ e condições especiais para empresas, entre em contato conosco.</p>
					<button onclick="location.href='https://google.com'" class="btn-pink">CONHEÇA NOSSO CURSO</button>
				</div>
			</div>

			<div class="imagem">
				<img src="<?php echo get_template_directory_uri() ?>/icons/forma-a.svg">
			</div>

		</div>

		

		<div class="newsletter">
			<div class="imagem">
				<img src="<?php echo get_template_directory_uri() ?>/icons/forma-est-footer.svg">
			</div>
			<div class="news">
				<div class="textos">
					<div class="titulo">Quer receber A NOSSA newsletter?</div>
					<p class="descricao">Seja o primeiro a receber as novidades sobre os nosso cursos</p>
				</div>
				<!--SE DER B.O NO FORM transform: translateY(85px);-->
				<div class="formulario">
					<?php echo do_shortcode('[contact-form-7 id="36" title="Newsletter"]')?>
				</div>
			</div>
		</div>

		<div class="footer-bg">
			<div class="footer-inline">
				<div class="ftips col-contato">
					<div class="txt-strong">Contato</div>
					<a href="#" class="texto-contato"><?php echo get_theme_mod('telefone', '+55 11 9.7542-3082'); ?></a>
				</div>
				<div class="ftips col col-email">
					<div class="txt-strong">E-Mail</div>
					<a href="#" class="texto-email"><?php echo get_theme_mod('email', 'contato@laje-ac.com.br'); ?></a>
				</div>

				<div class="ftips col col-logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/icons/logo-footer.svg"></a>
				</div>

				<div class="ftips col col-direitos">
					<div class="txt-strong">Ana Couto - Laje</div>
					<div class="detalhes"><?php echo get_theme_mod('direitos', 'AC - Laje - Todos os direitos reservados'); ?>s</div>
				</div>
			</div>
		</div>
		
	</footer>
<!--      FIM DESK            -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
