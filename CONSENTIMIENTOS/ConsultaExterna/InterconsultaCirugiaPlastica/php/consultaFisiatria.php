<?php
/*
 * Este documento va relacionado con otro que está en la carpeta JsConsultas llamado consultasFisiatria.js
 */

require_once("../conexion/conn.php");
if(isset($_POST['especialidad'])) {
    // Obtener la especialidad seleccionada
    $especialidad = $_POST['especialidad'];

    $resultados = "SELECT cedula, firma, nombre, registro_p FROM fisiatria";

    // Obtener los resultados de la consulta
    $resultados = array(
        array('firma' => 'firma1', 'nombre' => 'Nombre1'),
        array('firma' => 'firma2', 'nombre' => 'Nombre2'),
        // Puedes obtener estos resultados de tu consulta a la base de datos
    );

    // Devolver los resultados en formato JSON
    echo json_encode($resultados);
} else {
    // Devolver un mensaje de error si no se proporcionó la especialidad
    echo json_encode(array('error' => 'Especialidad no especificada'));
}
/*
// Verificar la conexión
if ($connexion->connect_error) {
    die("Error de conexión: " . $connexion->connect_error);
}

$consultEspe = "SELECT cedula, firma, nombre, registro_p FROM fisiatria";
$resultEsp = $connexion->query($consultEspe);

if (!$resultEsp) {
    die("Error al ejecutar la consulta: " . $connexion->error);
}

// Obtener los resultados y almacenarlos en un array
$especialidades = array();
while ($row = $resultEsp->fetch_assoc()) {
    $especialidades[] = $row;
}

// Cerrar la conexión
$connexion->close();

// Devolver los resultados en formato JSON
echo json_encode($especialidades);*/
?>

