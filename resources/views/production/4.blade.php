@extends('production.1')
@section('content')
    <style>
        .shadowed-text {
            text-shadow: 1px 1px 1px #000000;
            /* Contorno sombreado */
        }

        .transparencia_cabecera_md {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 10%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }

        .transparencia_cabecera_xl {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 70%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }
    </style>

    <style>
        .card-hover {
            position: relative;
            width: 300px;
            height: 350px;
            overflow: hidden;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        }

        .card-hover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .card-hover:hover img {
            opacity: 0;
        }

        .card-hover .hover-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-hover:hover .hover-content {
            opacity: 1;
        }

        .card-hover .button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: rgb(255, 255, 255);
            border: solid 3px #ffcc00;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .card-hover .button:hover {
            background-color: #ffffff;
        }

        .card-hover .button:hover .arrow {
            transform: rotate(45deg);
        }

        .arrow {
            display: block;

            width: 16px;
            height: 16px;
            border-right: 3px solid #ffcc00;
            border-top: 3px solid #ffcc00;
            transform: rotate(+0deg);
            transition: transform 0.3s ease;
        }
    </style>
    <style>
        .modal-backdrop {
            background-color: transparent !important;
            /* Fondo del overlay completamente transparente */
        }
    </style>
    <style>
        .bg-responsive {
            background-image: url('../../resource/1738597307_67a0e3bb9d21fportada-proyectos-escritorio.jpg');
            height:82vh;
            background-size: cover;
            /* height: 85vh; */
        }
    
        /* Para pantallas medianas (tablets) */
        @media (max-width: 987px) {
            .bg-responsive {
                height:82vh;
                background-size: cover;
                background-image: url('../../resource/1738597193_67a0e3490aa87portada-proyectos-tablet.jpg');
            }
        }
    
        /* Para pantallas pequeñas (móviles) */
        @media (max-width: 575px) {
            .bg-responsive {
                height:52vh;
                width: 100%;
                background-size: cover;
                background-image: url('../../resource/1738598057_67a0e6a98b327portada-proyectos-celular.jpg');
            }
        }
    </style>
    <!-- INICIO SECCION -->
<section class="text-white" style="background-color:#03424E;">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
        <div class="carousel-inner">
            <!-- Diapositiva 1 -->
            <div class="carousel-item active py-1 position-relative bg-responsive" style="    background-position: center;
    background-repeat: no-repeat;">
                <div class="d-none d-sm-block text-center text-white position-absolute start-50 translate-middle" style="top:57%;width:600px">
                    <h4 class="p-2  text-center fs-7" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
                        <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                    </h4>
                    <div class="subrayado mx-auto "></div>
                  
                 </div>
                
                 <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="top:32%;width:290px">
                <img src="../../resource/1738076896_logo%20aybar%20blanco.svg" width="75px" alt="" srcset="">
                 </div>
                 
                 <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="bottom:5%;width:300px">
                    <h4 class="p-2  text-center fs-3" style="font-family:Montserrat-SemiBold;letter-spacing:5px">
                        <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                    </h4>
                    
                    <div class="subrayado mx-auto " style="width:30px;height:2px"></div>
                  
                 </div>
            </div>

            <!-- Diapositiva 2 -->
            <div class=" carousel-item ">
               
                  <div class="video-background " style="position: relative; overflow: hidden; height: 82vh;">
                    <video autoplay="" loop="" muted="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                      <source src="../../resource/1738600049_67a0ee71dc79f2sXRVvaPa0EZB5DNDGCHLZNucZX.mp4" type="video/mp4">
                      Tu navegador no soporta el video.
                    </video>
                  

               

                    <div class="content d-none d-sm-block text-center text-white start-50 translate-middle" style="position: relative;  color: white; text-align: center;top:50%;width:600px">
       
                            <h4 class="p-2  text-center fs-7" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
                                <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                            </h4>
                            <div class="subrayado mx-auto "></div>
                          
                         
                  </div>
                  <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="bottom:10%;width:300px">
                    <h4 class="p-2  text-center fs-3" style="font-family:Montserrat-SemiBold;letter-spacing:5px">
                        <span style="color:#ffffff">CUMPLIENDO EL</span><br> LOTE DE TUS SUEÑOS
                    </h4>
                    
                    <div class="subrayado mx-auto " style="width:30px;height:2px"></div>
                  
                 </div>
               
               
               
            </div>
        </div>

        <!-- Indicadores -->
     

        <!-- Controles de navegación -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <div style="color:orange;font-size:50px">
                <
            </div>
     
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <div style="color:orange;font-size:50px">
                >
            </div>
        </button>
    </div>
