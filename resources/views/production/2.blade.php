@extends('production.1')

<style>
    .bg-responsive {
        background-image: url('../resource/1738080045_portada-inicio-1-escritorio.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;

        /* height: 85vh; */
    }

    /* Para pantallas medianas (tablets) */
    @media (max-width: 1292px) {
        .bg-responsive {
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('../resource/1738247474_679b8d32253e5portada-inicio-1-tablet.jpg');
        }
    }

    /* Para pantallas pequeñas (móviles) */
    @media (max-width: 987px) {
        .bg-responsive {
            width: 10%;
            /* height: 90vh; */
            background-position: center;
            background-repeat: no-repeat;
            /* background-size: contain; */
            background-image: url('../resource/1738247025_679b8b712800cportada-inicio-1-celular.jpg');
        }
    }
</style>
@section('content')



        <!-- INICIO SECCION -->

        <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" class=" py-4" style="background-color:#f7f7f7">
            <div class="container">
                <h4 class="d-sm-none text-center display-10"
                    style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:2px">
                    <span style="color:#03424E">Reserva</span><br> tu asiento
                </h4>
                <h4 class="d-none d-sm-block text-center display-6"
                    style="margin:20px;font-family:Montserrat-SemiBold;letter-spacing:15px">
                    <span style="color:#03424E">Reserva</span><br> tu asiento
                </h4>
                <div class="subrayado mx-auto my-md-1 mb-sm-0"></div>

                <p></p>

                @php
                    $clases = [
                        'bg-light text-black',
                        'bg-dark text-white',
                        'bg-orange text-white',
                        'bg-dark text-white',
                        'bg-light text-black',
                    ];
                @endphp


                <div class="date-selector">
                    @foreach ($schedules as $schedule)
                        @php
                            $clase = $clases[$loop->index % count($clases)];
                            $fecha = \Carbon\Carbon::parse($schedule->date);
                        @endphp
                        <a href="#" onclick="ScheduleShow('{{ $schedule->id }}')" >



                            <div class="date-box {{ $clase }}" style="margin-left: 10px">
                                <div class="day">{{ $fecha->format('d') }}</div>
                                <div class="label">
                                    {{ $fecha->translatedFormat('M') }}
                                    <br>
                                    <span>{{ $schedule->time }} - {{ $fecha->translatedFormat('D') }}</span>
                                </div>
                            </div>

                            <div class="text-center mt-1">
                                <button type="button" class="btn btn-dark btn-sm">Reservar</button>

                            </div>
                        </a>
                    @endforeach
                </div>


                <span class="text-center d-block my-2 text-muted">
                    🟠 <strong>Paso 1:</strong> Haz clic en el botón <strong>"Reservar"</strong> del horario que prefieras.<br>
                    🪑 <strong>Paso 2:</strong> Elige tu asiento haciendo clic en un casillero disponible.<br>
                    ✍️ <strong>Paso 3:</strong> Completa el formulario para confirmar tu reserva.<br>
                    📩 <strong>Paso 4:</strong> Recibirás tu boleto en tu correo electrónico.
                </span>





                <div id="mycontent_2"></div>
                <div id="mycontent"></div>

<div class="text-center" id="mycontent_3"></div>


                <style>
                    .date-selector {
                        display: flex;
                        justify-content: center;
                        gap: 1px;
                        margin-bottom: 20px;
                    }

                    .date-box {
                        width: 100px;
                        padding: 10px;
                        text-align: center;
                        font-family: sans-serif;
                        cursor: pointer;
                    }

                    .day {
                        font-size: 22px;
                        font-weight: bold;
                    }

                    .label {
                        font-size: 12px;
                        text-transform: uppercase;
                        line-height: 1.2;
                    }

                    .label span {
                        font-size: 11px;
                        text-transform: lowercase;
                    }

                    .bg-light {
                        background-color: #f0f0f0;
                        color: black;
                    }

                    .bg-dark {
                        background-color: #333;
                    }

                    .bg-orange {
                        background-color: #f26522;
                    }

                    .text-white {
                        color: white;
                    }
                </style>


                <style>
                    .seat {
                        width: 50px;
                        height: 50px;
                        margin: 5px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        border-radius: 6px;
                        font-size: 12px;
                        font-weight: bold;
                        cursor: pointer;
                        border: 1px solid #ccc;
                    }

                    .seat-free {
                        background-color: #f8f9fa;
                        color: #212529;
                    }

                    .seat-occupied {
                        background-color: #6c757d;
                        color: white;
                        cursor: not-allowed;
                    }

                    .stairs {
                        width: 60px;
                        height: 50px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background-color: #fff;
                        border: none;
                        font-size: 10px;
                        color: #6c757d;
                    }

                    .seat-selected {
                        background-color: orange !important;
                        color: white;
                    }
                </style>

                <div>

                </div>


            </div>
        </div>

        <!-- Modal para Crear/Editar Reserva -->
        <div id="success-header-modal" class="modal fade" tabindex="-1" aria-labelledby="success-header-modalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-success text-white">
                        <h4 class="modal-title text-white" id="success-header-modalLabel">Reserva de Asiento</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" role="form" id="SeatReservation" name="SeatReservation" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            {{ csrf_field() }}

                            <!-- ✅ Mensaje de advertencia -->
                            <div class="alert alert-warning p-2">
                                <strong>Nota:</strong> El <strong>nombre</strong>, <strong>DNI</strong> y el <strong>comprobante de pago</strong> son <u>obligatorios</u>. Los demás campos son opcionales.
                            </div>

                            <input type="hidden" name="seat_number" id="seat_number">
                            <input type="hidden" name="schedule_id" id="schedule_id">

                            <div class="mb-3">
                                <label>Nombre del Cliente:</label>
                                <input type="text" name="customer_name" id="customer_name" class="form-control" required>

                                <label class="mt-2">DNI:</label>
                                <input type="text" name="dni" id="dni" class="form-control" required>

                                <br>
                                <label class="mt-2">Teléfono:</label>
                                <input type="text" name="phone" id="phone" class="form-control">

                                <br>
                                <label class="mt-2">Email:</label>
                                <input type="email" name="email" id="email" class="form-control">
                                <label class="mt-2">Asesor Comercial:</label>
                                <input type="text" name="business_partnert_text" id="business_partnert_text" class="form-control">
                                Paradero a Subir :
                                <select name="whereabouts" id="whereabouts" class="form-control">
                                    <option value="Oficina Mega plaza">Oficina Mega plaza</option>
                                    <option value="Pro">Pro</option>
                                    <option value="Tottus puente piedra">Tottus puente piedra</option>
                                    <option value="Ancón">Ancón</option>
                                </select>
                                <p></p>
                                <div class="container align-content-center">
                                    <div class="form-group row">
                                        <label>Comprobante de pago:</label>
                                        <input class="form-control" type="file" id="imgInp" name="photo" required onchange="readImage(this,'#blah');">
                                    </div>
                                    <div class="size-50">
                                        <br>
                                        <img id="blah" name="fotografia" src="https://placehold.co/150" alt="Tu imagen" class="img-bordered" width="50%">
                                    </div>
                                </div>

                                <label class="mt-2">Observaciones:</label> <span>Opcional</span>
                                <textarea name="detail" id="detail" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="save-btn" class="btn bg-success-subtle text-success" onclick="SeatReservationStore()">
                            Guardar
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



        <script>
       let lastClickedSeat = null;

function renderSeatMaps() {
    console.log("✅ Ejecutando renderSeatMaps...");

    document.querySelectorAll(".seat-map").forEach(function (container) {
        let reservedSeats = [];

        try {
            const seatsAttr = container.getAttribute("data-seats");
            if (seatsAttr) {
                reservedSeats = JSON.parse(seatsAttr);
            }
        } catch (e) {
            console.warn("⚠️ Error al parsear data-seats en:", container);
            reservedSeats = [];
        }

        const totalSeats = parseInt(container.getAttribute("data-total")) || 0;
        const scheduleId = container.getAttribute("data-schedule") || "0";

        // 🧽 Limpiar contenido anterior
        container.innerHTML = "";

        for (let i = 1; i <= totalSeats; i++) {
            const seat = document.createElement("div");
            seat.className = "seat";
            seat.innerHTML = `${i}<br><small>s/. 45.00</small>`;

            if (reservedSeats.includes(i)) {
                seat.classList.add("seat-occupied");
            } else {
                seat.classList.add("seat-free");
                seat.onclick = function () {
                    if (lastClickedSeat) {
                        lastClickedSeat.classList.remove("seat-selected");
                    }

                    seat.classList.add("seat-selected");
                    lastClickedSeat = seat;

                    // ✅ Asegúrate de tener estos IDs en el formulario
                    document.getElementById("seat_number").value = i;
                    document.getElementById("schedule_id").value = scheduleId;

                    const modal = document.getElementById("success-header-modal");
                    if (modal) {
                        new bootstrap.Modal(modal).show();
                    }
                };
            }

            // Escalera visual
            if (i === 22) {
                container.appendChild(seat);
                const stairDiv = document.createElement("div");
                stairDiv.className = "stairs";
                stairDiv.innerText = "ESCALERA";
                container.appendChild(stairDiv);
                continue;
            }

            container.appendChild(seat);
        }
    });
}

// Ejecutar al cargar la página
document.addEventListener("DOMContentLoaded", function () {
    renderSeatMaps();
});


function SeatReservationStore() {
    const form = document.getElementById("SeatReservation");
    const saveBtn = document.getElementById("save-btn");

    // Mostrar spinner
    saveBtn.disabled = true;
    saveBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Guardando...`;

    const formData = new FormData(form);

    axios.post("../SeatReservationStorePublic", formData, {
        headers: {
            "Content-Type": "multipart/form-data"
        }
    }).then(function (response) {
        alert("✅ Registrado correctamente");

        // Marcar asiento como ocupado
        if (lastClickedSeat) {
            lastClickedSeat.classList.remove("seat-selected", "seat-free");
            lastClickedSeat.classList.add("seat-occupied");
            lastClickedSeat.onclick = null;
            lastClickedSeat = null;
        }

        // ✅ Cerrar el modal correctamente con Bootstrap 5
        const modalEl = document.getElementById("success-header-modal");
        const modalInstance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
        modalInstance.hide();

        // 🧼 Limpiar el formulario y la imagen
        form.reset();
        document.getElementById("blah").src = "https://placehold.co/150";

        // Restaurar botón
        saveBtn.disabled = false;
        saveBtn.innerHTML = `Guardar`;

        // Mostrar comprobante PDF
        const mycontent_3 = document.getElementById("mycontent_3");
        const verificarBaseUrl = "../../verificar";
        mycontent_3.innerHTML = `
            <p></p>
            <a download="comprobante.pdf"
               href="../generate-pdf/${response.data}" target="_blank"
               class="btn btn-primary">Descargar Comprobante - PDF</a>
            <p></p>
            <iframe
                src="${verificarBaseUrl}/${response.data}"
                width="100%"
                height="100%"
                style="border:none;">
            </iframe>
        `;

    }).catch(function (error) {
        console.error("❌ Error:", error);
        saveBtn.disabled = false;
        saveBtn.innerHTML = `Guardar`;

        if (error.response && error.response.status === 500) {
            alert("🚫 " + (error.response.data?.message || "El asiento ya ha sido reservado."));
        } else {
            alert("❌ Error inesperado al guardar la reserva.");
        }
    });
}




            function ScheduleShow(id) {
                var formData = new FormData(document.getElementById("SeatReservation"));
                formData.append("id", id);
                axios.post("../ScheduleShow", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data"
                    }
                }).then(function(response) {
                    // Actualizar la tabla
                    document.getElementById("mycontent_2").innerHTML = response.data;

                    renderSeatMaps();


                }).catch(function(error) {
                    console.error(error);
                    alert("Error");
                });
            }
        </script>




        </div>
        </div>

        <div style="width:100%">

            <img src="{{ asset('ayba/bus_3.png') }}" alt=""style="width:100%;height:100%;margin-top:-10px">
        </div>


        <!-- FIN SECCION -->
        <button type="button"id="boton-oculto-modal" class="d-none btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#autoModal">
            Abrir Modal
        </button>

    <style>
        input::placeholder {
            color: rgb(136, 136, 136) !important;
            /* Color del placeholder */
            opacity: 1 !important;
            /* Asegura visibilidad */
            font-family: Montserrat-SemiBold;
        }
    </style>
@endsection

<script>
    //reinicia animacion AOS
    //reinicia animacion AOS

    // Función para reiniciar AOS en TODOS los elementos con atributos data-aos
    function restartAOS() {
        $("[data-aos='flip-left']").removeClass("aos-animate"); // Quitar animación

        setTimeout(() => {
            $("[data-aos]").addClass("aos-animate"); // Volver a agregar animación
            AOS.refreshHard(); // Refrescar AOS para que vuelva a aplicar los efectos
        }, 1000);
    }

    // Ejecutar cada 3 segundos
    setInterval(restartAOS, 70000);
</script>
