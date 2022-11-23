jQuery(function ($) {

    // $ > instancia do jQuery

    $('.menu').on('click', function () {
        $('.menu-mobile').slideDown(500);
        $('.main-home').addClass('d-none');
        $('.main-single-conteudo').addClass('d-none');
        $('.main-conteudo').addClass('d-none');
        $('.main-sobre').addClass('d-none');
        $('.main-curso').addClass('d-none');
        $('.main-pdf').addClass('d-none');
        $('.main-nossa-comunidade').addClass('d-none');
        $('footer').addClass('d-none');
    });
    //btn-close-menu
    $('.btn-close-menu').on('click', function () {
        $('.menu-mobile').slideUp(300);
        $('.main-home').removeClass('d-none');
        $('.main-single-conteudo').removeClass('d-none');
        $('.main-conteudo').removeClass('d-none');
        $('.main-sobre').removeClass('d-none');
        $('.main-curso').removeClass('d-none');
        $('.main-pdf').removeClass('d-none');
        $('.main-nossa-comunidade').removeClass('d-none');
        $('.converse').removeClass('d-none');
        $('footer').removeClass('d-none');

    });

    $('.procurar').on('click', function () {

        $('.main-home').addClass('d-none');
        $('.main-single-conteudo').addClass('d-none');
        $('.main-conteudo').addClass('d-none');
        $('.main-sobre').addClass('d-none');
        $('.main-curso').addClass('d-none');
        $('.main-pdf').addClass('d-none');
        $('.main-nossa-comunidade').addClass('d-none');
        //


        $('.converse').addClass('d-none');
        $('.footer-desk').css('padding-top', '0')
        $('.template-buscar').slideDown(500);

        $('#close-search').on('click', function () {
            $('.template-buscar').slideUp(300);

            $('.main-home').removeClass('d-none');
            $('.main-single-conteudo').removeClass('d-none');
            $('.main-conteudo').removeClass('d-none');
            $('.main-sobre').removeClass('d-none');
            $('.main-curso').removeClass('d-none');
            $('.main-pdf').removeClass('d-none');
            $('.main-nossa-comunidade').removeClass('d-none');

            $('.converse').removeClass('d-none');
        })
    })

    $('.menu-link').on('click', function () {
        $('.inner-menu-mobile').slideDown(500);

    });

    $('.edit-profile').on('click', function () {
        $('.ip_file').click();
        $('.btn-salvar').show(2000)
    })

    $('#sidebar-btn').on('click', function () {
        $('#sidebar').toggleClass('visible');
    });


})