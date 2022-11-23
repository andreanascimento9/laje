<?php /* Template Name: Conteudo */ ?>
<?php
get_header();
global $wp_query;

?>
<main class="main-conteudo">

    <!--FALTA:
 -adicionar botoes de comentarios, like e compartilhar
 -ajustar fonte
 -adicionar mais 2 autores
 -adicionar botao carregar mais
 -adicionar hover no botão-->
    <section class="insight-news in-conteudo">
        <div class="container-main">
            <div class="container-section">

                <div class="container-news-left">
                    <div class="tips-container-flex">
                        <div class="titulo-insight-news">Insight News</div>

                    </div>

                    <div class="cards-insight-news">
                        <div class="first-cards-insight">


                            <?php

                            $new_query = new WP_Query(array(
                                'posts_per_page' => 1,
                                'post_type'      => 'post',
                                'order'        => 'DES',
                            ));
                            //print_r($new_query);
                            ?>

                            <?php
                            while ($new_query->have_posts()) : $new_query->the_post();

                            ?>

                                <div class="card-insight-first" onclick="location.href='<?php the_permalink() ?>'">
                                    <div class="col">

                                        <img class="imagem-card-insight" src="<?php echo get_the_post_thumbnail_url() ?>" alt="tem thumb">

                                    </div>

                                    <div class="col">
                                        <h1 class="titulo-card-insight"><?php echo the_title() ?></h1>
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
                            $new_query = new WP_Query(array(
                                'posts_per_page' => 3,
                                'post_type'     => 'post',
                                'order'         => 'DES',
                                'offset'        => 1
                            ));
                            ?>

                            <?php
                            while ($new_query->have_posts()) : $new_query->the_post();
                            ?>

                                <div class="card-insight-last">

                                    <img class="imagem-card-insight" src="<?php echo get_the_post_thumbnail_url() ?>">

                                    <div class="inner-card-insight">
                                        <h1 class="titulo-card-insight"><?php echo the_title() ?></h1>
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
                        <div class="autores-insight-news">Mais lidos</div>

                    </div>

                    <?php

                    //um por um =(
                    $id_ana_couto = 1;
                    $args = array(
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


                </div>


                <div class="conteudo-cards-insight items" id="cards">

                    <?php
                    // CARDS MENORES
                    $new_query = new WP_Query(array(

                        'post_status'       => 'publish',
                        'post_type'         => 'post',
                        'order'             => 'DESC',
                        'offset'            => 4,

                    ));
                    ?>

                    <?php
                    if ($new_query->have_posts()) :
                        while ($new_query->have_posts()) : $new_query->the_post();
                    ?>

                            <div class="card-insight-last item" id="card-post">

                                <img class="imagem-card-insight" src="<?php echo get_the_post_thumbnail_url() ?>">

                                <div class="inner-card-insight">
                                    <h1 class="titulo-card-insight"><?php echo the_title() ?></h1>
                                    <div class="resumo-card-insight"><?php echo get_the_excerpt(); ?></div>
                                </div>

                            </div>

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                        <div class="buttonToogle"><a href="Javascript: void(0)" class="showMore"></a></div>
                    <?php endif; ?>
                </div>







            </div>
        </div>


    </section>

    <section class="autores">
        <div class="titulo-autores">Autores</div>

        <div class="cards-autores">

            <div class="card-autor">
                <div class="col-esquerdo">
                    <div class="titulo-card">Lorem ipsum dol or sit aam eet om sec tuem sit aam eet om sec tuer</div>
                    <hr>
                    <div class="autor">Por Nome do Autor</div>
                </div>

                <div class="col-direito">
                    <div class="foto-autor" style="background-image:url(http://localhost/tips/wp-content/uploads/2022/08/Peças_TIP-Site_Miniatura-Danilo-Cid.png);"></div>
                </div>
            </div>

            <div class="card-autor">
                <div class="col-esquerdo">
                    <div class="titulo-card">Lorem ipsum dol or sit aam eet om sec tuem sit aam eet om sec tuer</div>
                    <hr>
                    <div class="autor">Por Nome do Autor</div>
                </div>

                <div class="col-direito">
                    <div class="foto-autor" style="background-image:url(http://localhost/tips/wp-content/uploads/2022/08/Peças_TIP-Site_Miniatura-Danilo-Cid.png);"></div>
                </div>
            </div>

            <div class="card-autor">
                <div class="col-esquerdo">
                    <div class="titulo-card">Lorem ipsum dol or sit aam eet om sec tuem sit aam eet om sec tuer</div>
                    <hr>
                    <div class="autor">Por Nome do Autor</div>
                </div>

                <div class="col-direito">
                    <div class="foto-autor" style="background-image:url(http://localhost/tips/wp-content/uploads/2022/08/Peças_TIP-Site_Miniatura-Danilo-Cid.png);"></div>
                </div>
            </div>

        </div>

    </section>


    <section class="especiais">
        <div class="titulo-especiais">Especiais</div>

        <div class="cards-especiais">

            <div class="card-especial">
                <img class="imagem-card-especial" src="http://localhost/tips/wp-content/uploads/2022/08/Rectangle-225-1.svg">

                <div class="inner-card-especial">
                    <h1 class="titulo-card-especial">Lorem Ipsum dlorem Sit Ameet On Se</h1>
                    <p class="resumo-card-especial">
                        Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            <div class="card-especial">
                <img class="imagem-card-especial" src="http://localhost/tips/wp-content/uploads/2022/08/Rectangle-225-1.svg">

                <div class="inner-card-especial">
                    <h1 class="titulo-card-especial">Lorem Ipsum dlorem Sit Ameet On Se</h1>
                    <p class="resumo-card-especial">
                        Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            <div class="card-especial">
                <img class="imagem-card-especial" src="http://localhost/tips/wp-content/uploads/2022/08/Rectangle-225-1.svg">

                <div class="inner-card-especial">
                    <h1 class="titulo-card-especial">Lorem Ipsum dlorem Sit Ameet On Se</h1>
                    <p class="resumo-card-especial">
                        Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            <div class="card-especial">
                <img class="imagem-card-especial" src="http://localhost/tips/wp-content/uploads/2022/08/Rectangle-225-1.svg">

                <div class="inner-card-especial">
                    <h1 class="titulo-card-especial">Lorem Ipsum dlorem Sit Ameet On Se</h1>
                    <p class="resumo-card-especial">
                        Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

        </div>

    </section>


    <!-- LISTAGEM DE POSTS MAIS LIDOS -->
    <ul>
        <?php $popular = new WP_Query(array('posts_per_page' => 3, 'meta_key' => 'popular_posts', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
        //print_r($popular);
        while ($popular->have_posts()) : $popular->the_post(); ?>

            <?php the_title(); ?>

        <?php endwhile;
        wp_reset_query();
        wp_reset_postdata(); ?>
    </ul>
    <!-- ## -->

</main>

<?php get_footer(); ?>