function ProjectStore() {
    var formData = new FormData(document.getElementById("Project"));
    axios({
      method: "post",
      url: "../ProjectStore",
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
        alert("Registrado Correctamente");
      })
      .catch(function(response) {
        //handle error
        console.log(response);
      });
  }

  function ProjectEdit(id) {
    var formData = new FormData(document.getElementById("Project"));
    formData.append("id", id);

    axios({
      method: "post",
      url: "../ProjectEdit",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        // Asignación de datos al formulario
        Project.id.value = response.data["id"];

        Project.description.value = response.data["description"];




      })
      .catch(function(response) {
        // Manejo de errores
        console.log(response);
      });
  }

  function ProjectUpdate() {
    var formData = new FormData(document.getElementById("Project"));
    axios({
      method: "post",
      url: "../ProjectUpdate",
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

  function ProjectDestroy(id) {
    if (confirm("¿Quieres eliminar este registro?")) {
      var formData = new FormData(document.getElementById("Project"));
      formData.append("id", id);
      axios({
        method: "post",
        url: "../ProjectDestroy",
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
