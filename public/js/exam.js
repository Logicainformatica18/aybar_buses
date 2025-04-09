function examDetail(id) {
  var formData = new FormData(document.getElementById("exam"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "exam_detail",
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
function examStore() {
    var formData = new FormData(document.getElementById("exam"));
    axios({
            method: 'post',
            url: 'examStore',
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

function examEdit(id) {
    var formData = new FormData(document.getElementById("exam"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'examEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            exam.id.value=response.data["id"];
            exam.ask.value=response.data["ask"];
          exam.alternative1.value = response.data["alternative1"];
          exam.alternative2.value = response.data["alternative2"];
          exam.alternative3.value = response.data["alternative3"];
            exam.alternative4.value=response.data["alternative4"];
            exam.answer.value=response.data["answer"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function examUpdate() {
    var formData = new FormData(document.getElementById("exam"));
    axios({
            method: 'post',
            url: 'examUpdate',
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

function examDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("exam"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'examDestroy',
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

function examShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'examShow',
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
