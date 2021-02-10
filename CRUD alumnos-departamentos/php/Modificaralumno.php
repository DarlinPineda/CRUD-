<?php
	if(isset($_POST)){
		include("conexion.php");

		$idalumno = @$_POST["idalumno"];
		$nombre = @$_POST["nombrealumno"];
		$apellido = @$_POST["apellidoalumno"];
		$idepartamento = @$_POST["idepartamento"];

		if (trim($idalumno)=="" || trim($nombre)=="" ||  trim($apellido)=="" || trim($idepartamento)==""){

			$respuesta="2";
		}
		else{ //Hacer la insercion del alumno

			//Defino las variables para conectar
			

			mysqli_query($conexion,
				"update Alumnos set NombreAlumno='".$nombre."', ApellidoAlumno='".$apellido."', 
				idDepartamento=".$idepartamento.", Identidadalumno='".$idalumno."' where Identidadalumno='".$idalumno."'"
		
			);

		
		if (mysqli_error($conexion)){

			$respuesta="2";

		}else {
				$respuesta="8";
		}

			

		}

	}else{

		//Si no hay un POST entonces retornamos al sitio orígen
	$respuesta="2";
	}
		echo $respuesta;
?>
