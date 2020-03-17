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
<body class = "body-green">
    <div class="page-wrapper">
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between px-5">
                            <div class="align-items-center d-flex">
                                <div class="d-column d-inline-block d-none mr-3 px-3">
                                    <a href="/">
                                        <img alt="TAESA" src="img/logo-taesa.png" width="130px" >
                                    </a>
                                </div>
                                    <h2 style="margin-top: 15px;" class="border-left border-white col-12 d-md-inline-block d-none mr-3 px-3 text-branco">Bem vindo <span class ="typed" data-typed-items="à Informação, à Inovação, à Inteligência, ao Picard."></span></h2>
                            </div>
                            <div class="btn btn-azul-5 cor-azul-hover text-branco fs-16 px-4 py-2  mt-lg-2 mt-2">
                                <span><i class="ft-edit"></i>Login</span>
                            </div>
                        </div>
                    </div>
                </div><!--//branding-->
            </div><!--//container-->
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