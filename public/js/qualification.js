function qualificationCertification() {
  var formData = new FormData(document.getElementById("prueba"));
  axios({
    method: "post",
    url: "qualification_certification",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
   //   alert("Haz sido calificado, revisa por favor tu certificado")
   //var contentdiv = document.getElementById("mycontent");
   //contentdiv.innerHTML = response.data;
 
      if (response.data=="Aprobado") {
        alert('Revisa tu certificado');       
        window.location.href = "Mis-certificados";
      }
      else if(response.data=="Desaprobado") {
        alert('Desaprobado');
        window.location.href = "Mis-cursos";
      }
      
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
  
}

function qualificationIndex(id) {
  var formData = new FormData(document.getElementById("certification"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "certification_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "Mi-examen";
    
    
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function qualificationDetail(id) {
  var formData = new FormData(document.getElementById("qualification"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "qualification_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "preguntas";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function qualificationStore(id) {
  var formData = new FormData(document.getElementById("certification"));
    formData.append("id", id);
  axios({
    method: "post",
    url: "qualificationStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
//      var contentdiv = document.getElementById("mycontent");
 //       contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      //alert(response.data);
      //         datatable_load();
      if (response.data=="error") {
        alert("Haz superado el límite de intentos");
        window.location.href = "Mis-cursos";
      }
      else if(response.data=="no matriculado"){
          alert("Debes Matricularte para acceder a las demas certificaciones");
        window.location.href = "Mis-cursos";
          }
        else {
          
          window.location.href = "Mi-examen";
        }
    
      
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function qualificationEdit(id) {
  var formData = new FormData(document.getElementById("qualification"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "qualificationEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
      qualification.id.value = response.data["id"];
      qualification.description.value = response.data["description"];
      qualification.detail.value = response.data["detail"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function qualificationUpdate(id) {
  var formData = new FormData(document.getElementById("qualification" + id));
  axios({
    method: "post",
    url: "qualificationUpdate",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
     // var contentdiv = document.getElementById("mycontent");
 //      contentdiv.innerHTML = response.data;
      //   //carga pdf- csv - excel
      //   datatable_load();
      //   alert('Modificado Correctamente');

showPage(pageIndex + 1);
    
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function qualificationDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("qualification"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "qualificationDestroy",
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

function qualificationShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "qualificationShow",
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
