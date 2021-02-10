<?php

	//Establece que debe escuchar valores de sesión.
	include("conexion.php");

			 $query1="select COUNT(*) as total from Alumnos";
			 $total=mysqli_query($conexion,$query1);
			 $row1 = mysqli_fetch_array($total);
			$query2= "select Alumnos.Identidadalumno, Alumnos.NombreAlumno, Alumnos.ApellidoAlumno, Departamentos.NombreDepartamento
			from Alumnos INNER JOIN Departamentos on Alumnos.idDepartamento= Departamentos.idDepartamento";
			 $detalle =mysqli_query($conexion,$query2);



?>

<!DOCTYPE html>
<html>
	<head>

		<title> Registro de Alumnos</title>
		<meta charset="utf-8"></head>
		<script src='../../js/jquery.min.js'></script>
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
	    <link rel="stylesheet" href="../../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../../css/bootstrap-select.css">
	</head>
	<body>
		<div class="cuerpoRecibos" >
			<div id="reporte">
		<h1 >Alumnos Registrados</h1>

		<br>
		<h5>A la Fecha: <?php echo date("Y-m-d (H:i:s)")?></h5>
		</div>
		<br><br><br>
		<table class = 'table table-hover'>
			<tr>
  			<td><strong>Identidad</strong></td>
  			<td><strong>Nombres</strong></td>
  			<td><strong>Apellidos</strong></td>
			<td><strong>Departamentos</strong></td>
  		</tr>
		<?php 	while (	$row2 = mysqli_fetch_array($detalle))
			{
		 ?>
		 <tr>
		 <td><?php echo $row2['Identidadalumno'] ?></td>
		  <td><?php echo $row2['NombreAlumno'] ?></td>
			  <td> <?php echo $row2['ApellidoAlumno'] ?></td>
				 <td><?php echo $row2['NombreDepartamento'] ?></td>

			 </tr>
			 <?php
			 }
			 ?>
		</table>
		<br><br>
		<h3 id="reporte">Total de Alumnos Registrados:	<?php echo $row1['total']?></h3>

</div>



	</body>

</html>
