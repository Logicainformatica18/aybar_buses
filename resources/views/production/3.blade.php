@extends('production.1')
@section('content')
<style>
    .bg-responsive {
        background-image: url('../../resource/1738348658_679d1872b2f44portada-nosotros-escritorio.jpg');
        height:82vh;
        background-size: cover;
        /* height: 85vh; */
    }

    /* Para pantallas medianas (tablets) */
    @media (max-width: 987px) {
        .bg-responsive {
            height:82vh;
            background-size: cover;
            background-image: url('../../resource/1738431952_679e5dd0a6af6portada-nosotros-tablet.jpg');
        }
    }

    /* Para pantallas pequeñas (móviles) */
    @media (max-width: 575px) {
        .bg-responsive {
            height:52vh;
            width: 100%;
            background-size: cover;
            background-image: url('../../resource/1738431887_679e5d8fb6295portada-nosotros-celular.jpg');
        }
    }
</style>
    <!-- INICIO SECCION -->
<div class="py-1 position-relative bg-responsive" style=" 
    background-position: center;
    background-repeat: no-repeat;
 
    ">
 <div class="d-none d-sm-block text-center text-white position-absolute start-50 translate-middle" style="bottom:-13%;width:500px">
    <h4 class="p-2  text-center fs-6" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
        <span style="color:#ffffff">¿QUIÉNES</span><br> SOMOS?
    </h4>
    <div class="subrayado mx-auto "></div>
   <p class=" fs-5 mt-3" style="text-align: justify">Somos una inmobiliaria completamente peruana,
    dedicada a la creación de proyectos
    inmobiliarios de terrenos de todas las familias del
    Perú. Ofrecemos terrenos exclusivos en el país.</p>
 </div>

 <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="top:12%;width:290px">
<img src="../../resource/1738076896_logo%20aybar%20blanco.svg" width="75px" alt="" srcset="">
 </div>
 <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="bottom:-16%;width:300px">
    <h4 class="p-2  text-center fs-3" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
        <span style="color:#ffffff">¿QUIÉNES</span><br> SOMOS?
    </h4>
    
    <div class="subrayado mx-auto "></div>
   <p class=" fs-2 mt-4" style="text-align: center">Somos una inmobiliaria completamente peruana,
    dedicada a la creación de proyectos
    inmobiliarios de terrenos de todas las familias del
    Perú. Ofrecemos terrenos exclusivos en el país.</p>
 </div>
</div>
<div class="container py-md-5 py-1">
    <div class="row ">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4 col-12">
            <div class="card" style="box-shadow:none" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="text-center" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="../resource/1738421604_679e356486d28vision.svg" class="" style="width:120px;" alt="Imagen 1">
    
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title pb-4" style="font-family: Montserrat-SemiBold;letter-spacing:10px;color:#03424E;margin-top:-20px;">VISIÓN</h5>
                  <p class="card-text fs-4" style="text-align:justify;color:#03677a ">Queremos ser <b> reconocidos como la
                    mejor inmobiliaria en proyectos
                    económicos y ecosostenibles,</b>
                    liderando en gestión y satisfaciendo a
                    nuestros clientes en sus inversiones
                    ideales.
                  
                </p></div>
              </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4 col-12">
            <div class="card" style="box-shadow:none" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="text-center" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="../resource/1738421620_679e3574ddae2mision.svg" class="" style="width:120px;margin-left:30px" alt="Imagen 1">
    
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title pb-4" style="font-family: Montserrat-SemiBold;letter-spacing:10px;color:#03424E;margin-top:-20px;">MISIÓN</h5>
                  <p class="card-text fs-4" style="text-align:justify;color:#03677a ">Somos una inmobiliaria que <b> ayuda a 
                    los peruanos a obtener su propio 
                    lote </b>con espacios de calidad y eco
                    sostenibles. Ofrecemos
                    asesoramiento integral para
                    satisfacer tus necesidades
                    inmobiliarias y maximizar tu
                    rentabilidad con integridad y empatía.</p>
                  
                </div>
              </div>
           
        </div>
        <!-- Card 3 -->
        <div class="col-md-12 col-lg-4 col-12">
            <div class="card" style="box-shadow:none" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="text-center" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="../resource/1738421610_679e356a803dfvalores.svg" class="" style="width:120px;" alt="Imagen 1">
    
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title pb-4" style="font-family: Montserrat-SemiBold;letter-spacing:10px;color:#03424E;margin-top:-20px;">MISIÓN</h5>
                  <p class="card-text fs-4" style="text-align:justify;color:#03677a ">Fomentamos un <b> ambiente de
                    trabajo colaborativo y de apoyo
                    mutuo,</b> valorando a nuestro equipo
                    humano. Esto nos permite satisfacer
                    mejor las necesidades y deseos de
                    nuestros clientes.</p>
                  
                </div>
              </div>
        </div>
      </div>
