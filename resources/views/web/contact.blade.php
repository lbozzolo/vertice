<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Diseños, Sistemas, Servidores y Apps">
    <meta name="author" content="Ansonika">
    <title>VerticeDigital.com.ar | Desarrollos a Medida</title>

    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('formulario/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('formulario/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('formulario/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('formulario/css/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('formulario/css/custom.css') }}" rel="stylesheet">

    <!-- MODERNIZR -->
    <script src="{{ asset('formulario/js/modernizr.js') }}"></script>

    <style type="text/css">

        .content-left-wrapper.bg_hotel:before {
            background: url({{ asset('images/login-background.jpg') }}) center center no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->


<!-- /menu -->

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 content-left">
            <div class="content-left-wrapper bg_hotel">
                <div class="wrapper">
                    {{--<a href="{{ route('home') }}" id="logo"><img src="{{ asset('formulario/img/logo.png') }}" alt="" width="250" height="118"></a>--}}
                    <!-- /social -->
                    <div class="left_title">

                            <img src="{{ asset('images/logos/logo_sin_cubo_blanco.png') }}" id="logo" style="width: 60%; margin-bottom: 100px">


                        <h3>Diseños y desarrollos a Medida</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <!--/content-left-wrapper -->
        </div>
        <!-- /content-left -->

        <div class="col-lg-6 content-right" id="start">
            <div id="wizard_container">
                <div id="top-wizard">
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->


                <form method="post" action="{{ asset('formulario/sendemail.php') }}" id="wrapped">

                    <div id="middle-wizard">

                        <!-- /step-->


                        <!-- /step-->

                        <div class="submit step">
                            <h3 class="main_question">Por favor completá la información y nos comunicaremos a la brevedad.</h3>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control required" placeholder="Nombre">
                                <i class="icon-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control required" placeholder="Apellido">
                                <i class="icon-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control required" placeholder="Email">
                                <i class="icon-envelope"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Telefono">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control notes" name="message" placeholder="Comentario"></textarea>
                            </div>
                        </div>
                        <!-- /step-->

                    </div>
                    <!-- /middle-wizard -->
                    <div>
                        <button type="submit" name="process" class="submit">Enviar</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->

            <div class="footer">

                <em>© 2019 by Verticedigital.com.ar</em>
            </div>
            <!-- Footer -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->


<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('formulario/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('formulario/js/common_scripts.min.js') }}"></script>
<script src="{{ asset('formulario/js/velocity.min.js') }}"></script>
<script src="{{ asset('formulario/js/functions.js') }}"></script>

<!-- Wizard script -->

</body>
</html>