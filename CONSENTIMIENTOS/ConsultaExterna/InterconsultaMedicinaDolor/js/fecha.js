// Espera a que el documento HTML esté completamente cargado
$(document).ready(function() {
    // Crea una nueva instancia de la clase Date, que representa la fecha y la hora actuales
    var now = new Date();

    // Obtiene el día del mes y agrega un cero al principio si es necesario (para obtener un formato de dos dígitos)
    var day = ("0" + now.getDate()).slice(-2);

    // Obtiene el mes (los meses comienzan desde 0 en JavaScript) y agrega un cero al principio si es necesario
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    // Formatea la fecha actual en el formato 'YYYY-MM-DD'
    var today = now.getFullYear() + "-" + month + "-" + day;

    // Asigna la fecha formateada al valor del elemento con el ID 'fecha' en el documento HTML
    $("#fecha").val(today);
});
