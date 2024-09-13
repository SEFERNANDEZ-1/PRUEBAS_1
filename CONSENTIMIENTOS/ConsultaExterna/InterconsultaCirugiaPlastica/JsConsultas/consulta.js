// Esta función se ejecuta cuando la ventana ha sido cargada completamente
window.onload = function () {

  // Obtener referencia al elemento de lista desplegable con el ID 'fisio'
  var selectOpciones = document.getElementById('fisio');

  // Crear una solicitud AJAX utilizando XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Configurar la solicitud
  xhr.open('get', 'php/consulta.php', true);
  xhr.setRequestHeader('Content-type', 'application/json');

  // Manejar la respuesta cuando la solicitud se complete
  xhr.onload = function () {
    // Verificar si la respuesta fue exitosa (status 200)
    if (xhr.status == 200) {
      // Parsear la respuesta JSON a un objeto JavaScript
      var nombres = JSON.parse(xhr.responseText);
      // Llamar a la función para poblar el elemento de lista desplegable
      poblarSelect(nombres);
    } else {
      console.error('Error al realizar la solicitud');
    }
  };

  // Enviar la solicitud al servidor
  xhr.send();

  // Función para poblar el elemento de lista desplegable con los nombres obtenidos
  function poblarSelect(nombres) {
    // Iterar sobre la lista de nombres
    nombres.forEach(function (objeto) {
      // Extraer valores del objeto
      var firma = objeto.firma;
      var nombre = objeto.nombre;

      // Crear un elemento de opción
      var opcionElement = document.createElement('option');

      // Establecer el valor y texto de la opción con los datos del objeto
      opcionElement.value = firma;
      opcionElement.textContent = nombre;

      // Agregar la opción al elemento de lista desplegable
      selectOpciones.appendChild(opcionElement);
    });
  }
};
