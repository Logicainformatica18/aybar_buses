function evaluationDetail(id,registry_detail_id) {
  var formData = new FormData(document.getElementById("evaluation"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "evaluation_detail",
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

function evaluationStore() {
    var formData = new FormData(document.getElementById("evaluation"));
    axios({
            method: 'post',
            url: 'evaluationStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
  //carga pdf- csv - excel
  datatable_load();
  alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function evaluationEdit(id) {
    var formData = new FormData(document.getElementById("evaluation"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'evaluationEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            evaluation.id.value=response.data["id"];
            evaluation.description.value=response.data["description"];
          evaluation.detail.value=response.data["detail"];
            evaluation.type.value = response.data["type_id"];
               evaluation.folder_certification.value=    response.data["folder_certification"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function evaluationUpdate() {
    var formData = new FormData(document.getElementById("evaluation"));
    axios({
            method: 'post',
            url: 'evaluationUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
              //carga pdf- csv - excel
              datatable_load();
              alert('Modificado Correctamente');

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function evaluationDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("evaluation"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'evaluationDestroy',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
              //carga pdf- csv - excel
              datatable_load();
              alert('Eliminado Correctamente');

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });
}
}

function evaluationShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'evaluationShow',
            data: formData,
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
