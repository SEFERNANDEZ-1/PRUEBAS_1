<?php
require("../conexion/conn.php");
if (isset($_POST['borrado_espec'])) {
	$cedula = $_POST['borrado_espec'];
	//$campos = array();	
	if ($cedula == "") {
		echo '<script type="text/javascript">alert("Por Favor Completar El Campo De La Cedula"); 
			window.location.href="registro.html";
				</script>';
	} else {
		$sql = "DELETE FROM `firma_especialista` WHERE `cedula` = ?";
		$stmt = mysqli_prepare($connexion, $sql);
		mysqli_stmt_bind_param($stmt, "s", $cedula);
		$result = mysqli_stmt_execute($stmt);

		if (!$result) {
			echo "Error: " . mysqli_error($connexion);
		} else {
			echo '<script type="text/javascript">alert("Borrado Exitoso"); 
				window.location.href="b_especialista.php";
					</script>';
		}

	}

}
?>