</div></section>
<div class="container py-5">
        <h4 class="d-sm-none text-center display-10" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:2px">
            <span style="color:#03424E">UBICA TU</span><br> PRÓXIMO HOGAR
        </h4>
        <h4 class="d-none d-sm-block text-center display-6" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:15px">
            <span style="color:#03424E">UBICA TU</span><br> PRÓXIMO HOGAR
        </h4>
        <div class="subrayado mx-auto mb-4"></div>


        <p class="fs-5 mb-5" style="color:#047991;text-align:center">
            Encuentra el lugar ideal para comenzar una nueva etapa. Descubre proyectos estratégicamente ubicados, rodeados
            de oportunidades, naturaleza y todo lo que necesitas para construir tu futuro.
        </p>
        <div class="row">
            <!-- Tarjeta Lima -->
            <div class="col-xl-2 col-0"></div>
            <div class="col-lg-6 col-xl-4 col-md-6">

                <div class="card" style="cursor:pointer;background: url('../resource/1735593981_Lima.png') center/cover no-repeat; 
                       position: relative;
                       border-radius: 15px; 
                       box-shadow: rgb(0, 0, 0) 0px 4px 10px; 
                       transition: transform 0.3s ease-in-out; 
                       transform: translateY(0px); 
                       color: white; 
                       text-align: center; 
                       padding: 20px; 
                       height: 350px; 
                       display: flex; 
                       flex-direction: column; 
                       align-items: center; 
                       justify-content: center;
                       overflow: hidden;" data-bs-toggle="modal" data-bs-target="#modalLima" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
           
               <!-- Contenido normal (visible al inicio) -->
               <div class="default-content" style="position: absolute; bottom:0px; left:0%;background-color:#03424E;width:90%;
                           border-top-right-radius:15px;
                           transition: opacity 0.3s ease-in-out;">
                   <h4 style="color: #f8b400;  text-align: justify;padding:15px;padding-top:25px;margin-left:10px">
                       LIMA <br> METROPOLITANA
                   </h4>
               </div>
           
               <!-- Contenido en hover (aparece al pasar el mouse) -->
               <div class="hover-content" style="position: absolute;
                           top: 0;
                           left: 0;
                           width: 100%;
                           height: 100%;
                           background: rgba(3, 66, 78, 0.9); /* Color encima de la imagen */
                           border-radius: 15px;
                           padding: 20px;
                           opacity: 0;
                           transition: opacity 0.3s ease-in-out;">

                   <h4 class="mt-5" style="color: #f8b400; margin-bottom: 10px;text-align:justify">LIMA <br> METROPOLITANA</h4>
                   <p class="fs-2" style="text-align: justify; font-family: Montserrat-Regular;">
                       <b>Más de 18 proyectos en la capital del Perú</b><br>
                       Desde la cercanía a centros urbanos hasta vistas panorámicas al mar, nuestros proyectos en Lima
                       te ofrecen opciones estratégicas para vivir o invertir. <br>&nbsp; <br>
                       Están diseñados para conectar con la modernidad y
                       tradición de la ciudad, además de garantizar un alto nivel de plusvalía.
                   </p>
               </div>
           
               <!-- Flecha con botón circular -->
               <div class="d-flex align-items-center justify-content-center position-absolute" style="cursor:pointer;background: white; 
                           border-radius: 20%; 
                           width: 60px; 
                           height: 60px; 
                           bottom: 5%; 
                           right: 3%; 
                           box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
                           position: absolute; 
                           z-index: 2;">
                   <img src="../../resource/1738274447_679bf68f71208flecha-amarilla.svg" alt="" width="50%">
               </div>
           </div>
           

           
   


                <!-- Modal -->
                <div class="modal fade" id="modalLima" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/terra_galicia">

                                                <img src="../resource/1736195210_Mesa%20de%20trabajo%202%20copia%2031.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/rivera">
                                                <img src="../resource/1736196462_rivera%20del%20camp.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tarjeta Ica -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card shadow " style="cursor:pointer;background: url('../resource/1735593994_Ica.png') center/cover no-repeat; 
                       position: relative; 
                       border-radius: 15px; 
                       box-shadow: rgb(0, 0, 0) 0px 4px 10px; 
                       transition: transform 0.3s ease-in-out; 
                       transform: translateY(0px); 
                       color: white; 
                       text-align: center; 
                       padding: 20px; 
                       height: 350px; 
                       display: flex; 
                       flex-direction: column; 
                       align-items: center; 
                       justify-content: center;
                       overflow: hidden;" data-bs-toggle="modal" data-bs-target="#modalIca" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
           
               <!-- Contenido normal (visible al inicio) -->
               <div class="default-content d-flex justify-content-start text-start " style="position: absolute; bottom:0px; left:0%;background-color:#03424E;width:90%;
                           border-top-right-radius:15px;
                           transition: opacity 0.3s ease-in-out;height:100px">
                           
                    <h4 class="pt-4  fs-8 " style="color: #f8b400; text-align:justify; margin-left:25px;margin-top:12px">ICA</h4>
               </div>
           
               <!-- Contenido en hover (aparece al pasar el mouse) -->
               <div class="hover-content" style="position: absolute;
                           top: 0;
                           left: 0;
                           width: 100%;
                           height: 100%;
                           background: rgba(3, 66, 78, 0.9); /* Color encima de la imagen */
                           border-radius: 15px;
                           padding: 20px;
                           opacity: 0;
                           transition: opacity 0.3s ease-in-out;">
             
                    <h4 class="mt-5" style="color: #f8b400; margin-bottom: 10px;text-align:justify">Ica</h4>
                    <p class="fs-3" style="text-align: justify; font-family: Montserrat-Regular;">
                        <b>5 proyectos únicos en la tierra del sol y el vino</b><br>
                       Ica te invita a descubrir el lugar perfecto para vivir, cada proyecto está cerca de destinos turísticos,
                       asegurando una excelente inversión y calidad de vida.
                    </p>
                       
                
               </div>
           
               <!-- Flecha con botón circular -->
               <div class="d-flex align-items-center justify-content-center position-absolute" style="background: white; 
                           border-radius: 20%; 
                           width: 60px; 
                           height: 60px; 
                           bottom: 5%; 
                           right: 3%; 
                           box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
                           position: absolute; 
                           z-index: 2;">
                   <img src="../../resource/1738274447_679bf68f71208flecha-amarilla.svg" alt="" width="50%">
               </div>
           </div>
            

                <div class="modal fade" id="modalIca" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/jumeirah">

                                                <img src="../resource/1736197086_jumeirah.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/palmilla">
                                                <img src="../resource/1736198278_Mesa%20de%20trabajo%202%20copia%2032.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/villa">
                                                <img src="../resource/1736198419_villa-porton.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-0"></div>
            <div class="col-xl-2 col-0"></div>

            <!-- Tarjeta Huaral -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card shadow " style="cursor:pointer;background: url('../resource/1736172777_Huaral.png') center/cover no-repeat; 
            position: relative; 
            border-radius: 15px; 
            box-shadow: rgb(0, 0, 0) 0px 4px 10px; 
            transition: transform 0.3s ease-in-out; 
            transform: translateY(0px); 
            color: white; 
            text-align: center; 
            padding: 20px; 
            height: 350px; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center;
            overflow: hidden;" data-bs-toggle="modal" data-bs-target="#modalHuaral" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">

    <!-- Contenido normal (visible al inicio) -->
    <div class="default-content d-flex justify-content-start text-start " style="position: absolute; bottom:0px; left:0%;background-color:#03424E;width:90%;
                           border-top-right-radius:15px;
                           transition: opacity 0.3s ease-in-out;height:100px">
                           
                    <h4 class="pt-4  fs-8 " style="color: #f8b400; text-align:justify; margin-left:25px;margin-top:12px">HUARAL</h4>
               </div>

    <!-- Contenido en hover (aparece al pasar el mouse) -->
    <div class="hover-content" style="position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(3, 66, 78, 0.9); /* Color encima de la imagen */
                border-radius: 15px;
                padding: 20px;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;">

            <h4 class="mt-5" style="color: #f8b400; margin-bottom: 10px;text-align:justify">Huaral</h4>
            <p class="fs-3" style="text-align: justify; font-family: Montserrat-Regular;">
                <b>Tu próxima inversión en el corazón del desarrollo</b><br>
                Huaral ofrece una ubicación privilegiada, rodeada de naturaleza y conectividad.
                <br>&nbsp; <br>
                Descubre proyectos diseñados para garantizar tu bienestar y un crecimiento constante en valor.
            </p>
          
            
       
    </div>

    <!-- Flecha con botón circular -->
    <div class="d-flex align-items-center justify-content-center position-absolute" style="background: white; 
                border-radius: 20%; 
                width: 60px; 
                height: 60px; 
                bottom: 5%; 
                right: 3%; 
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
                position: absolute; 
                z-index: 2;">
        <img src="../../resource/1738274447_679bf68f71208flecha-amarilla.svg" alt="" width="50%">
    </div>
