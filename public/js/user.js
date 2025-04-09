
function userStore() {
    var formData = new FormData(document.getElementById("user"));
    var progressBar = document.getElementById("progress_bar");

    axios({
            method: 'post',
            url: '../userStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            },
            onUploadProgress: function(progressEvent) {
                if (progressEvent.lengthComputable) {
                    var percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total);
                    progressBar.style.width = percentCompleted + "%";
                }
            }
        })
        .then(function(response) {
            // Reset progress bar to 0 after completion
            progressBar.style.width = "0%";

            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;

            // cargar pdf, csv, excel
            datatable_load();
            alert('Registrado Correctamente');
        })
        .catch(function(error) {
            // Reset progress bar to 0 in case of error
            progressBar.style.width = "0%";

            //handle error
            console.log(error);
        });
}


function userDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {
        var formData = new FormData(document.getElementById("user"));
        formData.append("id", id);
        axios({
                method: 'post',
                url: "../userDestroy",
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
function userImportGoogle() {

    var formData = new FormData(document.getElementById("user"));
        formData.append("id_sheet", document.getElementById("id_sheet").value);
        formData.append("range", document.getElementById("range").value);
        axios({
                method: 'post',
                url: "../userImportGoogle",
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
              alert('Importado Correctamente');
              window.location.reload();
            })
            .catch(function(response) {
                //handle error
              //  console.log(response);
              alert('Ocurrió un error al importar, verifíque los datos');
            });

}
function userEdit(id) {
    var formData = new FormData(document.getElementById("user"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: '../userEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            user.id.value = response.data["id"];
            user.dni.value = response.data["dni"];
            user.firstname.value = response.data["firstname"];
            user.lastname.value = response.data["lastname"];
            user.names.value = response.data["names"];

            if(response.data["photo"]!=null){

                user.fotografia.src ="../imageusers/"+ response.data["photo"];
            }
            else{
                user.fotografia.src ="https://placehold.co/150";
            }
            user.email.value = response.data["email"];
            user.cellphone.value = response.data["cellphone"];


            if (response.data["sex"]=="M") {
                document.getElementById('M').checked=true;
            }
            else{
                document.getElementById('F').checked=true;
            }
         var datebirth =  response.data["datebirth"];
         user.month.value  = parseInt(datebirth.substr(5,2)) ;
         user.day.value  = parseInt(datebirth.substr(8,2)) ;
         user.year.value  = parseInt(datebirth.substr(0,4)) ;

         user.role.value=    response.data["roles_"][0]["name"];



        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function userUpdate() {
    var formData = new FormData(document.getElementById("user"));
    axios({
            method: 'post',
            url: '../userUpdate',
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

function userShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'userShow',
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



function userUpdateProfile() {
   
    var formData = new FormData(document.getElementById("user"));
    axios({
            method: 'post',
            url: '../userUpdateProfile',
            data: formData,
        })
        .then(function(response) {
            //handle success
          //  var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data;
         alert('Actualizado correctamente');
         window.location.reload();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}


function UserRoleEdit(id) {
    var formData = new FormData(document.getElementById("User_role"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: '../UserRoleEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
            User_role.id.value = id;
            
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}


function UserRoleUpdate() {
    var formData = new FormData(document.getElementById("User_role"));
    axios({
      method: "post",
      url: "../UserRoleUpdate",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //handle success
      //  var contentdiv = document.getElementById("mycontent_detail");
      //  contentdiv.innerHTML = response.data;
        alert("Roles Actualizados Correctamente");
        window.location.reload();
      })
      .catch(function(response) {
        //handle error
        console.log(response);
      });
  }