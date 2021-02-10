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
			$resp= mysqli_query($conexion,"SELECT count(*) as encontro from Alumnos where Identidadalumno='$idalumno'");
			 $row1 = mysqli_fetch_array($resp);
			 if($row1['encontro']=="0"){

			mysqli_query($conexion,
				"insert into Alumnos(NombreAlumno, ApellidoAlumno, idDepartamento, Identidadalumno)
					values('".$nombre."','".$apellido."',".$idepartamento.",'".$idalumno."')"
			);


		if (mysqli_error($conexion)){

			$respuesta="2";

		}else {
				$respuesta="1";
		}

			}else{
				$respuesta="3";
			}

		}

	}else{

		//Si no hay un POST entonces retornamos al sitio orígen
	$respuesta="2";
	}
		echo $respuesta;
?>
