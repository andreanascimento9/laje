<?php /* Template Name: Sobre */ ?>
<?php get_header(); ?>

<main class="main-sobre">
    <section class="banner-principal-sobre">
        <div class="col-esquerdo titulo-principal">
            SOMOS A MAIOR COMUNIDADE DE BRANDING DO BRASIL
        </div>

        <div class="col-centro">
            <img src="<?php echo get_template_directory_uri()?>/icons/icone-sobre-sol.svg">
        </div>

        <div class="col-direito descricao">
            Feito com e para nossa comunidade, Laje foi criada para fomentar a cultura de Branding e Inovação no Brasil, 
            conectando especialistas, alunos, parceiros e empreendedores para criarmos juntos um impacto positivo. 
        </div>
    </section>

    <div class="center-mt--10">
        <svg width="274" height="238" viewBox="0 0 274 238" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M137.469 237.031L0.979086 0.2228L273.966 0.222824L137.469 237.031Z" fill="#A00059"/>
        </svg>
    </div>

    <section class="banner-secundario-sobre">
        <div class="col-esquerdo">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/seta-sobre-azul.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/seta-sobre-azul.svg">
        </div>

        <div class="col-centro descricao">
            TIP integra, ao lado da Ana Couto, da LAJE e de centenas pessoas, um ecossistema que cria e gere valor através de trocas 
            entre organizações e profissionais. Fazemos parte de uma comunidade inspiradora e engajada, que a partir da co-criação, do 
            compartilhamento de conhecimento e da multiplicação de oportunidades, gera impacto positivo no universo de marcas, negócios 
            e comunicação.

            Fomentamos a cultura de Branding e Inovação através de cursos, conteúdos e networking. Aqui, tudo é feito com e para o nosso 
            ecossistema: nossos alunos são entusiastas do assunto e também clientes, nossos clientes são professores e mentores, e nosso 
            professores são especialistas do mercado. Acreditamos que, numa cultura de aprendizado, todos têm muito o que a aprender e muito 
            o que ensinar. 
        </div>

        <div class="col-direito titulo-principal">
           LAJE É A PLATAFORMA DE CONTEÚDO E APRENDIZAGEM DA ANA COUTO
        </div>

    </section>

    <section class="proposta-sobre">
        <div class="col-esquerdo">
            <div class="titulo-principal mb-50">
                Qual é a nossa proposta?
            </div>

            <div class="subtitulo">
                Para Organizações
            </div>
            <div class="descricao mb-50">
                Capacidade sobre Branding e Inovação para potencializar o negócio. Criar conexões e troca entre
                empreendedores e especialistas na área.
            </div>

            <div class="subtitulo">
                Para Pessoas
            </div>
            <div class="descricao">
                Aprendizagem e oportunidades contínuas para potencializar carreiras.
            </div>
        </div>
        <div class="col-direito">
            <img src="<?php echo get_template_directory_uri(); ?>/images/site_ac_sobre.svg">
        </div>

    </section>

    <section class="ideal-sobre">
        <div class="col-esquerdo">
            <img src="<?php echo get_template_directory_uri();?>/images/ideal-sobre.svg">
        </div>

        <div class="col-direito">
            <div class="titulo-principal">
                Ideal para
            </div>
            <div class="descricao">
                Profissionais e times de marketing, branding e comunicação que buscam método, conhecimento e vocabulário compartilhados para gerar valor para organização.<br><br>
                Líderes e gestores responsáveis pela construção da marca em que atuam, que buscam um olhar mais estratégico alinhado ao negócio.<br><br>
                Estudantes, curiosos e apaixonados em geral por branding e inovação que buscam aprender ainda mais para se potencializar.<br><br>
                Empreendedores e profissionais autônomos buscam mais método e embasamento para construir valor para seus projetos e negócios
            </div>
        </div>

    </section>

    <section class="ecossistema-sobre">
        <div class="inline-flex">
            <div class="col-esquerdo">
                JÁ FAZEM PARTE DO NOSSO ECOSSISTEMA
                <button class="btn-transparent">Conheça Aqui</button>
            </div>
            <div class="col-direito">
                Profissionais de branding, marketing, comunicação, autônomos, 
                gestores e aspirantes a gestores de branding
            </div>
        </div>
        
        <div class="container-img">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/barra-foguete.svg">
        </div>

        <div class="inline-flex-custom">
            <div class="col-esquerdo">
                <div class="numero">+20</div>
                <div class="texto">Estados do Brasil e brasileiros espalhados pelo mundo</div>
            </div>
            <div class="col-direito">
                <div class="numero">+800</div>
                <div class="texto">Alunos</div>
            </div>
        </div>

       
    </section>

    <!--Falta as imagens separadas dos clientes-->
    <section class="clientes-sobre">
        <img src="<?php echo get_template_directory_uri(); ?>/images/clientes.svg" alt="">
        <!-- <div class="clientes">
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>

            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
            <p class="cliente">cliente01</p>
        </div> -->
    </section>
</main>

<?php get_footer(); ?>