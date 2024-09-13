var cirugiaPlastica;
var fisiatria;
var MedicinaDolor;
var Ortopedia;


//ubicacion de los consentimientos informados a tratar
var estado = [];
var especialidades = [];
/* 
    este comentario hace referencia a este array.
    # var LinksFormularios = [];
    *Este array se crea para alamacenar los links que se van a generar mas abajo esto 
    con el fin poder recorer todos los links cuando se esten generando los documentos.
*/
var LinksFormularios = [];
/*
    Este comentario hace referencia a esta funcion
    function botonCerrarModal() {
        indow.location.reload();
    }
    *En caso de que el usuario seleccione las opcines que no son correctas y de click 
    en la X del modal se ejecuta esta funcion que recarga la pagina web.    
*/
function botonCerrarModal() {
    window.location.reload();
}
function validarCheckboxes() {
    // Obtener todos los checkboxes con la clase "especialidad"
    const checkboxes = document.querySelectorAll('.especialidad');
    // Array para almacenar los checkboxes seleccionados
    const checkboxesSeleccionados = [];
    // Recorrer los checkboxes y agregar los seleccionados al array
    checkboxes.forEach(function (checkbox) {
        // Verificar si el checkbox está marcado
        if (checkbox.checked) {
            checkboxesSeleccionados.push(checkbox.getAttribute('name'));
        }
    });
    // Verificar las especialidades seleccionadas
    checkboxesSeleccionados.forEach(function (selected) {
        if (especialidades.includes(selected)) {
            console.log('Especialidad: ' + selected);
        }
    });
    // Mostrar el mensaje de alerta con las especialidades seleccionadas
    if (checkboxesSeleccionados.length > 0) {
        if (checkboxesSeleccionados.includes('cirugiaPlastica')) {
            estado.push("cirugiaPlastica");
        }
        if (checkboxesSeleccionados.includes('fisiatria')) {
            estado.push("fisiatria");
        }
        if (checkboxesSeleccionados.includes('MedicinaDolor')) {
            estado.push("MedicinaDolor");
        }
        if (checkboxesSeleccionados.includes('Ortopedia')) {
            estado.push("Ortopedia");
        }
    } else {
        alert("Por Favor Ingresa selecciona una de las opciones")
        window.location.reload(); //Se recarga la pagina cuando los checkbox vengan sin ser seleccionados
    }
    console.log(estado);
};

function Consentimientos() {
    var modalidad = document.getElementById("modalidad").value;
    var autorizacion = document.getElementById("autorizacion").value;
    var nombrePaciente = document.getElementById("nombrePaciente").value;
    var documentoIdentidadPaciente = document.getElementById("documentoIdentidadPaciente").value;
    var Parentesco = document.getElementById("Parentesco").value;
    if (modalidad == "telexperticia") {
        
    }

    if (modalidad === "" || autorizacion === "" || nombrePaciente === "" || documentoIdentidadPaciente === "" || Parentesco === "") {
        alert("Por favor, llene todos los campos.");
    } else {
        var formularios = estado; // Asegúrate de que 'estado' esté definido.
        var tiposFormulario = ["cirugiaPlastica", "fisiatria", "MedicinaDolor", "Ortopedia"];

        tiposFormulario.forEach(function (tipo) {
            if (formularios.includes(tipo)) {
                var url = `http://localhost/consultaExterna/Interconsulta${tipo}/index.php?modalidad=${encodeURIComponent(modalidad)}&autorizacion=${encodeURIComponent(autorizacion)}&nombrePaciente=${encodeURIComponent(nombrePaciente)}&documentoIdentidadPaciente=${encodeURIComponent(documentoIdentidadPaciente)}&Parentesco=${encodeURIComponent(Parentesco)}`;
                
                LinksFormularios.push(url);
            }
        });
    }
    console.log(tiposFormulario);
    recorrerURL(LinksFormularios);
}
function recorrerURL(otrosFormularios) {
    for (let i = 0; i < otrosFormularios.length; i++) {
        setTimeout(function () {
            let enlace = otrosFormularios[i];
            window.open(enlace, '_blank');
        }, i * 500); // Ajusta el tiempo de espera según tus necesidades.
    }
}
