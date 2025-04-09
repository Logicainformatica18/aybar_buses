function topicDetail(id, registry_detail_id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "../topic_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "certificados_mantenimiento";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicDetailStudent(id, registry_detail_id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "../topic_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "Socio Comercial-certificados";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function topicStore() {
  var formData = new FormData(document.getElementById("topic"));

  // Mostrar la barra de progreso y el mensaje de "Cargando..."
  // document.getElementById("progress-container").style.display = 'block'; // Asegura que la barra y el mensaje estén visibles
  // document.getElementById("progress-message").innerText = "Cargando...";

  axios({
    method: "post",
    url: "../topicStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }

  })
    .then(function(response) {


      // Handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      // Carga PDF, CSV, Excel, etc.
      datatable_load();
      alert("Registrado Correctamente");

    })
    .catch(function(response) {
      // En caso de error
      console.log(response);
    });
}


function topicEdit(id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "../topicEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
      topic.id.value = response.data["id"];
      topic.description.value = response.data["description"];
      topic.detail.value = response.data["detail"];
      topic.instruction.value = response.data["instruction"];
       topic.video.value = response.data["video"];
       topic.type.value = response.data["type"];
       topic.url.value = response.data["url"];

      // JavaScript para establecer el contenido del textarea
      document.getElementsByClassName("note-editable")[0].innerHTML = response.data["post"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicPublic() {
  axios({
    method: "get",
    url:  "../blog/topicPublic",
  })
    .then(function (response) {

      var contentdiv = document.getElementById("mycontent");

      // Verifica que el contenedor exista
      if (contentdiv) {
        contentdiv.innerHTML = ""; // Limpia el contenido anterior

        // Accede al array correcto y verifica que exista
        const topics = response.data.data || response.data; // Ajusta según tu estructura
        if (Array.isArray(topics)) {
          topics.forEach(function (item) {
            if (item.image_1 === null) {
              item.image_1 = "1734977972_+%20de%201,000.png";
            }

            let card = `
            <div class="col-md-6 col-lg-4">
              <div class="card" style="
                cursor: pointer;
                background: url('../resource/${item.image_1}') center/cover no-repeat;
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
                overflow: hidden;"
                onmouseover="this.style.transform='translateY(-5px)'"
                onmouseout="this.style.transform='translateY(0)'">

                <!-- Contenido normal (visible al inicio) -->
                <div class="default-content text-start" style="
                  position: absolute;
                  bottom: 0px;
                  left: 0%;
                  background-color: #03424E;
                  width: 90%;
                  border-top-right-radius: 15px;
                  transition: opacity 0.3s ease-in-out;
                  padding-right:40px
                  ">
                  <h6 class='fs-3' style="color: #f8b400; text-align: left; padding-top: 25px; margin-left: 10px;">
                    ${item.description}
                  </h6>
                  <p class='fs-2' style=' margin-left: 10px;'>${item.detail}</p>
                </div>

                <!-- Contenido en hover (aparece al pasar el mouse) -->
                <div class="hover-content" style="
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  background: rgba(3, 66, 78, 0.9);
                  border-radius: 15px;
                  padding: 20px;
                  opacity: 0;
                  transition: opacity 0.3s ease-in-out;">
                  <h4 class="mt-5" style="color: #f8b400; margin-bottom: 10px; text-align: justify;">
                    ${item.description}
                  </h4>
                  <p class="fs-2" style="text-align: justify; font-family: Montserrat-Regular;">
                    <b>${item.detail}</b>
                  </p>
                </div>

                <!-- Flecha con botón circular -->
                <a target="_blank" href="http://${window.location.hostname + "/blog/" + item.url}" class="d-flex align-items-center justify-content-center position-absolute" style="
                  cursor: pointer;
                  background: white;
                  border-radius: 20%;
                  width: 60px;
                  height: 60px;
                  bottom: 5%;
                  right: 3%;
                  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                  position: absolute;
                  z-index: 2;">
                  <img src="../../resource/1738274447_679bf68f71208flecha-amarilla.svg" alt="" width="50%">
                </a>
              </div>
            </div>
          `;

            contentdiv.innerHTML += card;
          });
        } else {
          console.error("El formato de datos no es un array:", topics);
        }
      } else {
        console.error("Elemento con ID 'mycontent' no encontrado.");
      }
    })
    .catch(function (error) {
      console.error("Error en la solicitud:", error.response || error.message);
    });
}




function topicUpdate() {
  var formData = new FormData(document.getElementById("topic"));
  axios({
    method: "post",
    url: "../topicUpdate",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
      alert("Modificado Correctamente");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("topic"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "../topicDestroy",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //handle success
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = response.data;
        //carga pdf- csv - excel
        datatable_load();
        alert("Eliminado Correctamente");
      })
      .catch(function(response) {
        //handle error
        console.log(response);
      });
  }
}

function topicShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "../topicShow",
    data: formData
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