</div>




                <div class="modal fade" id="modalHuaral" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/nuevo_huaral">

                                                <img src="../resource/1736199258_Mesa%20de%20trabajo%202%20copia%2029.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="../proyectos/valle_huaral">
                                                <img src="../resource/1736199294_Mesa%20de%20trabajo%202%20copia%2030.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>

                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Huacho -->
            <div class="col-lg-6 col-xl-4 col-md-6">
                <div class="card shadow " style="cursor:pointer;background: url('../resource/1736172763_Huacho.png') center/cover no-repeat; 
                       position: relative; 
                       border-radius: 15px; 
                       box-shadow: rgb(0, 0, 0) 0px 4px 10px; 
                       transition: transform 0.3s ease-in-out; 
                       transform: translateY(0px); 
                       color: white; 
                       text-align: center; 
                       padding: 20px; 
                       height: 350px; 
                       display: flex; 
                       flex-direction: column; 
                       align-items: center; 
                       justify-content: center;
                       overflow: hidden;" data-bs-toggle="modal" data-bs-target="#modalHuacho" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
           
               <!-- Contenido normal (visible al inicio) -->
               <div class="default-content d-flex justify-content-start text-start " style="position: absolute; bottom:0px; left:0%;background-color:#03424E;width:90%;
                      border-top-right-radius:15px;
                      transition: opacity 0.3s ease-in-out;height:100px">
                      
               <h4 class="pt-4  fs-8 " style="color: #f8b400; text-align:justify; margin-left:25px;margin-top:12px">HUACHO</h4>
          </div>
           
               <!-- Contenido en hover (aparece al pasar el mouse) -->
               <div class="hover-content" style="position: absolute;
                           top: 0;
                           left: 0;
                           width: 100%;
                           height: 100%;
                           background: rgba(3, 66, 78, 0.9); /* Color encima de la imagen */
                           border-radius: 15px;
                           padding: 20px;
                           opacity: 0;
                           transition: opacity 0.3s ease-in-out;">
        
        <h4 class="mt-5" style="color: #f8b400; margin-bottom: 10px;text-align:justify">Huacho</h4>
        <p class="fs-3" style="text-align: justify; font-family: Montserrat-Regular;">
            <b>Proyectos estratégicos en la ciudad costera</b><br>
            Ubicados en una de las zonas con mayor proyección de desarrollo, nuestros proyectos en Huacho
            combinan tranquilidad, acceso a servicios y una excelente oportunidad de inversión.
        </p>
                      
                  
               </div>
           
               <!-- Flecha con botón circular -->
               <div class="d-flex align-items-center justify-content-center position-absolute" style="background: white; 
                           border-radius: 20%; 
                           width: 60px; 
                           height: 60px; 
                           bottom: 5%; 
                           right: 3%; 
                           box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
                           position: absolute; 
                           z-index: 2;">
                   <img src="../../resource/1738274447_679bf68f71208flecha-amarilla.svg" alt="" width="50%">
               </div>
           </div>
           


                <div class="modal fade" id="modalHuacho" tabindex="-1" aria-labelledby="modalLimaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">

                        <div class="modal-content" style="background: linear-gradient(to top, #e0e0e0 10%, #ffffff 90%);">
                            <div class="modal-header">

                                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-center">
                                    <h2 class="modal-title p-5" id="modalLimaLabel">Encuentra el proyecto ideal para ti
                                        con megaproyectos.</h2>

                                    <div class="row align-content-center text-center justify-content-center">
                                        <div class="col-lg-4">
                                            <a href="../proyectos/maria_drago">

                                                <img src="../resource/1736199453_mariadrago.png" width="90%" alt="" srcset="" style="border-radius: 20px">
                                                <button type="button" class="btn btn-warning btn-block" style="margin-top:-40%;color: white; border-radius: 100px; background-color: #F6A42C; width: 160px;"><span style="font-size: 9px;">
                                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Conocer
                                                            más</span>
                                                    </span></button>
                                            </a>
                                        </div>


                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- FIN SECCION -->
