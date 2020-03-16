<!-- arquivo para servir como layout -->
<!doctype html>
<html>

<head>
    <title>Pic@rd - @yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/gd.png">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="font-taesa/style.css">

    <!-- CSS Plugin data -->
    <link rel="stylesheet" href="js/pickadate/lib/themes/classic.css">
    <link rel="stylesheet" href="js/pickadate/lib/themes/classic.date.css">
</head>

<body>
    <div class="d-flex">
        <div class="container mt-4">
            <nav class="ml-xl-n2 navbar navbar-expand-lg navbar-light p-0">
                <a href="index.html">

                    <img src="img/logo-taesa.png" class="img-fluid ml-md-0 mr-lg-5" alt="Taesa">
                </a>
                <button class="mt-4 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu1"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse ml-lg-8 mt-3 navbar-collapse" id="navbarMenu1">
                    <ul class="font-weight-bold nav nav-pills text-cor-texto-menu navbar-nav mr-auto">
                    </ul>
                    <div class="btn btn-azul-5 cor-azul-hover text-branco fs-16 px-4 py-2  mt-lg-2 mt-2">
                        <span><i class="ft-edit"></i>Login</span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="banner mt-lg-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="container-titulo ml-4">
                    <section id="hero">
                        <div class="titulo-page hero-container"  data-aos="fade-in">                            
                            <h1 class="fs-h1 text-branco h1-embaralha" id="tlt">Bem vindo ao <span class ="typed" data-typed-items="Dados, Inteligência, Portal, Picard."></span></h1>
                            
                        </div>
                    </section>
                   
                    {{-- <div aria-label="breadcrumb">
                        <ol class="bg-transparent breadcrumb p-0 text-branco">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <span class="branco">Home</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <span class="branco">Onde Estamos</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">
                                    <span class="branco">Etao</span>
                                </a>
                            </li>
                        </ol>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    


    @section('sidebar')
    @show

    <div class="container">
        @yield('content')
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- JS Plugin Slider -->
    <script src="js/pickadate/lib/picker.js"></script>
    <script src="js/pickadate/lib/picker.date.js"></script>

    <script src="js/index.js"></script>
    <script src="js/shuffle-text.js"></script>
    <script src="typed.js/typed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    <script>
        "use strict";
        var typed_strings = $(".typed").data('typed-items');
        typed_strings = typed_strings.split(',')
        new Typed('.typed', {
            strings: typed_strings,
            loop: false,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 2000
        });
        
    </script>
</body>

</html>