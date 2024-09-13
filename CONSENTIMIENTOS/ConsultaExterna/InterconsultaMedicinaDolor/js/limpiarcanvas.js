document.addEventListener("DOMContentLoaded", function () {
    // Obtener referencia al botón con el ID "clear"
    var button = document.getElementById("clear");

    // Asignar una función al evento click del botón
    button.onclick = function clearcanvas() {
        // Obtener referencia al elemento canvas con el ID "cvs"
        var canvas = document.getElementById("cvs"),
            // Obtener el contexto 2D del canvas
            ctx = canvas.getContext('2d');

        // Limpiar el contenido del canvas (establecer a transparente)
        ctx.clearRect(0, 0, 0, 630);

        // Establecer el tamaño del canvas a 300x300 píxeles
        canvas.height = 300;
        canvas.width = 630;

        // Dibujar un rectángulo negro de 300x300 píxeles en una posición específica
        ctx.fillRect(1000, 0, 300, 300);
        // Nota: Las coordenadas (500, 0) se cambiaron para que sea visible en el canvas de 300x300
    };
});
