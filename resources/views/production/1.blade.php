<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="{{ asset('ayba/icono_nuevo_huaral.png') }}" />
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>Nuevo Huaral</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />

<style>
    .montserrat-<uniquifier> {
  font-family: "Montserrat", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
</style>

    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> --}}

    <script src="{{ asset('js/customer.js') }}"></script>
    <script src="{{ asset('js/Book.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/topic.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/libs/aos/dist/aos.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/intlTelInput.min.js"></script>
</head>


<style type="text/css">
    @font-face {
        font-family: "Montserrat-Bold";
        src: url("{{ asset('fuente_montserrat/Montserrat-Bold.ttf') }}");
        font-weight: 600;
        font-style: bold;
    }

    @font-face {
        font-family: 'Montserrat-Regular';
        src: url("{{ asset('fuente_montserrat/Montserrat-Regular.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-BoldItalic';
        src: url("{{ asset('fuente_montserrat/Montserrat-BoldItalic.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-Medium';
        src: url("{{ asset('fuente_montserrat/Montserrat-Medium.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-SemiBold';
        src: url("{{ asset('fuente_montserrat/Montserrat-SemiBold.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }
</style>
<style>
    .dt-buttons button {
        border-radius: 10px !important;
        font-family: Montserrat-Bold;

    }

    .dt-buttons button span {

        font-color: #ffffff !important;
    }
</style>
<script>



</script>
<body>

    <!-- Preloader -->
    <div class="preloader"><img src="{{ asset('ayba/icono_nuevo_huaral.png') }}" alt="loader" class="lds-ripple img-fluid" /></div>


    <div id="main-wrapper flex-column">


        <!-- INICIO SECCION -->
<header class="header" id="mainHeader" style="  background-color: rgba(0, 0, 0, 0.911);">


    <nav class="navbar   py-0">
        <div class="container">

            <a data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="position-relative navbar-brand me-0 py-0 m-2 " href="/">
                <img src="{{asset('ayba/logo_nuevo_huaral.png')}}" alt="img-fluid" width="120px" style="margin-left:0%">
            </a>

            <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <button class="navbar-toggler text-white border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 mx-auto" style="">
                    <li class="nav-item" style="letter-spacing: 1px;"></li>
                    <li class="nav-item" style="letter-spacing: 1px;">
                        <a class="nav-link" aria-current="page" href="../" style="color: white">
                            <b style="word-spacing: 9px;font-family: Montserrat-SemiBold;" id="inicio">Inscripción</b>
                        </a>
                    </li>



                    {{-- <li class="nav-item ms-2">
                        <a data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="btn btn-sm btn-hover-shadow fs-4 p-1 " href="tel:+5101-9049838" style="color:white;font-family: Montserrat-SemiBold; border-radius:5px; background-color:rgb(19, 67, 77); width: 155px;color:#FFA726;">
                            <i class="ti ti-brand-whatsapp fs-6">&nbsp;</i><span class="text-white">01-9049838 </span>
                        </a>
                    </li> --}}


                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')

<footer class="footer-part pt-4 pb-3 py-2" style="background-color:#000000;">

            <div class="container">
                <div class="justify-content-center">

                    <div class="text-center">


                        <p class="mb-0 text-white">
                            <a class="d-none d-sm-none d-sm-block d-md-block d-lg-block  d-xl-block display-1 fs-4 text-white text-hover-primary  border-primary" href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, Nuevo Huaral&nbsp;&nbsp; | &nbsp;&nbsp; Todos los Derechos reservados
                            </a>
                            <a class="d-sm-none  display-1 fs-2 text-center text-white text-hover-primary  border-primary" href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, Nuevo Huaral <br> Todos los Derechos reservados
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </footer>
<div class="offcanvas offcanvas-start matdash-lp-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #000000e1">
    <div class="offcanvas-header p-4 text-center justify-content-center">
        <img src="{{asset('ayba/logo_nuevo_huaral.png')}}" alt="matdash-img" class="img-fluid" width="150">
    </div>
    <div class="offcanvas-body ">
        <ul class="navbar-nav  flex-grow-1 text-white">
            <li class="nav-item mt-0 text-center">
                <a class="nav-link fs-3  active" aria-current="page" href="/" id="inicio_2">Inscripciíon</a>
            </li>

        </ul>
        <a href="../../admin" class="btn  w-100 py-2 mt-2 text-white" style="background-color: #FFA726">Administrar</a>
        <br>
        <a href="../../logout" class="btn  w-100 py-2 mt-2 text-white" style="background-color: #054E5C">Salir</a>
    </div>
</div>
<!-- FIN SECCION -->
<!-- Agrega este código dentro del <body> de tu página -->

    {{-- <div class="whatsapp-container">
        <div class="whatsapp-message">
            ¿Necesitas ayuda?
        </div>
        <div class="whatsapp-btn">
            <a href="https://bit.ly/PGWSP" target="_blank" title="Enviar mensaje por WhatsApp">

                <i class="ti ti-brand-whatsapp"></i>
            </a>
        </div>

    </div> --}}

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtiene la URL actual
        const currentURL = window.location.pathname;

        // Mapeo de rutas a arrays de IDs
        const menuItems = {
            "/": ["inicio", "inicio_2"],
            "/nosotros": ["nosotros", "nosotros_2"],
            "/proyectos": ["proyectos","proyectos_2"],
            "/blog": ["blog","blogs_2"],
            "/contacto": ["contacto","contacto_2"]
        };

        // Verifica si la URL coincide con una clave en menuItems
        if (menuItems[currentURL]) {
            // Itera sobre los IDs asociados a la URL y aplica el estilo
            menuItems[currentURL].forEach(id => {
                const element = document.getElementById(id);
                if (element) {
                    element.style.textDecoration = "underline";
                    element.style.color = "#FFA726";
                    element.style.textDecorationThickness = "3px"; // Grosor del subrayado
                    element.style.textDecorationColor = "white"; // Color blanco
                    element.style.textUnderlineOffset = "5px"; // Espaciado del subrayado
                }
            });
        }
    });
</script>



        <style>
            /* Estilo para el botón flotante */
            #chatbot-container {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: flex;
                align-items: center;
                gap: 10px;
                cursor: pointer;
            }

            #chatbot-button {
                background-color: #007bff;
                border: none;
                border-radius: 50%;
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            #chatbot-button img {
                width: 30px;
                height: 30px;
            }

            #chatbot-label {
                color: #007bff;
                font-weight: bold;
            }

            /* Estilo para la ventana de chat */
            #chatbot-window {
                position: fixed;
                bottom: 90px;
                right: 20px;
                width: 300px;
                height: 400px;
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                display: none;
                flex-direction: column;
                overflow: hidden;
            }

            #chatbot-header {
                background-color: #007bff;
                color: #fff;
                padding: 10px;
                text-align: center;
                font-weight: bold;
            }

            #chat-box {
                flex: 1;
                padding: 10px;
                overflow-y: scroll;
                border-top: 1px solid #ddd;
            }

            #chat-input {
                display: flex;
                border-top: 1px solid #ddd;
            }

            #user-input {
                flex: 1;
                border: none;
                padding: 10px;
            }

            #send-button {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
            }
        </style>

        {{-- <a href="https://chatgpt.com/g/g-677d6c87f59481919ce07cf6c74af1d8-asistente-aybar-corp" target="_blank">
<div id="chatbot-container" >

        <div id="chatbot-label"style="background-color:#007bff;padding:10px;color:white;border-radius:30px">Soy tu asistente virtual

        </div>

        <div id="chatbot-button">
            <img src="https://cdn-icons-png.flaticon.com/512/4712/4712101.png" alt="Chatbot">
        </div>


</div>
</a> --}}

        <!-- Contenedor del botón flotante -->
        {{-- <div id="chatbot-container" onclick="toggleChat()">
            <a href="https://chatgpt.com/g/g-677d6c87f59481919ce07cf6c74af1d8-asistente-aybar-corp" target="_blank">
                <div id="chatbot-label"style="background-color:#007bff;padding:10px;color:white;border-radius:30px">Soy
                    tu asistente virtual</div>
            </a>
            <div id="chatbot-button">
                <img src="https://cdn-icons-png.flaticon.com/512/4712/4712101.png" alt="Chatbot">
            </div>
        </div> --}}

        <!-- Ventana de Chat -->
        {{-- <div id="chatbot-window">
            <div id="chatbot-header">Chatbot Aybar</div>
            <div id="chat-box"></div>
            <div id="chat-input">
                <input type="text" id="user-input" placeholder="Escribe tu mensaje..." class="form-control"
                    onkeydown="handleKeyPress(event)">
                <button id="send-button" onclick="sendMessage()">Enviar</button>
            </div>
        </div> --}}


        <script>
            let chatInitialized = false;

            // Función para alternar la visibilidad de la ventana de chat
            function toggleChat() {
                const chatWindow = document.getElementById('chatbot-window');
                chatWindow.style.display = chatWindow.style.display === 'none' || chatWindow.style.display === '' ? 'flex' :
                    'none';

                // Enviar saludo al abrir el chat por primera vez
                if (!chatInitialized) {
                    const chatBox = document.getElementById('chat-box');
                    chatBox.innerHTML +=
                        `<div><strong>Aybar:</strong> ¡Hola! Soy tu asistente virtual. ¿En qué puedo ayudarte hoy?</div>`;
                    chatInitialized = true;
                }
            }

            // Función para enviar mensajes al chatbot
            async function sendMessage() {
                const input = document.getElementById('user-input').value;
                const chatBox = document.getElementById('chat-box');

                if (input.trim() === '') return; // Evitar mensajes vacíos

                // Mostrar el mensaje del usuario en el chat
                chatBox.innerHTML += `<div><strong>Tú:</strong> ${input}</div>`;
                document.getElementById('user-input').value = ''; // Limpiar el campo de entrada

                try {
                    const response = await axios.post('/chatPost', {
                        message: input
                    });
                    const reply = response.data.reply;

                    // Mostrar la respuesta del chatbot en el chat
                    chatBox.innerHTML += `<div><strong>Aybar:</strong> ${reply}</div>`;
                } catch (error) {
                    chatBox.innerHTML += `<div><strong>Aybar:</strong> Error al procesar la solicitud.</div>`;
                }

                // Desplazar el scroll hacia abajo automáticamente
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            // Función para manejar el evento de presionar Enter
            function handleKeyPress(event) {
                if (event.key === 'Enter') {
                    sendMessage();
                }
            }
        </script>








    </div>



    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/landingpage/landingpage.js') }}"></script>

    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="../../assets/js/plugins/animation-init.js"></script> --}}
    <script src="../../assets/libs/aos/dist/aos.js"></script>
    <script src="../../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script>
        const input = document.querySelector("#phone");

        // Inicialización de intl-tel-input con Perú como valor predeterminado
        const init = window.intlTelInput(input, {
            initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
            separateDialCode: true, // Muestra el código de país separado
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
        });
    </script>
    <script>
        const input_2 = document.querySelector("#phone_2");

        // Inicialización de intl-tel-input con Perú como valor predeterminado
        const init_2 = window.intlTelInput(input_2, {
            initialCountry: "pe", // Código de país ISO 3166-1 Alpha-2 para Perú
            separateDialCode: true, // Muestra el código de país separado
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js" // Para validaciones
        });


//         window.addEventListener("load", function() {
//     const header = document.getElementById("mainHeader");

//     if (window.innerWidth >= 992) { // LG en Bootstrap (>=992px)
//       header.classList.add("fixed-header");
//     }
//   });

//reinicia animacion AOS
$(document).ready(function () {
    // Función para reiniciar AOS en TODOS los elementos con atributos data-aos
    function restartAOS() {
        $("[data-aos!='flip-left']").removeClass("aos-animate"); // Quitar animación

        setTimeout(() => {
            $("[data-aos]").addClass("aos-animate"); // Volver a agregar animación
            AOS.refreshHard(); // Refrescar AOS para que vuelva a aplicar los efectos
        }, 1000);
    }

    // Ejecutar cada 3 segundos
    setInterval(restartAOS, 30000);
});





    </script>
      <style>
        .subrayado {
            width: 60px;
            /* Tamaño del subrayado */
            height: 5px;
            /* Grosor */
            background-color: #F4A623;
            /* Naranja */
            margin-top: -10px;
            /* Ajuste para acercarlo al texto */
        }
    </style>
</body>

</html>
