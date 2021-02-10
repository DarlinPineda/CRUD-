<?php
	if(isset($_POST)){
		include("conexion.php");

		$idalumno = @$_POST["idalumno"];


		if (trim($idalumno)==""){

			$respuesta="2";
		}
		else{ //Hacer la insercion del alumno

			//Defino las variables para conectar


			$result= mysqli_query($conexion,
				"select nombrealumno, ApellidoAlumno, idDepartamento,identidadalumno from Alumnos where identidadalumno='".$idalumno."'"
			);


		$row = mysqli_fetch_array($result);
		if($row!=null){

			$respuesta= $row['nombrealumno']."-".$row['ApellidoAlumno']."-".$row['idDepartamento']."-".$row['identidadalumno'];
		}else{
			$respuesta="3";
		}


	}
}
		echo $respuesta;
?>
