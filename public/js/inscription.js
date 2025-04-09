
function inscriptionStore(registry,student) {
    var formData = new FormData(document.getElementById("inscription"));
  formData.append("registry", registry)
  formData.append("student",student)
  axios({
    method: "post",
    url: "inscriptionStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      if ((response.data == "Error")) {
        alert("Ya Inscrito");
        window.location.href = "/Mis-cursos";
      } else {
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = response.data;
    
        alert("Inscrito Correctamente");
        window.location.href = "/Mis-cursos";
      }
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
