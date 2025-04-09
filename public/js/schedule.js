function ScheduleStore() {
    var formData = new FormData(document.getElementById("Schedule"));
    axios.post("../ScheduleStore", formData).then(function (response) {
      document.getElementById("mycontent").innerHTML = response.data;
      datatable_load();
      alert("Schedule registered successfully");
    }).catch(console.log);
  }

  function ScheduleEdit(id) {
    var formData = new FormData();
    formData.append("id", id);
    axios.post("../ScheduleEdit", formData).then(function (response) {
      Schedule.id.value = response.data["id"];
      Schedule.project_id.value = response.data["project_id"];
      Schedule.bus_id.value = response.data["bus_id"];
      Schedule.date.value = response.data["date"];
      Schedule.time.value = response.data["time"];
      Schedule.status.value = response.data["status"];
    }).catch(console.log);
  }

  function ScheduleUpdate() {
    var formData = new FormData(document.getElementById("Schedule"));
    axios.post("../ScheduleUpdate", formData).then(function (response) {
      document.getElementById("mycontent").innerHTML = response.data;
      datatable_load();
      alert("Schedule updated successfully");
    }).catch(console.log);
  }

  function ScheduleDestroy(id) {
    if (confirm("Are you sure you want to delete this schedule?")) {
      var formData = new FormData();
      formData.append("id", id);
      axios.post("../ScheduleDestroy", formData).then(function (response) {
        document.getElementById("mycontent").innerHTML = response.data;
        datatable_load();
        alert("Schedule deleted successfully");
      }).catch(console.log);
    }
  }
