<?php
	if(isset($_POST)){
		include("conexion.php");
    $iddepartamento=@$_POST["iddepartamento"];
		$nombredepartamento = @$_POST["nombredepartamento"];

		if (trim($nombredepartamento)==""){

			$respuesta="2";
		}
		else{ //Hacer la insercion del alumno

			//Defino las variables para conectar


			mysqli_query($conexion,
				"update Departamentos set NombreDepartamento='".$nombredepartamento."' where idDepartamento='".$iddepartamento."'"

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
