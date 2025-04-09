function RoleStore() {
  var formData = new FormData(document.getElementById("Role"));
  axios({
    method: "post",
    url: "../RoleStore",
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

function RoleEdit(id) {
  var formData = new FormData(document.getElementById("Role"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "../RoleEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
      Role.id.value = response.data["id"];
      Role.name.value = response.data["name"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function RoleUpdate() {
  var formData = new FormData(document.getElementById("Role"));
  axios({
    method: "post",
    url: "../RoleUpdate",
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

function RoleDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("Role"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "../RoleDestroy",
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

function RoleShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "../RoleShow",
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

function RolePermissionUpdate() {
  var formData = new FormData(document.getElementById("Role_permission"));
  axios({
    method: "post",
    url: "../RolePermissionUpdate",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
    //  var contentdiv = document.getElementById("mycontent_detail");
    //  contentdiv.innerHTML = response.data;
      alert("Permisos Actualizados Correctamente");
      window.location.reload();
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function RolePermissionEdit(id) {
  var formData = new FormData(document.getElementById("Role"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "../RolePermissionEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent_detail");
      contentdiv.innerHTML = response.data;
      Role_permission.id.value = id;
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

