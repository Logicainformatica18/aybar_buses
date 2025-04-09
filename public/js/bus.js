function BusStore() {
    var formData = new FormData(document.getElementById("Bus"));
    axios.post("../BusStore", formData).then(function (response) {
      document.getElementById("mycontent").innerHTML = response.data;
      datatable_load();
      alert("Bus registered successfully");
    }).catch(console.log);
  }

  function BusEdit(id) {
    var formData = new FormData();
    formData.append("id", id);
    axios.post("../BusEdit", formData).then(function (response) {
      Bus.id.value = response.data["id"];
      Bus.description.value = response.data["description"];
      Bus.seat_count.value = response.data["seat_count"];
    }).catch(console.log);
  }

  function BusUpdate() {
    var formData = new FormData(document.getElementById("Bus"));
    axios.post("../BusUpdate", formData).then(function (response) {
      document.getElementById("mycontent").innerHTML = response.data;
      datatable_load();
      alert("Bus updated successfully");
    }).catch(console.log);
  }

  function BusDestroy(id) {
    if (confirm("Are you sure you want to delete this bus?")) {
      var formData = new FormData();
      formData.append("id", id);
      axios.post("../BusDestroy", formData).then(function (response) {
        document.getElementById("mycontent").innerHTML = response.data;
        datatable_load();
        alert("Bus deleted successfully");
      }).catch(console.log);
    }
  }