</div>
<div class="my-0 " data-aos="flip-left" data-aos-duration="1300" data-aos-delay="500">
      <div class="sliding-wrapper position-relative overflow-hidden">
        <div class="slide-background d-flex w-100">


          <div class="slide" style="margin-right:1px">
            <iframe width="1000" height="515" src="https://www.youtube.com/embed/4Uqn76cNr7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
           </div>
           <div class="slide">
            <iframe width="1000" height="515" src="https://www.youtube.com/embed/LYImsD6hVx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
           </div>
           <div class="slide">
            <iframe width="1000" height="515" src="https://www.youtube.com/embed/eJ3sHYjSyaU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
           </div>
      
        </div>
    </div>
    </div>
<div class="d-none d-lg-block text-center mt-5 position-relative" style="width: 100vh; height: 90vh; margin: auto;">
      <!-- Círculo -->
      <div class="position-absolute top-1 start-0 w-100 h-100">
        <img src="../../resource/1734547017_circulo.png" width="60%" style="padding:5%;" alt="" srcset="">
      </div>
      <div data-aos="flip-left" data-aos-delay="1000" data-aos-duration="1000">
        <img src="../../resource/1738351411_679d2333ab35blogo%20aybar%20a%20color.svg" alt="Logo Aybar Corp" class="position-absolute start-50 translate-middle" style="width: 30%; margin-top:30%">
      </div>
      <!-- Logo en el centro -->
     

      <!-- Valores alrededor del círculo -->
      <div class="position-absolute text-end" style="top: 5%; left: -13%; width: 350px;">
          <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">SOLIDARIDAD</h4>
          <div class="row">
            <div class="col-10"></div>
            <div class="col-2" style="width:12%; height: 6px; background-color: #F4A623;margin-top:-5px"></div>
          </div>
          <p class=" mt-2 text-end text-justify fs-3" style="color:#03677a">Cooperar y ayudarse mutuamente <br>
            representando un bien en común.<br>
            Trabajar junto con otros miembros<br>
            del equipo y con todos los demás<br>
            integrantes de la empresa. </p>
      </div>

      <div class="position-absolute text-start" style="top: 5%; right: -13%; width: 350px;">
        <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">RESPETO</h4>

          <div class="" style="width: 40px; height: 6px;margin-top:-5px; background-color: #F4A623;"></div>
          <p class=" mt-2 text-start text-justify fs-3" style="color:#03677a">Promover relaciones sólidas entre<br>
            los miembros del equipo, mejorando<br>
            la comunicación, incentivando la<br>
            colaboración y la productividad.  </p>

      </div>
      <div class="position-absolute text-end" style="bottom: 35%; left: -13%; width: 350px;">
        <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">INTEGRIDAD</h4>
        <div class="row">
          <div class="col-10"></div>
          <div class="col-2" style="width:12%; height: 6px; background-color: #F4A623;margin-top:-5px"></div>
        </div>
        <p class=" mt-2 text-end text-justify fs-3" style="color:#03677a">Actuar con honestidad, transparencia <br>
          y ser congruente entre las palabras,<br>
          decisiones y acciones en función al<br>
          valor y creencias particulares que<br>
          cada persona tenga.
         </p>
    </div>

  
    <div class="position-absolute text-start" style="bottom: 35%; right: -13%; width: 350px;">
      <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">EMPATÍA</h4>

        <div class="" style="width: 40px; height: 6px;margin-top:-5px; background-color: #F4A623;"></div>
        <p class=" mt-2 text-start text-justify fs-3" style="color:#03677a">Impulsar que cada miembro del <br>
          equipo comprenda y conecte con el<br>
          punto de vista, las emociones y las<br>
          necesidades del otro, para llegar a<br>
          acuerdos efectivos y mucho más
          humanos. </p>

    </div>

      <div class="position-absolute text-center" style="bottom: 22%; left: 50%; transform: translateX(-50%); width: 350px;">
        <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">COMPROMISO</h4>  
 
          <div class="mx-auto" style="width: 40px; height: 6px; background-color: #F4A623;margin-top:-5px"></div>
          <p class="small fs-3 mt-2" style="color:#03677a">Incentivar el logro de los objetivos
            de cada equipo   humano, apoyo y
            aceptación de las metas y valores
            de la organización.</p>
      </div>
  </div>

  <div class="d-lg-none container text-center mt-5">
    <!-- Logo -->
    <img src="../../resource/1738351411_679d2333ab35blogo%20aybar%20a%20color.svg" alt="Logo Aybar Corp" class="mb-4" style="width: 80px;">

    <!-- Primera fila (SOLIDARIDAD - RESPETO) -->
    <div class="row">
        <div class="col-md-6">
          <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">SOLIDARIDAD</h4>
            <div class="mx-auto" style="width: 40px; height: 6px;margin-top:-8px; background-color: #F4A623;"></div>
            <p class=" mt-2 text-center text-justify fs-3" style="color:#03677a;">Cooperar y ayudarse mutuamente <br>
              representando un bien en común.<br>
              Trabajar junto con otros miembros<br>
              del equipo y con todos los demás<br>
              integrantes de la empresa. </p>
        </div>
        <div class="col-md-6">
          <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">RESPETO</h4>
          <div class="mx-auto" style="width: 40px; height: 6px;margin-top:-8px; background-color: #F4A623;"></div>
          <p class=" mt-2 text-center text-justify fs-3" style="color:#03677a">Promover relaciones sólidas entre<br>
            los miembros del equipo, mejorando<br>
            la comunicación, incentivando la<br>
            colaboración y la productividad.  </p>
        </div>
    </div>

    <!-- Segunda fila (INTEGRIDAD - COMPROMISO) -->
    <div class="row mt-4">
        <div class="col-md-6">
          <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">INTEGRIDAD</h4>
          <div class="mx-auto" style="width: 40px; height: 6px;margin-top:-8px; background-color: #F4A623;"></div>
          <p class=" mt-2 text-center fs-3" style="color:#03677a">Actuar con honestidad, transparencia <br>
            y ser congruente entre las palabras,<br>
            decisiones y acciones en función al<br>
            valor y creencias particulares que<br>
            cada persona tenga.
           </p>
        </div>
        <div class="col-md-6">
            <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">COMPROMISO</h4>
            <div class="mx-auto" style="width: 40px; height: 6px;margin-top:-8px; background-color: #F4A623;"></div>
            <p class="small text-center fs-3 mt-2" style="color:#03677a">Incentivar el logro de los objetivos
              de cada equipo   humano, apoyo y
              aceptación de las metas y valores
              de la organización.</p>
        </div>
    </div>

    <!-- Última fila (EMPATÍA, centrado) -->
    <div class="row mt-4">
        <div class="col-md-12 mx-auto">
          <h4 class="fs-7 " style="color:#03424E;letter-spacing:1px">EMPATÍA</h4>
          <div class="mx-auto" style="width: 40px; height: 6px;margin-top:-8px; background-color: #F4A623;"></div>
          <p class=" mt-2  text-justify fs-3" style="color:#03677a">Impulsar que cada miembro del 
            equipo comprenda y conecte con el 
            punto de <br> vista, las emociones y las 
            necesidades del otro, para llegar a 
            acuerdos efectivos <br> y mucho más
            humanos. </p>
        </div>
    </div>
