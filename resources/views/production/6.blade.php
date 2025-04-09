@extends('production.1')
@section('content')
    <style>
        /* Estilos personalizados */
        .left-panel {
            background-color: #FFA500;
            /* Fondo naranja */
            color: #003b47;
            /* Texto azul oscuro */
            border-radius: 15px;
            padding: 30px;
        }

        .left-panel img {
            width: 100%;
            border-radius: 10px;
        }

        .form-container {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Sombra ligera */
            padding: 30px;
            border-radius: 15px;
            background-color: white;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(255, 165, 0, 0.5);
            /* Enfoque en campos */
            border-color: #FFA500;
        }

        .btn-custom {
            background-color: #FFA500;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #FF8C00;
            /* Naranja más oscuro en hover */
        }
    </style>



    <form method="post" id="Customer">
        @csrf
        <!-- INICIO SECCION -->
<section class="  text-white">
        <!-- Barra lateral -->

        <!-- Contenido central -->
   <div class="container-fluid pt-5" style="background: linear-gradient(to right, #053A49 5% ,#0A7081 100%); width: 100%;">
            <div class="row justify-content-center align-items-center text-center">
<div class="col-xl-4 d-none d-xl-block d-lg-xl-block" style="margin-right:-7%">
<img src="../resource/1736173424_lineas.png" style="width: 70%;">
<img src="../resource/1736173417_imagen%20de%20asesores%20.png" style="width: 70%; margin-top: -70%; margin-bottom:-10px">

</div>
<div class="  col-xl-4">
  <!-- Contenido encima -->
                                    <img src="../ayba/4.png" alt="" width="50px" style="width: 68.6719px; height: 68.6719px;">

                                    <h4 class="text-white font-weight-bold fs-5" style="letter-spacing: 10px;"><span style="font-size: 30px;">&nbsp;<span style="font-size: 24px;">CONTÁCTANOS Y&nbsp;</span></span></h4><span style="font-size: 24px;">
                                    </span><h4 class="font-weight-bold text-warning fs-5" style="letter-spacing: 10px;"><span style="font-size: 24px;">OPTÉN TU LOTE</span></h4>
<center>
<hr style=" width: 70%; height: 2px; background-color: #F6A42C;">

</center>
                                    <p class="lead mb-4 fs-3">
                                    </p>
                                    <div class="container">
                                        <span style="font-size: 18px;"><span style="font-size: 18px; font-family: Montserrat-Regular;">¡Nosotros hacemos realidad el terreno de tus</span><br>&nbsp;sueños!</span><span style="font-size: 18px; font-family: Montserrat-Regular;">
                                    </span></div><span style="font-size: 18px; font-family: Montserrat-Regular;">
                                    </span><p><img src="../resource/1736173406_casa.png" style="width: 50%;"><br>
</p><span style="font-size: 18px; font-family: Montserrat-Regular;">
                               
</span></div><span style="font-size: 18px; font-family: Montserrat-Regular;">
                
            </span></div><span style="font-size: 18px; font-family: Montserrat-Regular;">
        </span></div></section>                        
<p></p>
<div class="text-center align-content-center" style="background-color:#054E5C;padding-top:30px;padding-bottom:10px">
            <h2 class="mb-4">
<span style="font-size: 36px;color:white" class="d-none d-md-block">CONTÁCTANOS A UN PASO DE OBTENER TU LOTE
                    IDEAL</span>
<span style="font-size: 16px;color:white" class=" d-md-none">CONTÁCTANOS A UN PASO DE OBTENER TU LOTE
                    IDEAL</span>
</h2>
        </div>

        <div class="container text-center my-5">


            <p class="mb-5"><span style="font-size: 24px;color:#054E5C">

<span style="font-size: 30px;" class="d-none d-md-block">Selecciona la
                        opción por la que quieres comunicarte con <br>nosotros y muy pronto nos pondremos en contacto
                        contigo.
</span>
<span style="font-size: 16px;" class=" d-md-none">Selecciona la
                        opción por la que quieres comunicarte con <br>nosotros y muy pronto nos pondremos en contacto
                        contigo.
