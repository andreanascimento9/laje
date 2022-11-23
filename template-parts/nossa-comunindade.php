<?php /* Template Name: Nossa Comunidade */ ?>
<?php get_header(); ?>

<main class="main-nossa-comunidade">
    <section class="banner-comunidade">
        <div class="tip-flex">

            <div class="tip-col-left">
                <div class="banner-titulo">Faça parta da maior comunidade de branding do Brasil</div>
                <p class="descricao">Aprenda como aplicar no seu dia a dia o método preparatório que a Ana Couto usa com seus clientes.</p>
            </div>

            <div class="tip-col-right">

                <div class="tip-img-top">
                    <img src="<?php echo get_template_directory_uri()?>/icons/stranger_form.svg">
                </div> 
                
                <div class="tip-img-bottom">
                    <img src="<?php echo get_template_directory_uri()?>/icons/sun-comunidade.svg">
                </div> 

            </div>
        </div>
    </section>

    <section class="comunidade-cards">
        <div class="btns-filtros">
            <div class="btn-filtro">
                <select name="sources" id="sources" class="custom-select sources" placeholder="CURSOS REALIZADOS">
                    <option value="profile">Profile</option>
                    <option value="word">Word</option>
                    <option value="hashtag">Hashtag</option>
                </select>
            </div>

            <div class="btn-filtro">
                <select name="sources" id="sources" class="custom-select sources" placeholder="LOCAL DE ORIGEM">
                    <option value="profile">Profile</option>
                    <option value="word">Word</option>
                    <option value="hashtag">Hashtag</option>
                </select>
            </div>

            <div class="btn-filtro">
                <select name="sources" id="sources" class="custom-select sources" placeholder="PROFISSÃO">
                    <option value="profile">Profile</option>
                    <option value="word">Word</option>
                    <option value="hashtag">Hashtag</option>
                </select>
            </div>
        </div>

        <div class="cards">
            <div class="tip-card">
                <div class="foto">
                    <img src="<?php echo get_template_directory_uri()?>/images/leo-curso.png">
                </div>

                <div class="titulo">Leonardo Fernandes</div>

                <div class="redes-sociais">
                    <img src="<?php echo get_template_directory_uri()?>/icons/facebook.svg">
                    <img src="<?php echo get_template_directory_uri()?>/icons/instagram.svg">
                    <img src="<?php echo get_template_directory_uri()?>/icons/linkedin.svg">
                </div>

                <div class="subtitulo">Cursos Realizados</div>

                <div class="cursos-feitos">

                    <div class="curso">
                        <div class="titulo">Brand Aplicado</div>
                        <div class="progresso"></div>
                    </div>

                    <div class="curso">
                        <div class="titulo">Brand Insider</div>
                        <div class="progresso"></div>
                    </div>

                    <div class="curso">
                        <div class="titulo">Inovação Aplicada</div>
                        <div class="progresso"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="comunidade-info">

        <div class="inline-flex-2">

            <div class="line-flex">
                <div class="numero">44,4%</div>
                <div class="texto">dos alunos consideraram <br> a experiência da última <br> edição incrível</div>
            </div>

            <div class="line-flex">
                <div class="numero">55,6%</div>
                <div class="texto">consideraram que <br> o curso atendeu às <br> expectativas.</div>
            </div>

        </div>

        <div class="dentro-grid mt-3">
            <img src="<?php echo get_template_directory_uri()?>/icons/barra-foguete.svg">
        </div>

        

    </section>

    <section class="comunidade-depoimentos">
        <div class="inline-flex">
            <div class="boxes">
            <?php

            $avaliacao = new WP_Query( array(
                'posts_per_page' => 3,
                'post_type'      => 'avaliacao-alunos',
                'order'          => 'DESC'
                
            ) );

            
            while ( $avaliacao->have_posts() ) : $avaliacao->the_post(); ?>

            <div class="box">
                <div class="foto"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" srcset=""> </div>
                <div class="titulo"><?php echo the_title(); ?></div>
                <div class="subtitulo"><?php echo the_excerpt(); ?></div>
                <div class="descricao"><?php echo the_content();?></div>
                <div class="aspas"> <img src="<?php echo get_template_directory_uri()?>/icons/aspas.png" alt="" srcset=""> </div>
            </div>

            <?php endwhile; ?>
            </div>

            
        </div>
    </section>
</main>

<?php get_footer(); ?>