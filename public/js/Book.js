function BookStore() {
    var formData = new FormData(document.getElementById("Book"));
    axios({
      method: "post",
      url: "../BookStore",
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
  
  function BookEdit(id) {
    var formData = new FormData(document.getElementById("Book"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "../BookEdit",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //handle success
        var contentdiv = document.getElementById("mycontent");
        // contentdiv.innerHTML = response.data["description"];
        Book.id.value = response.data["id"];
        document.getElementById("names").value = response.data["names"];
        document.getElementById("firstname").value = response.data["firstname"];
        document.getElementById("lastname").value = response.data["lastname"];
        document.getElementById("address").value = response.data["address"];
        document.getElementById("document_type").value = response.data["document_type"];
        document.getElementById("document_number").value = response.data["document_number"];
        document.getElementById("phone").value = response.data["phone"];
        document.getElementById("email").value = response.data["email"];
        document.getElementById("claimed_amount").value = response.data["claimed_amount"];
        document.getElementById("currency_type").value = response.data["currency_type"];
        document.getElementById("office_address").value = response.data["office_address"];
        document.getElementById("product_or_service_description").value = response.data["product_or_service_description"];
        document.getElementById("complaint_details").value = response.data["complaint_details"];
        document.getElementById("complaint_request").value = response.data["complaint_request"];
  
        // Manejo de los radio buttons para claim_type (Producto o Servicio)
        if (response.data["claim_type"] === "Producto") {
          document.getElementById("product").checked = true;
        } else if (response.data["claim_type"] === "Servicio") {
          document.getElementById("service").checked = true;
        }
  
        // Manejo de los radio buttons para complaint_type (Queja o Reclamo)
        if (response.data["complaint_type"] === "Queja") {
          document.getElementById("complaint").checked = true;
        } else if (response.data["complaint_type"] === "Reclamo") {
          document.getElementById("claim").checked = true;
        }
   
       
      })
      .catch(function(response) {
        //handle error
        console.log(response);
      });
  }
  
  function BookUpdate() {
    var formData = new FormData(document.getElementById("Book"));
    axios({
      method: "post",
      url: "../BookUpdate",
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
  
  function BookDestroy(id) {
    if (confirm("¿Quieres eliminar este registro?")) {
      var formData = new FormData(document.getElementById("Book"));
      formData.append("id", id);
      axios({
        method: "post",
        url: "../BookDestroy",
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
  function BookStorePublic() {
    var formData = new FormData(document.getElementById("Book"));
    // Obtener código de país seleccionado
    let code_country = init.getSelectedCountryData().dialCode;
    formData.append("code_country", code_country);
  
    axios({
      method: "post",
      url: "BookStorePublic",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        // Reemplazar contenido dinámico en #mycontent
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = `
                  <div style="
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      height: 100vh;
                      background: url('../../resource/1738695656_67a263e8cc4d1banner-negro.jpg') no-repeat center center/cover;
                      text-align: center;
                      color: black;
                      padding: 20px;">
                      <div style="
                          background: rgba(0, 0, 0, 0.7);
                          padding: 30px;
                          border-radius: 10px;
                          box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);">
                          <h2 style="font-weight: bold;color:white">✅ ¡Reclamo Recibido!</h2>
                          <p style="font-size: 18px;color:white">📩 Su reclamo ha sido registrado con éxito.</p>
                          <p style="font-size: 18px;color:white">🎟️ Número de Ticket: <span style="font-weight: bold; color: #F49A1A;">${
                            response.data["ticket"]
                          }</span></p>
                           <p style="font-size: 18px;color:white">🎟️ Estado: <span style="font-weight: bold; color: #F49A1A;">${
                             response.data["state"]
                           }</span></p>
                          <p style="font-size: 18px;color:white">📧 Se ha enviado una notificación a su correo 📬 para hacer seguimiento a su reclamo.</p>
                          <p style="font-size: 16px; color:white">Gracias por confiar en nosotros. 🏢</p>
                      </div>
                  </div>
              `;
      })
      .catch(function(response) {
        // Manejar error
        console.log(response);
        alert("⚠️ Verifique los datos correctamente");
      });
  }