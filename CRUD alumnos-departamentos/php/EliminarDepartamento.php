<?php
	if(isset($_POST)){
		include("conexion.php");

		$iddepartamento = @$_POST["iddepartamento"];


		if (trim($iddepartamento)==""){

			$respuesta="2";
		}
		else{ //Hacer la insercion del alumno

			//Defino las variables para conectar


			mysqli_query($conexion,
				"delete from Departamentos where idDepartamento='".$iddepartamento."'"

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
