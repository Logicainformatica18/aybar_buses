

  function SeatReservationEdit(id) {
    var formData = new FormData();
    formData.append("id", id);
    axios.post("../SeatReservationEdit", formData).then(function (response) {
      SeatReservation.id.value = response.data["id"];
      SeatReservation.schedule_id.value = response.data["schedule_id"];
      SeatReservation.seat_number.value = response.data["seat_number"];
      SeatReservation.customer_name.value = response.data["customer_name"];
      SeatReservation.dni.value = response.data["dni"];
      SeatReservation.phone.value = response.data["phone"];
      SeatReservation.email.value = response.data["email"];
      SeatReservation.detail.value = response.data["detail"];
    }).catch(console.log);
  }

  function SeatReservationUpdate() {
    var formData = new FormData(document.getElementById("SeatReservation"));
    axios.post("../SeatReservationUpdate", formData).then(function (response) {
      document.getElementById("mycontent").innerHTML = response.data;
      datatable_load();
      alert("Reservation updated successfully");
    }).catch(console.log);
  }

  function SeatReservationDestroy(id) {
    if (confirm("Are you sure you want to delete this reservation?")) {
      var formData = new FormData();
      formData.append("id", id);
      axios.post("../SeatReservationDestroy", formData).then(function (response) {
        document.getElementById("mycontent").innerHTML = response.data;
        datatable_load();
        alert("Reservation deleted successfully");
      }).catch(console.log);
    }
  }
