@extends('production.1')
@section("content")
  

<style>
    /* Personalización de las tarjetas */
    .custom-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra inicial */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-card:hover {
      transform: translateY(-5px); /* Elevar la tarjeta en hover */
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2); /* Incrementar sombra */
    }

    .custom-btn {
      background-color: #FFA500; /* Botón naranja */
      border: none;
      border-radius: 25px;
      color: white;
      padding: 8px 20px;
      font-weight: bold;
      text-transform: uppercase;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .custom-btn:hover {
      background-color: #FF8C00; /* Naranja más oscuro en hover */
    }
  </style>



<!-- INICIO SECCION -->
<section class="text-white">
    <!-- Contenido central -->
    <div class="justify-content-center align-items-center text-center" style="background: linear-gradient(to bottom, #13434d 10%, transparent 40%), url('../resource/1735921011_portada_1_para_seccion_blog__2_.png'); background-size: cover; background-position: center; min-height: 300px; position: relative;">
        <img src="../resource/1735921011_portada_1_para_seccion_blog__2_.png" alt="Imagen de fondo" style="width: 100%; visibility: hidden;">
    </div>
</section>

<section class="text-white" style="background-color: #F6A42C">
    <div class="container BG-WA">
        <div class="row justify-content-center align-items-center text-center" style="height: 100px;">
            <h2 style="word-spacing: 8px; letter-spacing: 2px;">NOTICIAS RELACIONADAS</h2>
        </div>
    </div>
</section>
<div class="container  py-5">
    <div class="row g-4" id="mycontent">
     
  </div>
</div>
<!-- FIN SECCION -->

<script>
  topicPublic();

</script>
@endsection