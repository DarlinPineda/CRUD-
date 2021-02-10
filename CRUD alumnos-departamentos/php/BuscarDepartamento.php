<?php
	if(isset($_POST)){
		include("conexion.php");

		$iddepartamento = @$_POST["iddepartamento"];


		if (trim($iddepartamento)==""){

			$respuesta="2";
		}
		else{ //Hacer la insercion del alumno

			//Defino las variables para conectar


			$result= mysqli_query($conexion,
				"select idDepartamento, NombreDepartamento from Departamentos where idDepartamento='".$iddepartamento."'"
			);


		$row = mysqli_fetch_array($result);
		if($row!=null){

			$respuesta= $row['idDepartamento']."-".$row['NombreDepartamento'];
		}else{
			$respuesta="3";
		}


	}
}
		echo $respuesta;
?>
