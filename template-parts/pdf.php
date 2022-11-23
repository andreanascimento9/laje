<?php /* Template Name: PDF */ ?>
<?php get_header(); ?>


<main class="main-pdf">
    <section class="banner-pdf">

        <div class="col-esquerdo">
            <div class="titulo">Inovar é Preciso</div>
            <div class="subtitulo">Evoluindo negócio e cultura em tempos de crise</div>
            <p class="descricao">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                et dolore magna aliqua. Ut enim ad minim venian reprehenderit in voluptaent, sunt in culpa qui officia 
                deserunt mollit anim id est laborum
            </p>
        </div>

        <div class="col-centro " >
            <img src="" alt="" srcset="">
        </div>

        <div class="col-direito">
            <div class="formulario">
                <div class="titulo">Baixe aqui o seu arquivo</div>
                <p class="descricao">Preencha o formulário para baixar o conteúdo gratuitamente!</p>
                <?php echo do_shortcode('[contact-form-7 id="139" title="PDF"]');?>
            

            </div>
        </div>
        <div class="img-pdf-mobile">
            <img src="<?php echo get_template_directory_uri();?>/icons/pdf-banner.svg" alt="" srcset="">
        </div>
    </section>
</main>
<?php 


get_footer();

?>