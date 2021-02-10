<?php
	if(isset($_POST)){
		include("conexion.php");

		$idalumno = @$_POST["idalumno"];
		

		if (trim($idalumno)==""){

			$respuesta="2";
		}
		else{ //Hacer la insercion del alumno

			//Defino las variables para conectar
			

			mysqli_query($conexion,
				"delete from Alumnos where Identidadalumno='".$idalumno."'"
		
			);

		
		if (mysqli_error($conexion)){

			$respuesta="2";

		}else {
				$respuesta="9";
		}

			

		}

	}else{

		//Si no hay un POST entonces retornamos al sitio orígen
	$respuesta="2";
	}
		echo $respuesta;
?>
