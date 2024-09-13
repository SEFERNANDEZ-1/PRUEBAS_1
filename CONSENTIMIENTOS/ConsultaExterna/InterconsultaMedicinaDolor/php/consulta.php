<?php
// Incluir el archivo de conexión a la base de datos
include_once("../../conexion/conn.php");

// Consultar la base de datos para obtener información de la tabla 'dolormet_firma'
$sql = "SELECT nombre, firma, cedula, registro_p FROM dolormet_firma";
$result = mysqli_query($connexion, $sql);

// Crear un array para almacenar los elementos de opción
$opcionElement = array();

// Iterar sobre los resultados de la consulta y almacenarlos en el array
while ($row = mysqli_fetch_assoc($result)) {
  $opcionElement[] = $row;
}

// Convertir el array a formato JSON y enviarlo como respuesta
echo json_encode($opcionElement);
?>
