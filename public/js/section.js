
function sectionStore() {
  var formData = new FormData(document.getElementById("section"));

  // Mostrar la barra de progreso y el mensaje de "Cargando..."
  // document.getElementById("progress-container").style.display = 'block'; // Asegura que la barra y el mensaje estén visibles
  // document.getElementById("progress-message").innerText = "Cargando...";

  axios({
    method: "post",
    url: "../SectionStore",
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
      //datatable_load();

      alert("Registrado Correctamente");
      window.location.reload();
   
    })
    .catch(function(response) {
      // En caso de error
      console.log(response);
    });
}


function sectionUpdateDinamic(id) {
  var formData = new FormData(document.getElementById("section"+id));

  // Mostrar la barra de progreso y el mensaje de "Cargando..."
  // document.getElementById("progress-container").style.display = 'block'; // Asegura que la barra y el mensaje estén visibles
  // document.getElementById("progress-message").innerText = "Cargando...";

  axios({
    method: "post",
    url: "../SectionUpdateDinamic",
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
      //datatable_load();

      alert("Modificado Correctamente");
      window.location.reload();
   
    })
    .catch(function(response) {
      // En caso de error
      console.log(response);
    });
}

function sectionEdit(id) {
  var formData = new FormData(document.getElementById("section"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "../SectionEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
      section.id.value = response.data["id"];
      section.description.value = response.data["description"];
      section.detail.value = response.data["detail"];
      section.nivel.value = response.data["nivel"];
      section.module.value = response.data["module"];
     // section.color.value = response.data["color"];
         

      // JavaScript para establecer el contenido del textarea
 //    document.getElementsByClassName("note-editable")[0].innerHTML = response.data["code"];
    $('#my-textarea').summernote('code', response.data["code"]); // Reemplaza textareaId con el ID de tu textarea.

      alert('Ahora puedes editar');
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}



function sectionGenerate(id) {
  var formData = new FormData();
  formData.append("id", id);
  axios({
    method: "get",
    url: "generate/"+id,
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];

    
      alert(response.data["message"]+" "+response.data["filePath"]);
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}


function sectionUpdate() {
  var formData = new FormData(document.getElementById("section"));
  axios({
    method: "post",
    url: "../SectionUpdate",
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
    //  datatable_load();
      alert("Modificado Correctamente");
      window.location.reload();
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function sectionDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("section"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "../SectionDestroy",
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


