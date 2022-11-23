<?php /* Template Name: Cursos */ ?>
<?php get_header(); ?>
<main class="main-curso">

<section class="cursos cursos-sobre">
    
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
            
            <button class="btn btn-pink" onclick="location.href='<?php echo the_permalink(); ?>'">Conheça o Curso</button>      
        </div>
    </div>

    <?php
    endwhile;
    ?>
</section>

<section class="calendario-cursos">
    <div class="titulo-secao">Calendário Cursos</div>

    <div class="container-section">
        <div class="cursos-custom">
            

        
            <?php
            
                $calendario = new WP_Query( array(
                    'posts_per_page' => 2,
                    'post_type'      => 'calendario-cursos',
                    'orderby'        => 'menu_order',
                ) );
                //print_r($calendario);
                while ( $calendario->have_posts() ) : $calendario->the_post();

                    $carga_horaria = get_post_meta( get_the_ID(), 'tips_carga_horaria', TRUE );
                    $date = get_post_meta( get_the_ID(), 'tips_data_curso', TRUE );
                    $url_curso = get_post_meta( get_the_ID(), 'tips_url_curso', TRUE );
                    $dia_lancamento = date('d', strtotime($date));
                    $mes_lancamento = date('M', strtotime($date));

                    switch($mes_lancamento){
                        //Janeiro tá safe
                        case "Feb":
                            $mes_lancamento = "Fev";
                            break;
                        //Março tá safe
                        case "Apr":
                            $mes_lancamento = "Abr";
                            break;
                        case "May":
                            $mes_lancamento = "Mai";
                            break;
                        //Junho e Julho Safe
                        case "Aug":
                            $mes_lancamento =  "Ago";
                            break;
                        case "Oct":
                            $mes_lancamento = "Out";
                            break;
                        //Novembro tá safe
                        case "Dec":
                            $mes_lancamento = "Dez";
                            break;
                    }
                

                    ?>
                    <div class="box-curso-custom">
                        <div class="col-esquerdo">
                            <div class="lancamento">
                                <div class="dia-lancamento">
                                    <?php echo $dia_lancamento; ?>
                                </div>
                                <div class="mes-lancamento">
                                    <?php echo $mes_lancamento; ?>
                                </div>
                            </div>
                            
                            <div class="sobre-curso">
                                <div class="titulo"><?php echo the_title();?></div>
                                <div class="resumo"><?php echo the_excerpt(); ?></div>
                            </div>
                        </div>

                        <div class="col-direito">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/alarm.svg"> <span class="carga-horaria">Carga Horária</span> <?php echo $carga_horaria; ?>
                            <br>
                            <button onclick="location.href='<?php echo $url_curso; ?>'" class="btn-pink">Conheça o Curso</button>
                        </div>
                    </div>

                    <br>
                    
                    <?php
                
                
                endwhile;
            ?>
            
        </div>

        <div class="calendario">
                <img src="<?php echo get_template_directory_uri();?>/images/calendario.svg">
        </div>
    </div>

    
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


<section class="avaliacao-alunos">

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

        <img src="<?php echo get_template_directory_uri(); ?>/icons/barra-sobre.svg" alt="">
    </div>

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

   
</section>

<section class="perguntas-frequentes">
    <div class="titulo">Perguntas Frequentes</div>

    <?php

    $perguntas = new WP_Query( array(
        'posts_per_page' => -1,
        'post_type'      => 'perguntas-frequentes',
        
    ) );

    //print_r($query);
    while ( $perguntas->have_posts() ) : $perguntas->the_post(); ?>

    <div class="accordion">
        <div class="accordion__item">
            <div class="accordion__title">
                <div class="accordion__arrow"><span class="accordion__arrow-item "><img src="<?php echo get_template_directory_uri() ?>/icons/pf.svg"></span></div> 
                <span class="accordion__title-text"><?php echo the_title(); ?></span>
            </div>
            <div class="accordion__content">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>

    <?php endwhile; ?>

</section>

    
</main>

<?php get_footer(); ?>