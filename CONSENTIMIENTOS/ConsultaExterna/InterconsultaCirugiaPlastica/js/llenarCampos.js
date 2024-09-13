window.onload = function () {   

    // Función para obtener parámetros de la URL
    function obtenerParametro(nombre) {
        const parametros = new URLSearchParams(window.location.search);
        return parametros.get(nombre);
    }
    // Obtiene los valores de la URL y llena los campos
    document.getElementById("modalidad").value = obtenerParametro("modalidad") || "" ;
    document.getElementById("NombrePaciente").value = obtenerParametro("nombrePaciente") || "";
    document.getElementById("documentoIdentidadPaciente").value = obtenerParametro("documentoIdentidadPaciente") || "";
    document.getElementById("Parentesco").value = obtenerParametro("Parentesco") || "";
    document.getElementById("autorizacion").value = obtenerParametro("autorizacion") || "";
    
};