</div>
<div data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" class="py-4 " style="background-color:#f7f7f7">
  
  <div class="container mb-5  text-center justify-content-center">
    <h4 class="d-sm-none text-center display-10" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:2px">
      <span style="color:#03424E">PREGUNTAS </span><br> FRECUENTES
  </h4>
    <h4 class="d-none d-sm-block text-center display-6 mt-3" style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:15px">
      <span style="color:#03424E">PREGUNTAS </span><br> FRECUENTES
  </h4>
  <div class="subrayado mx-auto " style="margin-top:-13px"></div>
    <div class="row  justify-content-center mt-md-5 mt-4 ">
      

        <!-- Preguntas frecuentes (acordeón) -->
        <div class="col-md-7 container text-center align-content-center justify-content-center">
          
          <div class="accordion " id="faqAccordion">
            <!-- Pregunta 1 -->
           
            <div class="accordion-item border rounded-3 mb-0 ">
                <h2 class="accordion-header pt-4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="background-color: white; box-shadow: none; border-radius: 10px; background-image: none !important; padding-right: 10px;">
                        <span style="color:#03677a" class="fs-4 text-center">  ¿Cuáles son las opciones de pago para la adquisición de mi lote?</span>
                        <span class="text-warning mx-auto">▼</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse pb-3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-center " style="margin-left:5px">
                        Las opciones de pago incluyen transferencia bancaria, tarjeta de crédito y más.
                    </div>
                </div>
            </div>

            <!-- Pregunta 2 -->
            <div class="accordion-item border rounded-3 mb-0">
              <h2 class="accordion-header pt-4">
                  <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: white; box-shadow: none; border-radius: 10px; background-image: none !important; padding-right: 10px;">
                      <span style="color:#03677a" class="fs-4 text-center">¿Instapay cobra alguna tarifa?</span>
                      <span class="text-warning mx-auto">▼</span>
                  </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse pb-3" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-center" style="margin-left:5px">
                      Instapay no cobra tarifas ocultas, pero pueden aplicar cargos según el método de pago.
                  </div>
              </div>
          </div>
          
        </div>
        </div>

        <!-- Tarjeta izquierda -->
      
    </div>
</div>
</div>
<!-- FIN SECCION -->



















  
          <style>
            /* Ocultar flecha predeterminada de Bootstrap */
            .accordion-button::after {
                display: none !important;
            }
        </style>
  





    <p></p>

    <script>
        // Inicializamos AOS
      
     
        function restartAOSForEffect(effect, interval) {
        setInterval(function () {
          // Seleccionar elementos con el data-aos deseado y quitar la clase de animación
          $("[data-aos='" + effect + "']").removeClass("aos-animate");

          // Después de 1 segundo, volver a agregar la clase y refrescar AOS
          setTimeout(function () {
            $("[data-aos='" + effect + "']").addClass("aos-animate");
            AOS.refreshHard();
          }, 1000);
        }, interval);
      }

      // Reinicia el efecto flip-left cada 3 segundos (3000ms)
      restartAOSForEffect("flip-up", 3000);

      // Reinicia el efecto flip-right cada 3 segundos (3000ms)
      restartAOSForEffect("flip-right", 3000);

      </script>


    
@endsection