<script>
    document.querySelectorAll(".card").forEach(card => {
    const defaultContent = card.querySelector(".default-content");
    const hoverContent = card.querySelector(".hover-content");

    if (defaultContent && hoverContent) {
        card.addEventListener("mouseover", function () {
            defaultContent.style.opacity = "0";
            hoverContent.style.opacity = "1";
        });

        card.addEventListener("mouseout", function () {
            defaultContent.style.opacity = "1";
            hoverContent.style.opacity = "0";
        });
    }
});

</script>
    {{-- <div class="card">
        <div class="card-body">
            <h4 class="card-title">Animation</h4>
            <p class="card-subtitle">
                Select the animation style class and check the animation to
                the image, you can use any of this animation to anywhere, just
                place exact word. example
                <code>.animated .bounce</code>
            </p>
            <form class="mb-4 mt-5">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="input-group">
                            <select class="form-select js--animations">
                                <optgroup label="Attention Seekers">
                                    <option value="bounce">bounce</option>
                                    <option value="flash">flash</option>
                                    <option value="pulse">pulse</option>
                                    <option value="rubberBand">rubberBand</option>
                                    <option value="shake">shake</option>
                                    <option value="swing">swing</option>
                                    <option value="tada">tada</option>
                                    <option value="wobble">wobble</option>
                                    <option value="jello">jello</option>
                                </optgroup>
                                <optgroup label="Bouncing Entrances">
                                    <option value="bounceIn">bounceIn</option>
                                    <option value="bounceInDown">bounceInDown</option>
                                    <option value="bounceInLeft">bounceInLeft</option>
                                    <option value="bounceInRight">bounceInRight</option>
                                    <option value="bounceInUp">bounceInUp</option>
                                </optgroup>
                                <optgroup label="Bouncing Exits">
                                    <option value="bounceOut">bounceOut</option>
                                    <option value="bounceOutDown">bounceOutDown</option>
                                    <option value="bounceOutLeft">bounceOutLeft</option>
                                    <option value="bounceOutRight">
                                        bounceOutRight
                                    </option>
                                    <option value="bounceOutUp">bounceOutUp</option>
                                </optgroup>
                                <optgroup label="Fading Entrances">
                                    <option value="fadeIn">fadeIn</option>
                                    <option value="fadeInDown">fadeInDown</option>
                                    <option value="fadeInDownBig">fadeInDownBig</option>
                                    <option value="fadeInLeft">fadeInLeft</option>
                                    <option value="fadeInLeftBig">fadeInLeftBig</option>
                                    <option value="fadeInRight">fadeInRight</option>
                                    <option value="fadeInRightBig">
                                        fadeInRightBig
                                    </option>
                                    <option value="fadeInUp">fadeInUp</option>
                                    <option value="fadeInUpBig">fadeInUpBig</option>
                                </optgroup>
                                <optgroup label="Fading Exits">
                                    <option value="fadeOut">fadeOut</option>
                                    <option value="fadeOutDown">fadeOutDown</option>
                                    <option value="fadeOutDownBig">
                                        fadeOutDownBig
                                    </option>
                                    <option value="fadeOutLeft">fadeOutLeft</option>
                                    <option value="fadeOutLeftBig">
                                        fadeOutLeftBig
                                    </option>
                                    <option value="fadeOutRight">fadeOutRight</option>
                                    <option value="fadeOutRightBig">
                                        fadeOutRightBig
                                    </option>
                                    <option value="fadeOutUp">fadeOutUp</option>
                                    <option value="fadeOutUpBig">fadeOutUpBig</option>
                                </optgroup>
                                <optgroup label="Flippers">
                                    <option value="flip">flip</option>
                                    <option value="flipInX">flipInX</option>
                                    <option value="flipInY">flipInY</option>
                                    <option value="flipOutX">flipOutX</option>
                                    <option value="flipOutY">flipOutY</option>
                                </optgroup>
                                <optgroup label="Lightspeed">
                                    <option value="lightSpeedIn">lightSpeedIn</option>
                                    <option value="lightSpeedOut">lightSpeedOut</option>
                                </optgroup>
                                <optgroup label="Rotating Entrances">
                                    <option value="rotateIn">rotateIn</option>
                                    <option value="rotateInDownLeft">
                                        rotateInDownLeft
                                    </option>
                                    <option value="rotateInDownRight">
                                        rotateInDownRight
                                    </option>
                                    <option value="rotateInUpLeft">
                                        rotateInUpLeft
                                    </option>
                                    <option value="rotateInUpRight">
                                        rotateInUpRight
                                    </option>
                                </optgroup>
                                <optgroup label="Rotating Exits">
                                    <option value="rotateOut">rotateOut</option>
                                    <option value="rotateOutDownLeft">
                                        rotateOutDownLeft
                                    </option>
                                    <option value="rotateOutDownRight">
                                        rotateOutDownRight
                                    </option>
                                    <option value="rotateOutUpLeft">
                                        rotateOutUpLeft
                                    </option>
                                    <option value="rotateOutUpRight">
                                        rotateOutUpRight
                                    </option>
                                </optgroup>
                                <optgroup label="Sliding Entrances">
                                    <option value="slideInUp">slideInUp</option>
                                    <option value="slideInDown">slideInDown</option>
                                    <option value="slideInLeft">slideInLeft</option>
                                    <option value="slideInRight">slideInRight</option>
                                </optgroup>
                                <optgroup label="Sliding Exits">
                                    <option value="slideOutUp">slideOutUp</option>
                                    <option value="slideOutDown">slideOutDown</option>
                                    <option value="slideOutLeft">slideOutLeft</option>
                                    <option value="slideOutRight">slideOutRight</option>
                                </optgroup>
                                <optgroup label="Zoom Entrances">
                                    <option value="zoomIn">zoomIn</option>
                                    <option value="zoomInDown">zoomInDown</option>
                                    <option value="zoomInLeft">zoomInLeft</option>
                                    <option value="zoomInRight">zoomInRight</option>
                                    <option value="zoomInUp">zoomInUp</option>
                                </optgroup>
                                <optgroup label="Zoom Exits">
                                    <option value="zoomOut">zoomOut</option>
                                    <option value="zoomOutDown">zoomOutDown</option>
                                    <option value="zoomOutLeft">zoomOutLeft</option>
                                    <option value="zoomOutRight">zoomOutRight</option>
                                    <option value="zoomOutUp">zoomOutUp</option>
                                </optgroup>
                                <optgroup label="Specials">
                                    <option value="hinge">hinge</option>
                                    <option value="rollIn">rollIn</option>
                                    <option value="rollOut">rollOut</option>
                                </optgroup>
                            </select>

                            <button class="btn btn-primary js--triggerAnimation" type="button">
                                Animate Me !
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- / Form -->
            <!-- div -->
            <div class="row justify-content-center">
                <div class="text-center col-lg-4 col-md-6">
                    <!-- please keep inline style otherwise animation will not work -->
                    <span id="animationSandbox" style="display: block">
                        <img src="../assets/images/backgrounds/img1.jpg" class="img-fluid rounded" alt="user">
                    </span>
                </div>
            </div>
        </div>
    </div> --}}


@endsection
