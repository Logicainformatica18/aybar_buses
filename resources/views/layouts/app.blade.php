<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="{{ asset('dist/img/favicon.png') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body>
    <style type="text/css">
        @font-face {
            font-family: "Montalban";
            src: url("{{ asset('fuente_one/Montalban.otf') }}");
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: "Montserrat-Bold";
            src: url("{{ asset('fuente_one/Montserrat-Bold.ttf') }}");
            font-weight: 600;
            font-style: bold;
        }

        @font-face {
            font-family: 'Montserrat-Regular';
            src: url("{{ asset('fuente_one/Montserrat-Regular.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat-BoldItalic';
            src: url("{{ asset('fuente_one/Montserrat-BoldItalic.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat-Medium';
            src: url("{{ asset('fuente_one/Montserrat-Medium.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat-SemiBold';
            src: url("{{ asset('fuente_one/Montserrat-SemiBold.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }
    </style>







    <div id="app">
        <nav class="main-header navbar navbar-expand" style="background: linear-gradient(to right, #023039,#011316 );">
            {{-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul> --}}





            
            <div class="container-fluid">
                <div class="row w-100">
                    <div class="col col-lg-1 col-sm-12 col-xs-12">

                    </div>
                    <div class="col col-lg-4 col-sm-8 col-xs-12">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('ayba/3.png') }}" alt="" width="130px">
                        </a>
                        
                    </div>
                    <div class="col col-lg-2">

                    </div>
                    <div class="col col-lg-4 col-sm-1 d-flex justify-content-end align-items-center">
                        <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="40px"
                            class="mr-2">
                        <a href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a>
                    </div>

                </div>
            </div>
        </nav>
        <p>
            &nbsp;&nbsp;
            &nbsp;&nbsp;

        </p>
        <p>
            &nbsp;
            &nbsp;
        </p>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{--     
<div class="position-absolute w-100 h-100 d-flex align-items-end" style="top: 0; left: 0; z-index: -1;">
  <p class="align-items-end"></p>
  <img src="{{asset('lineas.png')}}" alt="" class="img-fluid" style="width: 100%; height: 50%;">
</div> --}}
    <p>
        &nbsp;
        &nbsp;
    </p>
    <p>
        &nbsp;
        &nbsp;
    </p>



    <!-- Coloca este script donde quieras que aparezca el botón -->
    <!-- Asegúrate de tener cargada la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos para el botón flotante de WhatsApp */
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            /* Color de fondo del botón */
            border-radius: 50%;
            /* Hace que el botón tenga forma circular */
            width: 60px;
            height: 60px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-btn a {
            display: block;
            width: 100%;
            height: 100%;
            line-height: 60px;
            color: #fff;
            /* Color del ícono */
            font-size: 40px;
        }
    </style>

    <!-- Botón flotante de WhatsApp -->
    <div class="whatsapp-btn">
        <a href="https://wa.pe/onedigital" target="_blank" title="Enviar mensaje por WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <p></p>
    <br>

    {{-- <footer class="main-footer" style="height:310px; background-color:#bdbbbb;color:white">

        <br>

        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-2 col-sm-12">
                    <p></p>
                    <img src="{{ asset('logo_one.png') }}" alt="" width="100%" style="margin-bottom: -20px">
                    <p></p>
                </div>
                <div class="col-lg-5 col-md-9">
                    <p></p>
                    <!-- Descripción a la izquierda -->


                    <p class="text-justify" style="color:#023039;font-family:Montserrat-Semibold;font-size:100%">
                        Somos una empresa de capacitaciones y consultoría en herramientas digitales, inteligencia de
                        negocio y analítica de datos, <b style="font-family: Montserrat-Bold">Asesoramos, capacitamos y
                            formamos</b>
                        profesionales mediante el uso de los softwares más requeridos del mercado.
                    </p>

                    <span
                        style="background-image: linear-gradient(45deg, rgb(255, 0, 149), red); -webkit-background-clip: text; color: transparent;">
                        <a href="https://anthonycode.com"target="_blank">Copyright © 2024 Dev.
                            AnthonyCode</a></span>
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-3" style="font-family: Montserrat-Regular;color:#023039">
                    <p></p>


                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com/ONEDIGITAL.Latam/"target="_blank"> <img
                            src="{{ asset('dist/img/page_certification/Recurso 3.png') }}" alt=""
                            width="30px"></a>
                    <a href=""target="_blank"> <img
                            src="{{ asset('dist/img/page_certification/Recurso 1.png') }}" alt=""
                            width="30px"></a>
                    <a href="https://www.instagram.com/onedigitall.latam/"target="_blank"> <img
                            src="{{ asset('dist/img/page_certification/Recurso 2.png') }}" alt=""
                            width="30px"></a>
                    <a href="https://www.youtube.com/@onedigitall"target="_blank"> <img
                            src="{{ asset('dist/img/page_certification/Recurso 6.png') }}" alt=""
                            width="30px"></a>
                    <a href="https://www.linkedin.com/company/77579829/admin/feed/posts/"target="_blank"> <img
                            src="{{ asset('dist/img/page_certification/Recurso 5.png') }}" alt=""
                            width="30px"></a>
                    <a href="https://wa.pe/onedigital"target="_blank"> <img
                            src="{{ asset('dist/img/page_certification/Recurso 4.png') }}" alt=""
                            width="30px"></a>
                    <p></p>
                    <!-- Enlaces en el centro -->
                    <a href="#">Nosotros</a> |
                    <a href="#">Cursos</a> |
                    <a href="#">Política de Privacidad</a>
                </div>

            </div>
        </div>
        </div>


    </footer> --}}

</body>

</html>
