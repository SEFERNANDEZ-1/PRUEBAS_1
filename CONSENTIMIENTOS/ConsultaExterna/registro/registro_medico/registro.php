<?php
include_once 'conn.php';
	if (isset($_POST['nombre'])) {
		$nombre=$_POST['nombre'];
		$img=$_POST['imagen'];
		$cedula=$_POST['cedula'];
		$registro_p=$_POST['registro_p'];
		

		//$campos = array();

		if($nombre == ""){
			echo'<script type="text/javascript">alert("Por Favor Completar El Campo Del Nombre"); 
			window.location.href="registro.html";
				</script>';

		}else if($cedula == ""){
			echo'<script type="text/javascript">alert("Por Favor Completar El Campo De La Cedula"); 
			window.location.href="registro.html";
				</script>';
		}
		else if($registro_p == ""){
			echo'<script type="text/javascript">alert("Por Favor Completar El Campo Del Registro Profesional"); 
			window.location.href="registro.html";
				</script>';
		}else{
			$sql="INSERT INTO fisiatria (cedula,firma,nombre,registro_p)VALUES('$cedula', '$firma', '$nombre', '$registro_p')";
			$result = mysqli_query($connexion, $sql);
			if (!$result) {
				echo "error al registarse";
			}else{
				echo'<script type="text/javascript">alert("Registro Exitoso"); 
				window.location.href="registro.html";
					</script>';
			}
			
		}
		
	}
?>