$(document).on('click', '#save', function () {
    // Selecciona el elemento del lienzo (canvas) con el ID 'cvs'
    var $canvas = document.querySelector('#cvs');

    // Selecciona el elemento de la imagen con el ID 'img'
    var img = document.querySelector('#img');

    // Convierte el contenido del lienzo a una URL de datos (data URL)
    img.value = $canvas.toDataURL();

    // Envía el formulario con el nombre 'formulario'
    document.forms['formulario'].submit();
});

$(document).on('change', '#image_uploads', function (e) {
    // Crea un nuevo FileReader
    var fr = new FileReader();

    // Añade un evento de carga al FileReader
    fr.addEventListener("load", (event) => {
        // Cuando se carga la imagen, asigna la URL de datos al campo de entrada con ID 'imagen'
        document.getElementById("imagen").value = event.target.result;
    });

    // Lee el contenido del archivo seleccionado y desencadena el evento de carga
    fr.readAsDataURL(this.files[0]);
});