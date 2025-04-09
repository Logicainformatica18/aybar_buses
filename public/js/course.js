function courseDetail(id,registry_detail_id) {
  var formData = new FormData(document.getElementById("course"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "course_detail",
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
function courseTopic(id,registry_detail_id) {
  var formData = new FormData(document.getElementById("course"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "course_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "temas";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      // alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function courseDetailStudent(id,registry_detail_id) {
  var formData = new FormData(document.getElementById("course"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "course_detail",
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
function courseStore() {
    var formData = new FormData(document.getElementById("course"));
    axios({
            method: 'post',
            url: 'courseStore',
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

function courseEdit(id) {
    var formData = new FormData(document.getElementById("course"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'courseEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            course.id.value=response.data["id"];
            course.description.value=response.data["description"];
          course.detail.value = response.data["detail"];
           course.hours.value=response.data["hours"];
            course.type.value = response.data["type_id"];
          course.folder_certification.value = response.data["folder_certification"];
           course.review.value=    response.data["review"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function courseUpdate() {
    var formData = new FormData(document.getElementById("course"));
    axios({
            method: 'post',
            url: 'courseUpdate',
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

function courseDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("course"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'courseDestroy',
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

function courseShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'courseShow',
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
