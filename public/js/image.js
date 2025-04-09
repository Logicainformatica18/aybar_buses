function ImageStore() {
  var formData = new FormData(document.getElementById("Image"));
  var progressBar = document.getElementById("progress_bar");

  // Variable para controlar el progreso actual simulado
  let simulatedProgress = 0;

  // Elimina cualquier clase previa
  progressBar.classList.remove("error", "warning", "success");

  axios({
    method: "post",
    url: "../ImageStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    },
    onUploadProgress: function (progressEvent) {
      if (progressEvent.lengthComputable) {
        var percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total);

        // Simular retraso para la animación de progreso
        let interval = setInterval(() => {
          if (simulatedProgress < percentCompleted) {
            simulatedProgress++;
            progressBar.style.width = simulatedProgress + "%";
          } else {
            clearInterval(interval);
          }
        }, 10); // Ajusta el tiempo (50 ms) según el efecto deseado
      }
    }
  })
    .then(function (response) {
      // Indicar éxito en la barra de progreso
      progressBar.style.width = "100%";
      progressBar.classList.add("success"); // Asegúrate de definir este estilo en CSS

      // Manejar éxito
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;

      // Carga de datos adicionales
      datatable_load();

      // Resetear el formulario y barra de progreso
      $('#Image')[0].reset();
      image.fotografia.src = "https://placehold.co/150";
      
      setTimeout(() => {
        progressBar.style.width = "0%"; // Vuelve la barra al estado inicial
        progressBar.classList.remove("success");
      }, 2000); // Espera 2 segundos para que se vea el estado completo
    })
    .catch(function (response) {
      // Indicar error en la barra de progreso
      progressBar.style.width = "100%";
      progressBar.classList.add("error"); // Define este estilo en CSS

      // Manejar error
      console.log(response);

      setTimeout(() => {
        progressBar.style.width = "0%"; // Resetea la barra de progreso
        progressBar.classList.remove("error");
      }, 1000);
    });
}


function ImageEdit(id) {
  var formData = new FormData(document.getElementById("Image"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "../ImageEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      image.id.value = response.data["id"];
      image.title.value = response.data["title"];
      image.description.value = response.data["description"];
      image.detail.value = response.data["detail"];
      image.fotografia.src = "../resource/" + response.data["image_1"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function ImageUpdate() {
  var formData = new FormData(document.getElementById("Image"));
  axios({
    method: "post",
    url: "../ImageUpdate",
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

function ImageDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("Image"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "../ImageDestroy",
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
function ImageDestroyAll() {
  if (confirm("¿Quieres eliminar de forma masiva?")) {
      // Obtén el formulario por su ID
      var form = document.getElementById("deleteAll");
      var formData = new FormData(form); // Crea el FormData con todos los campos del formulario

      // Enviar los datos al servidor usando Axios
      axios({
          method: "post",
          url: "../ImageDestroyAll",
          data: formData,
          headers: {
              "Content-Type": "multipart/form-data"
          }
      })
      .then(function(response) {
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = response.data;
          // Manejar éxito
          datatable_load();
        alert("Eliminados correctamente");
      })
      .catch(function(error) {
          // Manejar error
          console.error("Error al enviar la solicitud:", error);
          alert("Ocurrió un error al procesar la solicitud.");
      });
  }
}

function ImageShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "../ImageShow",
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
