<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<main class="main-home">


<section class="banner-home" style="background:<?php echo get_theme_mod('cor-fundo-banner'); ?>">

    <div class="tips-container-flex">

        <div class="col-esquerda" style="color: <?php echo get_theme_mod('cor-texto-banner')?>">
            
            <h1 class="banner-main-title">CONHEÇA A MAIOR COMUNIDADE DE BRANDING DO BRASIL</h1>
            <p>Aprenda como aplicar no seu dia a dia o método proprietário que a Ana Couto usa com seus clientes.</p>
            <a href="<?php echo site_url('/cursos/')?>" class="btn-pink"><?php echo get_theme_mod('texto-botao-banner-home')?></a>
        </div>
        
        <div class="col-centro">
            <img class="desk-block" width="405" src="<?php echo get_template_directory_uri()?>/icons/icon-main-home.svg">
            <img class="mobile-block" width="315" src="<?php echo get_template_directory_uri()?>/icons/icon-main-home.svg">
        </div>

        <div class="col-direita"></div>
        
    </div>

    

</section>

<div class="center-mt--10">
    <svg width="274" height="238" viewBox="0 0 274 238" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M137.469 237.031L0.979086 0.2228L273.966 0.222824L137.469 237.031Z" fill="<?php echo get_theme_mod('cor-fundo-banner'); ?>"/>
    </svg>
</div>




<section class="home-info-section">
    <div class="info-home center-mt--10 dentro-grid">
        
        <img class="imagem-desk" src="<?php echo get_template_directory_uri()?>/icons/star_barra.svg">

        <div class="textos-icone tips-container-flex-custom">
            <div class="col-flex">
                <h1 class="titulo-info"><?php echo get_theme_mod('texto-esquerdo'); ?></h1>
            </div>
            <div class="col-flex"></div>
            <div class="col-flex">
                <p class="descricao-info">
                    <?php echo get_theme_mod('texto-direito'); ?>
                </p>
            </div>
        </div>
    </div>

    <div class="info-home-mobile">
        <img class="imagem-mobile" src="<?php echo get_template_directory_uri()?>/icons/star_barra_mobile.svg">

        <h1 class="titulo-info">
            <?php echo get_theme_mod('texto-esquerdo'); ?>
        </h1>

        <p class="descricao-info">
            <?php echo get_theme_mod('texto-direito'); ?>
        </p>

    </div>

    
    <div class="infos tips-container-flex-custom">

        <div class="col-flex">
            <?php echo get_theme_mod('clientes_aplicados'); ?><img src="<?php echo get_template_directory_uri()?>/icons/clientes_aplicados.svg">
        </div>
        <div class="col-flex">
            <?php echo get_theme_mod('projetos_branding') ?><img src="<?php echo get_template_directory_uri()?>/icons/projetos.svg">
        </div>
        <div class="col-flex">
            +<?php echo get_theme_mod('alunos') ?><img src="<?php echo get_template_directory_uri()?>/icons/alunos.svg">
        </div>

    </div>
    
</section>




<section class="cursos">
    
    <?php

        $query = new WP_Query( array(
            'posts_per_page' => 3,
            'post_type'      => 'product',
            
        ) );

        while ( $query->have_posts() ) : $query->the_post();
        $preço = $product->get_price();
        $preço = number_format($preço, 2, ',', '');

    ?>

    <div class="box-curso">
        <img width="400" height="205" src="<?php echo get_the_post_thumbnail_url()?>" alt="">
        <div class="inner-box-curso">
            <div class="descricao-curso"><?php echo the_excerpt(); ?></div>
            <div class="preco" style="font-size: 2.5em;">R$<?php echo number_format($preço / 12, 2, ',','.'); ?><span style="font-size: .5em;" class="parcelamento"> em até 12x</span></div>
            <div class="texto-mutado">R$<?php echo $preço; ?> à vista</div>
            
            <button class="btn btn-pink" href="<?php the_permalink();  ?>">Conheça o Curso</button>      
        </div>
    </div>

    <?php
    endwhile;
    ?>
</section>


<section class="facilitadores">
    <div class="titulo-facilitadores">Facilitadores</div>
    <div class="scroll-cards">

    <?php
    $facilitadores = new WP_Query( array(
        'posts_per_page' => -1,
        'post_type'      => 'facilitadores-cursos',
        'orderby'        => 'menu_order',
    ) );
    while ( $facilitadores->have_posts() ) : $facilitadores->the_post();
    $cargo = get_the_terms($facilitadores->post->ID, 'cargo')[0]->name;
    ?>

        <div class="facilitadores-card">
            <img class="imagem-perfil" width="257" src="<?php echo get_the_post_thumbnail_url()?>">

            <div class="inline-flex">
                <div class="textos">
                    <div class="nome"><?php echo the_title()?></div>
                    <div class="cargo"><?php echo $cargo; ?></div>
                </div>

                <div class="imagem">
                    <img src="<?php echo get_template_directory_uri()?>/icons/arrow-pink.svg">
                </div>
            </div>
            
            
        </div>
    
    <?php
    endwhile;  
    wp_reset_postdata();
    ?>


    </div>