</span>
</span></p>
            <div class="row justify-content-center g-4">
                <!-- Card: Soy Cliente Nuevo -->
                <div class="col-md-5">
                    <div class="card  text-center" style="cursor: pointer; transition: all 0.3s ease-in-out;border:solid 1px #054E5C">
                        <div class="card-body">

                            <img src="../resource/1736360240_icono%203.svg" alt="Cliente Nuevo" style="width: 100px; height: 100%; object-fit: cover;">
                            <h5 class="card-title fw-bold fs-9 py-7" style="color:#054E5C">Soy Cliente Nuevo</h5>
                            <a class="btn btn-hover-shadow" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:white; border-radius:100px; background-color:#FFA726; width: 190px;">
                                <b>Información »</b>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card: Propietario Aybar -->
                <div class="col-md-5">
                    <div class="card  text-center" style="cursor: pointer; transition: all 0.3s ease-in-out;border:solid 1px #054E5C">
                        <div class="card-body">

                            <img src="../resource/1736360204_icono%202.svg" alt="Propietario Aybar" style="width: 105px; height: 100%; object-fit: cover;">
                            <h5 class="card-title fw-bold fs-9 py-7" style="color:#054E5C">Propietario Aybar</h5>
                            <a class="btn btn-hover-shadow" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="color:white; border-radius:100px; background-color:#FFA726; width: 190px;">
                                <b>Información »</b>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color:#054E5C">
                    <div class="modal-header">
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div class="p-3 rounded" style="background-color: #055261; color: white; box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.3);">
                            <p class="text-center text-light mb-4"><b> <span style="font-size: 12px;">QUIERO
                                        INFORMACIÓN DE UN LOTE</span></b></p>


                            <select class="form-control" name="project_id" id="project_id" style="color: white; background-color: #055261">
                                <option value="">Seleccione un proyecto</option>
                            </select>
                            <br>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="names" placeholder="Nombres y Apellidos:" style="color: white;">
                            </div>
                            <div class="form-floating mb-3">


                                <input type="text" id="phone" class="form-control iti__tel-input" name="cellphone" placeholder="Número de Teléfono" style="color: white; width: 100%; padding-left: 74px;" autocomplete="off" data-intl-tel-input-id="0">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="dni" name="dni" placeholder="Número de DNI" style="color: white;">

                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="message" name="message" placeholder="Mensaje" style="color: white; height: 70px;" maxlength="200" oninput="updateCounter()">
                                <div class="form-text text-white">
                                    <p><span id="charCount"><span style="font-size: 8px;">0</span></span><span style="font-size: 8px;">/200 caracteres</span></p>
                                </div>
                            </div>



                            <div class="form-check text-start">
                                <input class="form-check-input" type="checkbox" id="txtTratamientoDatos" name="data_aprobed_1" value="true">
                                <label class="form-check-label fs-3" for="txtTratamientoDatos">
                                    <span class="fs-2">He leído y acepto la </span>
                                    <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg2" style="cursor: pointer;">
                                        Política para envío de comunicaciones comerciales.
                                    </a>
                                </label>
                            </div>

                            <div class="form-check text-start ">
                                <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2" name="data_aprobed_2" value="true">
                                <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                                    <span class="fs-2">He leído y acepto el </span>
                                    <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg" style="cursor: pointer;">
                                        Tratamiento de mis datos personales.
                                    </a>
                                </label>
                            </div>




                            <div class="text-center"><span style="font-size: 9px;">

                                </span><button type="button" class="btn btn-warning btn-block" onclick="CustomerStorePublic();" style="color: white; border-radius: 100px; background-color: #F6A42C; width: 180px;"><span style="font-size: 9px;">
                                        <span style="font-family: Montserrat-Bold; font-size: 12px;">Enviar mis
                                            datos</span>
                                    </span></button><span style="font-size: 9px;">
                                </span></div><span style="font-size: 9px;">
                            </span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-white text-dark" style="background-color:black" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header ">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="text-center modal-body">
                        <h3 class="modal-title fs-8" style="color:#003b47" id="exampleModalLabel">Central Telefónico</h3>
                        <p></p>

                        <a class="btn btn-hover-shadow text-center justify-content-center" href="tel:+5101-9049838" style="border-radius: 100px; background-color: rgb(19, 67, 77); width: 320px;">
                            &nbsp;

                            &nbsp;
                            <p class="fs-8 text-white " style="letter-spacing: 1px;">
                                <img src="../resource/1736360188_icono%201.svg" width="50px" alt="" srcset="" style="padding-bottom:10px;">
                                <b class="py-5">&nbsp;01-9049838</b>
                            </p>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div id="mycontent"></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5517.423605390836!2d-76.96942789923634!3d-12.084221111291818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ab490a4b17%3A0x50acc369406d2e3f!2sPatio%20Panorama!5e0!3m2!1ses-419!2spe!4v1733250273914!5m2!1ses-419!2spe" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- FIN SECCION -->
    </form>
    <script>
        // Ejecutar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', ProjectList);
    </script>

    <!-- sample modal content -->
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
@endsection
