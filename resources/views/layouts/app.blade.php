<!-- arquivo para servir como layout -->
<!doctype html>
<html>

<head>
    <title>PICARD - @yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/gd.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/picard.css">

    <link rel="stylesheet" href="font-taesa/style.css">

    <!-- CSS Plugin data -->
    <link rel="stylesheet" href="js/pickadate/lib/themes/classic.css">
    <link rel="stylesheet" href="js/pickadate/lib/themes/classic.date.css">
</head>
<body class="body-green">
    <div class="page-wrapper">
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between px-5">
                            <div class="align-items-center d-flex">
                                <div class="d-column d-inline-block d-none mr-3 px-3">
                                    <a href="/">
                                        <img alt="TAESA" src="img/logo-taesa.png" width="130px">
                                    </a>
                                </div>
                                <h2 style="margin-top: 15px;" class="border-left border-white col-12 d-md-inline-block d-none mr-3 px-3 text-branco">Bem vindo <span class="typed" data-typed-items="à Informação, à Inovação, à Inteligência, ao Picard."></span></h2>
                            </div>
                            <div class="btn btn-azul-5 cor-azul-hover text-branco fs-16 px-4 py-2  mt-lg-2 mt-2">
                                <span><i class="ft-edit"></i>Login</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//branding-->
            </div>
            <!--//container-->
        </header>
        <div class="doc-wrapper">
            @section('sidebar')
            @show
            <div class="container">
                <div class="doc-body row mt-5">
                    @yield('content')
                </div>
            </div>
            @yield('barra-lateral')
        </div>
    </div>
    </div>
    <!-- Main Javascript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="assets/plugins/jquery.js"></script>
    <!--    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--     <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="assets/plugins/stickyfill/dist/stickyfill.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!--<script type="text/javascript" src=" slide/slick/slick.min.js"></script>-->
    <script type="text/javascript" src="assets/plugins/jquery-migrate.js"></script>
    <script type="text/javascript" src="slide/slick/slick.js"></script>
    <!-- galeria de imagens lightbox -->
    <script src="js/magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    <!-- JS Plugin data -->
    <script src="js/pickadate/lib/picker.js"></script>
    <script src="js/pickadate/lib/picker.date.js"></script>

    <script src="js/index.js"></script>
    <script src="js/shuffle-text.js"></script>
    <script src="typed.js/typed.js"></script>
    <script>
        "use strict";
        var typed_strings = $(".typed").data('typed-items');
        typed_strings = typed_strings.split(',')
        new Typed('.typed', {
            strings: typed_strings
            , loop: false
            , typeSpeed: 100
            , backSpeed: 50
            , backDelay: 2000
        });

        $(document).ready(function() {
            $('.galeria').magnificPopup({
                delegate: 'button', // child items selector, by clicking on it popup will open
                type: 'image'
                , gallery: {
                    enabled: true
                }
            });
        });
        // With JQuery ion.rangeslider
        $(".js-range-slider").ionRangeSlider({
            min: 0
            , max: 100
            , skin: "big"
            , postfix: "%"
        , });
        $("#range2").ionRangeSlider({
            skin: "flat"
            , grid: true
            , min: 0
            , max: 6
            , grid: true
            , step: 1
            , values: [0, 1, 2, 3, 4, 5, 6]
        , });
        $('.slide').slick({
            dots: false
            , infinite: true
            , speed: 300
            , slidesToShow: 4
            , slidesToScroll: 4
            , prevArrow: '<button class="slick-prev"><i class="ft-seta_left"></i></button>'
            , nextArrow: '<button class="slick-next"><i class="ft-seta_right"></i></button>'
            , responsive: [{
                    breakpoint: 992
                    , settings: {
                        dots: true
                        , slidesToShow: 2
                        , slidesToScroll: 2
                        , arrows: false
                    }
                }
                , {
                    breakpoint: 576
                    , settings: {
                        dots: true
                        , slidesToShow: 1
                        , slidesToScroll: 1
                        , arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>
</body>

</html>