</section>


<!--FALTA:
 -adicionar botoes de comentarios, like e compartilhar
 -ajustar fonte
 -adicionar mais 2 autores
 -adicionar hover no botão-->
<section class="insight-news">
    <div class="container-main">
        <div class="container-section">

            <div class="container-news-left">
                <div class="tips-container-flex">
                    <div class="titulo-insight-news">Insight News</div>
                    <div class="ver-tudo">
                        ver todos <img src="<?php echo get_template_directory_uri()?>/icons/arrow-pink.svg">
                    </div>
                </div>

                <div class="cards-insight-news">
                    <div class="first-cards-insight">

                    
                        <?php

                        $new_query = new WP_Query( array(
                            'posts_per_page' => 1,
                            'post_type'      => 'post',
                            'order'        => 'DES',
                        ) );
                        //print_r($new_query);
                        ?>

                        <?php
                        while ( $new_query->have_posts() ) : $new_query->the_post();
                    
                        ?>

                            <div class="card-insight-first">
                                <div class="col">
                                            
                                    <img class="imagem-card-insight" src="<?php echo get_the_post_thumbnail_url()?>" alt="tem thumb">

                                </div>

                                <div class="col">
                                    <h1 class="titulo-card-insight"><?php echo the_title()?></h1>
                                    <div class="resumo-card-insight"><?php echo get_the_excerpt(); ?></div>
                                </div>
                                
                            </div>
                        
                        <?php
                        endwhile;  
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="last-cards-insight">

                    

                        <?php
                        // CARDS MENORES
                        $new_query = new WP_Query( array(
                            'posts_per_page'=> 3,
                            'post_type'     => 'post',
                            'order'         => 'DES',
                            'offset'        => 1
                        ) );
                        ?>

                        <?php
                        while ( $new_query->have_posts() ) : $new_query->the_post();
                        ?>

                            <div class="card-insight-last">    

                                <img class="imagem-card-insight" src="<?php echo get_the_post_thumbnail_url()?>">
                            
                                <div class="inner-card-insight">
                                    <h1 class="titulo-card-insight"><?php echo the_title()?></h1>
                                    <div class="resumo-card-insight"><?php echo get_the_excerpt(); ?></div>
                                </div>
                                
                            </div>
                                
                                
                        

                        <?php
                        endwhile;  
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

            <div class="container-news-right">
                <div class="tips-container-flex">
                    <div class="autores-insight-news">Autores</div>
                    <div class="ver-tudo">
                        ver todos <img src="<?php echo get_template_directory_uri()?>/icons/arrow-pink.svg">
                    </div>
                </div>

                <?php

                    //um por um =(
                    $id_ana_couto = 1;
                    $args=array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'author' => $id_ana_couto,
                    );

                    $postagem_ana_couto = get_posts($args);

                ?>

                <div class="container">
                    <div class="col-esquerdo">
                        <div class="titulo-post"><?php echo $postagem_ana_couto[0]->post_title; ?></div>
                        
                        <div class="autor">Por <strong><?php echo the_author_meta('display_name', $id_ana_couto); ?></strong></div>
                    </div>
                    <div class="col-direito">
                        <div class="foto-autor" style="background-image: url(<?php echo get_avatar_url($id_ana_couto); ?>)"></div>
                    </div>
                </div>

                <hr>

                <?php

                    //um por um =(
                    $id_hugo = 2;
                    $args=array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'author' => $id_hugo,
                    );

                    $postagem_hugo = get_posts($args);

                ?>

                <div class="container">
                    <div class="col-esquerdo">
                        <div class="titulo-post"><?php echo $postagem_hugo[0]->post_title; ?></div>
                        
                        <div class="autor">Por <strong><?php echo the_author_meta('display_name', $id_hugo); ?></strong></div>
                    </div>
                    <div class="col-direito">
                        <div class="foto-autor" style="background-image: url(<?php echo get_avatar_url($id_hugo); ?>)"></div>
                    </div>
                </div>
            
            </div>

        </div>
    </div>
    

</section>

    
</main>

<?php get_footer(); ?>

