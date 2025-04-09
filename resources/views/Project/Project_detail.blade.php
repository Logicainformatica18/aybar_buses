@extends('production.1')
@section('content')
    <div class="">
        <div class="container-fluid p-0">
            <center>

                <!-- Fondo con video o imagen -->
                <lite-youtube videoid="{{ $Project->video_1 }}" posterquality style="width: 100%;height:400px"autopause
                    class=" " title="Play: Video"></lite-youtube>
            </center>

        </div>
    </div>

    <div class="py-0 container-fluid text-center " style="background-color: white;margin-top:-5%">
        <div class="row content-align-center d-flex justify-content-center">


            <div class="col-sm-12 col-xl-3 pt-5 pb-4"style="background-color:#FFA726;position:relative;border-radius:20px">
                <h3 class="fs-5 mt-4 ">SEPARA TU LOTE DESDE</h3>
                <h2 class="f-bold display-3 mb-4">S/ 15,000</h2>
            </div>
            <div class="d-none d-xl-block  col-xl-1 pt-5 pb-4"style="margin-top:-3%;position:relative;width:10px ">
                <!-- Línea divisora -->

            </div>
            <div class="d-none d-xl-block  col-xl-4 pt-5 pb-4"
                style="background-color: #fcfcfc;position:relative;border-radius:20px">
                <h2 class="fs-5 mt-4">SEPARA TU LOTE DESDE</h2>
                <h2 class="fw-bold display-3 mb-4">PRE VENTA</h2>
            </div>

        </div>







    </div>
    <!-- Botón 1 -->




    <!-- Navegación inferior -->



    <!-- CSS adicional para el diseño -->
    <style>
        .nav-link {
            font-size: 1rem;
            letter-spacing: 0.05rem;
        }
    </style>

    <p></p>

    <div class="py-1 my-5">
        <h4 class="d-sm-none text-center display-6" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:2px">
            <span style="color:#03424E">UBICACIÓN DE </span><br> {{ Str::upper($Project->title) }}
        </h4>
        <h4 class="d-none d-sm-block text-center display-6 mt-3"
            style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:15px">
            <span style="color:#03424E">UBICACIÓN DE </span><br> {{ Str::upper($Project->title) }}
        </h4>
        <div class="subrayado mx-auto " style="margin-top:-13px"></div>

        <p class="fs-5 mb-5 mt-5 px-5" style="color:#03424E;text-align:center">
            Contamos con la mejor zona para comprar tu lote, estamos ubicados en
        </p>
    </div>



    <div class="container py-1">
        <div class="row text-center">
            <!-- Elemento 1 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto"
                    style="background-color:#FFA726;width: 86px; height: 86px; display: flex; align-items: center; justify-content: center;">
                    <img src="../../resource/1739199900_67aa159c9a35areloj.svg" alt="Placeholder"style="margin:-15px"
                        class="">
                </div>
                <p class="mt-3 fw-bold fs-5 "style="color:#03424E">{{ $Project->location }}</p>
            </div>
            <!-- Elemento 2 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto"
                    style="width: 90px; height: 90px; display: flex; align-items: center; justify-content: center;">
                    <img src="../../resource/1739199924_67aa15b4ae38bterreno.svg" alt="Placeholder"width=""
                        class=""style="margin:-15px">
                </div>
                <p class="mt-3 fw-bold fs-5 "style="color:#03424E">{{ $Project->land }}</p>
            </div>
            <!-- Elemento 3 -->
            <div class="col-md-4 mb-4">
                <div class="rounded-circle  mx-auto"
                    style="width: 90px; height: 90px; display: flex; align-items: center; justify-content: center;">
                    <img src="../../resource/1739199910_67aa15a6cc8f3terreno%20en%20lote.svg" alt="Placeholder"width=""
                        class=""style="margin:-15px">
                </div>
                <p class="mt-3 fw-bold fs-5 "style="color:#03424E">{{ $Project->land_count }}</p>
            </div>
        </div>
    </div>

    <img src="../resource/{{ $Project->map_1 }}"width="100%" alt="" srcset="">



    <p></p>


    <h4 class="mt-2 d-sm-none text-center display-6" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:2px">
        <span style="color:#03424E">OFRECEMOS </span> 
    </h4>
    <h4 class="mt-5 d-none d-sm-block text-center display-6 mt-3"
        style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:15px">
        <span style="color:#03424E">OFRECEMOS </span> 
    </h4>
    <div class="subrayado mx-auto " style="margin-top:-13px"></div>

    <!-- Contenedor del video con contenido centrado -->
    <div class=" d-flex justify-content-center align-items-center text-center"
        style="position: relative; height: 40vh; overflow: hidden;">

        <!-- Video de fondo -->


        <!-- Contenido sobre el video -->
        <div style="position: relative; z-index: 1; color: white;">



            <!-- Carrusel para tamaño md -->
            <div id="carouselExampleControls" class="carousel slide d-md-block d-lg-none"
                data-bs-ride="carousel"data-bs-interval="2500">
                <div class="carousel-inner">
                    <!-- Tarjeta 1 -->
                    <div class="carousel-item active">

                        <div class="card mx-auto text-center"style="width: 18rem;">

                            <div class="card-body">
                                <img src="../resource/1739200178_67aa16b20b63coportunidad%20de%20inversion.svg"width="100%"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-4 fw-bold" style="color:#056679">Oportunidad<br>de inversión
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="carousel-item">
                        <div class="card mx-auto text-center" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../../resource/1739200186_67aa16ba641eaportico.svg"width="100%"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">

                                <p class=" fs-4 fw-bold" style="color:#056679">Pórtico de <br> ingreso</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="carousel-item">
                        <div class="card mx-auto text-center" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../../resource/1739200195_67aa16c37f409juegos%20para%20ni%C3%B1os.svg"width="100%"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-4 fw-bold" style="color:#056679">Juegos<br> para niños</p>

                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 4 -->
                    <div class="carousel-item">
                        <div class="card mx-auto text-center" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../../resource/1739200206_67aa16ce0e38dvigilacia%2024%20horas.svg"width="100%"
                                    style="padding-left:40px;padding-right:40px" alt="" srcset="">
                                <p class=" fs-4 fw-bold" style="color:#056679">Vigilancia <br>24 horas</p>

                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

            <!-- Tarjetas para tamaños lg y xl -->
            <div class="container d-none d-lg-block mt-4">
                <div class="row text-center d-flex justify-content-center">
                    <div class="col-lg-3 col-xl-2 mb-0">
                        <div class=" card border-0 ">
                            <div class="card-body justify-content-center">
                                <img src="../../resource/1739200178_67aa16b20b63coportunidad%20de%20inversion.svg"width="100%"
                                    style="" alt="" srcset="">
                                <p class=" fs-4 fw-bold" style="color:#056679">Oportunidad<br>de inversión</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-2 mb-0">
                        <div class=" card border-0 ">
                            <div class="card-body">
                                <img src="../resource/1739200186_67aa16ba641eaportico.svg"width="100%" style=""
                                    alt="" srcset="">

                                <p class=" fs-4 fw-bold" style="color:#056679">Pórtico de <br> ingreso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-2 mb-0">
                        <div class=" card border-0 ">
                            <div class="card-body">
                                <img src="../../resource/1739200195_67aa16c37f409juegos%20para%20ni%C3%B1os.svg"width="100%"
                                    style="" alt="" srcset="">
                                <p class=" fs-4 fw-bold" style="color:#056679">Juegos<br> para niños</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-2 mb-0">
                        <div class=" card border-0 ">
                            <div class="card-body">
                                <img src="../../resource/1739200206_67aa16ce0e38dvigilacia%2024%20horas.svg"width="100%"
                                    style="" alt="" srcset="">
                                <p class=" fs-4 fw-bold" style="color:#056679">Vigilancia <br>24 horas</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


   
    <div class="my-0 " data-aos="flip-left" data-aos-duration="1300" data-aos-delay="500">
        <div class="sliding-wrapper position-relative overflow-hidden">
            <div class="slide-background d-flex w-100">

                @for ($i = 0; $i <= 20; $i++)
                    <div class="slide" style="margin-right:1px;height:400px">


                        @php
                            $photo = 'photo_' . $i;
                        @endphp
                        @if ($Project->$photo)
                            <img src="../resource/{{ $Project->$photo }}" class="hidden"style="border-radius:0px"height="100%"
                                alt="Imagen 1">
                        @endif
                    </div>
                @endfor



            </div>
        </div>
    </div>

   




    <div class="pt-5 pb-2 d-flex justify-content-center align-items-center text-center"
        style="position: relative;  overflow: hidden;">

        <!-- Video de fondo -->
    

        <!-- Contenido sobre el video -->
        <div style=" color: white;">

            <div id="bootstrapCarousel" class="py-3 carousel slide" data-bs-ride="carousel" data-bs-interval="30000">
                <!-- Indicadores -->
                <div class="carousel-indicators mb-3">
                    @php $totalSlides = 0; @endphp
                    @for ($i = 1; $i <= 10; $i += 2)
                        @php
                            $video_1 = 'video_' . $i;
                            $video_2 = 'video_' . ($i + 1);
                        @endphp
                        @if (!empty($Project->$video_1) || !empty($Project->$video_2))
                            <button type="button" 
                                data-bs-target="#bootstrapCarousel"
                                data-bs-slide-to="{{ $totalSlides }}" 
                                class="{{ $totalSlides === 0 ? 'active' : '' }}" 
                                aria-current="{{ $totalSlides === 0 ? 'true' : '' }}" 
                                aria-label="Diapositiva {{ $totalSlides + 1 }}" 
                                style="background-color: transparent; 
                                    border: solid 3px orange; 
                                    width: 15px; 
                                    height: 15px; 
                                    border-top: none; 
                                    border-right: none;
                                    transform: rotate(135deg); 
                                    margin-right: 20px;">
                            </button>
                            @php $totalSlides++; @endphp
                        @endif
                    @endfor
                </div>
                

                <!-- Contenido del Carrusel -->
                <div class="carousel-inner">
                    @php $activeSet = false; @endphp
                    @for ($i = 1; $i <= 10; $i += 2)
                        @php
                            $video_1 = 'video_' . $i;
                            $video_2 = 'video_' . ($i + 1);
                        @endphp
                        @if (!empty($Project->$video_1) || !empty($Project->$video_2))
                            <div class="carousel-item {{ !$activeSet ? 'active' : '' }}">
                                <div class="row  text-center align-content-center">
                                    <!-- Primer Video del Grupo -->
                                    @if (!empty($Project->$video_1))
                                        <div class="col-md-6 mb-4 mb-lg-0" >
                                            <lite-youtube videoid="{{ $Project->$video_1 }}" autoload
                                                style="width: 90%; height: 300px; border-radius: 10px"></lite-youtube>
                                        </div>
                                    @endif

                                    <!-- Segundo Video del Grupo -->
                                    @if (!empty($Project->$video_2))
                                        <div class="col-md-6">
                                            <lite-youtube videoid="{{ $Project->$video_2 }}" autoload
                                                style="width: 90%; height: 300px; border-radius: 10px"></lite-youtube>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @php $activeSet = true; @endphp
                        @endif
                    @endfor
                </div>
                <p>
                    &nbsp;
                </p>
                <p>
                    &nbsp;
                </p>
                <!-- Controles de Navegación -->
                <button class="carousel-control-prev" type="button" data-bs-target="#bootstrapCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bootstrapCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



        </div>
    </div>






    <style>
        .tourist-card {
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tourist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .tourist-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .tourist-card .card-body {
            background: rgba(0, 66, 78, 0.8);
            color: white;
            text-align: center;
            padding: 20px;
        }

        .tourist-card .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 0;
        }

        .tourist-card .card-subtitle {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 5px;
        }
    </style>



    <div class="container py-1">
        <h4 class="d-sm-none text-center display-6" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:2px">
            <span style="color:#03424E">CONOCE </span><br> {{ Str::Upper($Project->title) }}
        </h4>
        <h4 class="d-none d-sm-block text-center display-6 mt-3"
            style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:15px">
            <span style="color:#03424E">CONOCE </span><br> {{ Str::upper($Project->title) }}
        </h4>
        <div class="subrayado mx-auto " style="margin-top:-13px"></div>
       
        <div class="mt-4 row g-4 text-center align-content-center justify-content-center">
            <!-- Card 1 -->
            @for ($i = 1; $i <= 10; $i++)
                @php
                    $tourist_image = 'tourist_image_' . $i;
                    $tourist = 'tourist_' . $i;
                @endphp
                @if ($Project->$tourist_image != '')
                    <div class="col-md-6 col-lg-3">
                        <div class="tourist-card">
                            <img src="../resource/{{ $Project->$tourist_image }}" alt="Lugar Turístico 1">
                            <div class="card-body">
                                <p class="card-title text-start fs-4">{{ $Project->$tourist }}</p>
                                <p class="card-subtitle text-start">{{ Str::Upper($Project->title) }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor


        </div>
    </div>






    <style>
        .flip-container {
            width: 350px;
            height: 400px;
            perspective: 1000px;
            position: relative;
            margin: auto;

        }

        .flip-header {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #064420;
            color: white;
            padding: 10px 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            z-index: 2;
        }

        .flip-footer {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);

            color: white;
            padding: 10px 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
            width: 80%;
        }

        .flip-footer button {


            border: none;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;

        }

        .flip-footer button:hover {}

        .flip-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.8s;
        }

        .flip-container:hover .flip-inner {
            transform: rotateY(180deg);
        }

        .flip-front,
        .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 50px;
            border: solid 4px #03424E;
            overflow: hidden;
            top: 0;
            left: 0;

        }

        .flip-front {

            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
        }

        .flip-front::after {
            content: "";
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 20px;
            font-weight: bold;
            z-index: 2;
        }

        .flip-back {
            background-color: #03424E;
            transform: rotateY(180deg);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .flip-back button {
            background-color: #03424E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .flip-back button:hover {}

        @media (max-width: 768px) {
            .flip-container {
                width: 90%;
                height: 400px;
            }
        }
    </style>
    <h4 class="mt-5 d-sm-none text-center display-6" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:2px">
        <span style="color:#03424E">CONOCE </span><br> NUESTROS
        PROYECTOS
    </h4>
    <h4 class="mt-5 d-none d-sm-block text-center display-6 mt-3"
        style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:15px">
        <span style="color:#03424E">CONOCE </span><br> NUESTROS
        PROYECTOS
    </h4>
    <div class="subrayado mx-auto " style="margin-top:-13px"></div>

    <div class="mt-4"style="width:100%">
        <div class="row text-center justify-content-center d-flex align-content-center" style="width:100%">
            @for ($i = 1; $i <= 20; $i++)
                @php
                    $subproject = 'subproject_' . $i;
                    $subproject_image = 'subproject_image_' . $i;
                @endphp
                @if ($Project->$subproject_image)
                    <div class="  col-xl-3 col-lg-4 col-md-5 col-sm-8 col-11  py-4 "style="" >
                        <div class="flip-container">
                            {{-- <div class="flip-header">Proyecto Concluido</div> --}}
                            <div class="flip-inner">
                                <div
                                    class="flip-front"style="background: linear-gradient(to top, #03424E 10%, transparent 50%), url('../resource/{{ $Project->$subproject_image }}') no-repeat center/cover;">
                                </div>
                                <div class="flip-back">

                                    <button>
                                        <h4>PÓRTICO DE INGRESO</h4>
                                        <h4>SEGURIDAD 24/7</h4>
                                        <h4>PARQUES</h4>
                                        <h4>CERCO VIVO</h4>
                                        <a class="btn btn-hover-shadow" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            style="color:white; border-radius:100px; background-color:#FFA726; width: 190px;">
                                            <b>VER MÁS »</b>
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div class="flip-footer">
                                <span>{{ $Project->$subproject }}</span>

                                <img src="../resource/1736870177_Flecha%20naranja.png"width="50px" alt=""
                                    srcset="">
                            </div>
                        </div>
                    </div>
                @endif
            @endfor

        </div>
    </div>



    <script>
        // Ejecutar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', ProjectList);
    </script>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color:#054E5C">
                <div class="modal-header">
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="p-3 rounded"
                        style="background-color: #055261; color: white; box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);">
                        <p class="text-center text-light mb-4"><b> <span style="font-size: 12px;">QUIERO
                                    INFORMACIÓN DE UN LOTE</span></b></p>


                        <select class="form-control" name="project_id" id="project_id"
                            style="color: white; background-color: #055261">
                            <option value="">Seleccione un proyecto</option>
                        </select>
                        <br>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="names" placeholder="Nombres y Apellidos:"
                                style="color: white;">
                        </div>
                        <div class="form-floating mb-3">


                            <input type="text" id="phone" class="form-control iti__tel-input" name="cellphone"
                                placeholder="Número de Teléfono" style="color: white; width: 100%; padding-left: 74px;"
                                autocomplete="off" data-intl-tel-input-id="0">
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="dni" name="dni"
                                placeholder="Número de DNI" style="color: white;">

                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="message" name="message"
                                placeholder="Mensaje" style="color: white; height: 70px;" maxlength="200"
                                oninput="updateCounter()">
                            <div class="form-text text-white">
                                <p><span id="charCount"><span style="font-size: 8px;">0</span></span><span
                                        style="font-size: 8px;">/200 caracteres</span></p>
                            </div>
                        </div>



                        <div class="form-check text-start">
                            <input class="form-check-input" type="checkbox" id="txtTratamientoDatos"
                                name="data_aprobed_1" value="true">
                            <label class="form-check-label fs-3" for="txtTratamientoDatos">
                                <span class="fs-2">He leído y acepto la </span>
                                <a class="text-warning fs-2" data-bs-toggle="modal"
                                    data-bs-target="#bs-example-modal-xlg2" style="cursor: pointer;">
                                    Política para envío de comunicaciones comerciales.
                                </a>
                            </label>
                        </div>

                        <div class="form-check text-start ">
                            <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2"
                                name="data_aprobed_2" value="true">
                            <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                                <span class="fs-2">He leído y acepto el </span>
                                <a class="text-warning fs-2" data-bs-toggle="modal"
                                    data-bs-target="#bs-example-modal-xlg" style="cursor: pointer;">
                                    Tratamiento de mis datos personales.
                                </a>
                            </label>
                        </div>




                        <div class="text-center"><span style="font-size: 9px;">

                            </span><button type="button" class="btn btn-warning btn-block"
                                onclick="CustomerStorePublic();"
                                style="color: white; border-radius: 100px; background-color: #F6A42C; width: 180px;"><span
                                    style="font-size: 9px;">
                                    <span style="font-family: Montserrat-Bold; font-size: 12px;">Enviar mis
                                        datos</span>
                                </span></button><span style="font-size: 9px;">
                            </span></div><span style="font-size: 9px;">
                        </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-white text-dark" style="background-color:black"
                        data-bs-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bs-example-modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-warning text-center" style="font-size: 1.65rem">TRATAMIENTOS DE DATOS PERSONALES</h5>
                    <p></p>
                    <p style="text-align: justify; font-size: 15px;">
                        Declaro haber sido informado, conforme a Ley N° 29733 - Ley de Protección de Datos Personales
                        (“la Ley”) y al Decreto Supremo 003-2013/JUS - Reglamento de la Ley (“el Reglamento)”, doy mi
                        consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C.
                        </strong> realice el tratamiento de mis datos personales que le proporcione
                        de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que
                        mantengo
                        y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.
                        <br><br>
                        Declaro mi derecho de revocar este consentimiento en cualquier momento.
                        Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure mi
                        relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y hasta
                        por 10
                        años de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
                        domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago de
                        Surco, Provincia y Departamento de Lima.
                        <br><br>
                        <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o
                        internacional.
                        sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
                        descritas en la Ley y el Reglamento.
                        <br><br>
                        De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
                        por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
                        su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las autoridades
                        que fiscalizan la labor de <strong>AYBAR S.A.C.</strong><br><br>
                        Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento,
                        así como, solicitar su actualización, inclusión, rectificación, cancelación y supresión, pudiendo
                        oponerme a su uso o divulgación, pudiendo dirigir mi solicitud de ejercicio de los derechos a través
                        de la dirección especificada en la página web de <strong>AYBAR S.A.C.</strong>, teniendo a salvo
                        además el
                        ejercicio de la tutela de sus derechos ante la Autoridad Nacional de Protección de Datos Personales
                        en vía de reclamación o ante el Poder Judicial mediante la acción de hábeas data.
                        <br><br> Los datos personales
                        recolectados por <strong>AYBAR S.A.C.</strong> son obligatorios, la negativa a suministrarlos
                        supondrá la imposibilidad de concretar el fin previsto.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg2" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-warning text-center" style="font-size: 1.65rem">CLÁUSULA PARA ENVÍO DE PROMOCIONES
                        COMERCIALES</h5>
                    <p></p>
                    <p style="text-align: justify; font-size: 15px;">
                        Autorizo a <strong>AYBAR S.A.C.</strong> a utilizar mis Datos Personales y que los mismos sean
                        tratados
                        por sus empresas subsidiarias; para que me sean ofrecidos beneficios, productos y servicios,
                        publicidad, obsequios, ofertas y/o promociones (personalizadas o generales) de los servicios
                        que brinda <strong>AYBAR S.A.C.</strong> y de las empresas subsidiarias, a través de cualquier medio
                        de comunicación. Declaro conocer mi derecho a revocar este consentimiento en cualquier momento.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <style>
        /* Personalización de las tarjetas */
        .custom-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Sombra inicial */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            /* Elevar la tarjeta en hover */
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            /* Incrementar sombra */
        }

        .custom-btn {
            background-color: #FFA500;
            /* Botón naranja */
            border: none;
            border-radius: 25px;
            color: white;
            padding: 8px 20px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .custom-btn:hover {
            background-color: #FF8C00;
            /* Naranja más oscuro en hover */
        }
    </style>
@endsection
