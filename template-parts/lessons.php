<?php /* Template Name: Lessons */ ?>
<?php

$course_id = $_GET['course_id'];
$lesson_id = $_GET['lesson_id'];
if (!is_user_logged_in()) {
    $home = site_url();
    wp_redirect($home);
    die();
}
$learning = learn_press_is_learning_course($course_id);
if ($learning == false) {
    $course_url = site_url('/cursos/');
    wp_redirect($course_url);
    die();
}


?>
<?php get_header(); ?>


<?php


//função nativa do learnpress


$course = learn_press_get_course($course_id);

$curriculum = $course->get_curriculum_raw();
// print_r($curriculum);
$qtd_secoes = count($curriculum);
//echo $qtd_secoes;
//coloquei qtd - 1 pq ele retorna sempre um array a mais, porém vazio =)
?>
<div id="sidebar">


    <?php
    for ($i = 0; $i <= $qtd_secoes - 1; $i++) {
        $nome_professor = $curriculum[$i]['title'];
        $cargo = $curriculum[$i]['description'];
        $licoes = $curriculum[$i]['items'];

        $qtd_licoes = count($licoes);



    ?>
        <h2><?php echo $nome_professor ?></h2>

        <ul class="gp-links">
            <?php
            foreach ($licoes as $licao) {

                $lesson_title = $licao['title'];
                $lesson_id_new = $licao['id'];

            ?>

                <li class="gp-link">
                    <a href="<?php echo site_url('/lessons/') ?>?course_id=<?php echo $course_id ?>&lesson_id=<?php echo $lesson_id_new ?>">
                        <?php echo $lesson_title ?>
                    </a>
                </li>


        <?php
            }
            unset($licao);
        }

        ?>

        </ul>

        <div id="sidebar-btn">
            <img src="<?php echo get_template_directory_uri() ?>/icons/sidebar.svg" alt="">
        </div>
</div>




<?php

$args = array(
    'post_type' => 'lp_lesson',
    'p' => $lesson_id,
);
$loop = get_posts($args);
$conteudo = $loop[0]->post_content;
$titulo = $loop[0]->post_title;


?>


<div class="love">
    <h1><?php echo $titulo ?></h1>
    <p><?php echo $conteudo ?></p>
</div>



<?php get_footer() ?>