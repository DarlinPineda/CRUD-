
<?php
	include("php/conexion.php");

			$query = "SELECT idDepartamento, NombreDepartamento from departamentos";
			$result = mysqli_query($conexion, $query);

?>
<!DOCTYPE html>
<html>
	<head>
		<title> Registro de Alumnos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<script src='js/jquery.min.js'></script>
	</head>
	<body id="cuerpo">

		<div class="body">

			<header>
				<!-- Menu -->
				<div class="rows">
	                <div class="col-md-6">
										<nav class="navbar  navbar-fixed-top " role="navigation">
												<ul class="nav nav-pills center-block">
														<li class="active"><a href=" index.php">Registrar Alumnos</a></li>
														<li><a href=" index2.php">Registrar Departamento</a></li>
														<li ><a href="php/Reporte.php">Reporte</a></li>




	                        </ul>
	                    </nav>
	                </div>
	            </div>

	            <!-- Fin Menu -->


			</header>
			<br/><br/><br/><br/>

			<div id="formulario">
				<form class="container" >
					<h3>Registrar Alumno</h3>

									<br/>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
			    				<label for="idal">Identidad del Alumno</label>
								<input type="text" maxlength="13"   class="form-control" id="idalumno"
								placeholder="Ingrese la identidad " name="idalumno">
			    			</div>
						</div>
						<button type="button" onclick = "BuscarAlumno()" class="btn btn-default" value="guardar">Buscar</button>
					</div>

					<br/>

					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
			    				<label for="nomal">Nombre del Alumno</label>
								<input type="text" maxlength="60"   class="form-control" id="nombrealumno"
								placeholder="Ingrese el nombre del alumno" name="nombrealumno">
			    			</div>
						</div>
					</div>


					<br/>

					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
			    				<label for="apeal">Apellido  del Alumno</label>
								<input type="text" maxlength="60"   class="form-control" id="apellidoalumno"
								placeholder="Ingrese el apellido del alumno" name="apellidoalumno">
			    			</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">

								<label for="depart">Departamento</label>
								<div id="Departamento"  title="Elija un material">

								<select   id="iddepartamento"
								 name="iddepartamento" title="Tipo de Proveedor" class="  form-control form-group" data-live-search="true">
								 <?php
											while ($row = mysqli_fetch_array($result))
											{
											?>

										<option value="<?php echo $row['idDepartamento']?>"><?php echo $row ['NombreDepartamento'];?></option>
											<?php
											}
										?>
								 </select>
								</div>

								</div>
								</div>







					<div class="row">
						<div class="col-md-4" >
							<button id="ocultar" type="button" onclick = "RegistrarAlumno()" class="btn btn-default" value="guardar">Guardar</button>
							<button type="button" onClick="cancelar()" class="btn btn-default" value="Cancelar">Cancelar</button>

						</div>
						<div id="mostrar" style='display:none' >
								<button type="button" onclick = "ModificarAlumno()" class="btn btn-default" value="guardar">Modificar</button>
								<button type="button" onclick = "EliminarAlumno()" class="btn btn-default" value="guardar">Eliminar</button>
							</div >
					</div>
			    </form>
			</div>

		</div>
<br><br><br><br><br><br>
		<footer id="footer">
			<h1>TALLER BASICO DE PROGRAMACIÓN WEB</h1>
		</footer>




			<script type="text/javascript">



			//$(document).ready(init); // Funcion anonima

        	//function init(e){

           	//	 $("#usuario").keypress(SoloLetrasyEspacios);

       		//}

			function RegistrarAlumno(){
				var idalumno = document.getElementById("idalumno").value;
				var nombrealumno = document.getElementById("nombrealumno").value;
				var apellidoalumno = document.getElementById("apellidoalumno").value;
				var iddepartamento = document.getElementById("iddepartamento").value;
				//alert(idalumno);
				$.post("php/Guardaralumno.php",
				{'idalumno': idalumno,
				'nombrealumno': nombrealumno,
				 "apellidoalumno": apellidoalumno,
				 "idepartamento": iddepartamento
					},
					function(data){

						Validar(data);

					}
				);
				}

				function ModificarAlumno(){
				var idalumno = document.getElementById("idalumno").value;
				var nombrealumno = document.getElementById("nombrealumno").value;
				var apellidoalumno = document.getElementById("apellidoalumno").value;
				var iddepartamento = document.getElementById("iddepartamento").value;

				$.post(
					"php/Modificaralumno.php",
					{
						'idalumno': idalumno,
						'nombrealumno': nombrealumno,
						"apellidoalumno": apellidoalumno,
						"idepartamento": iddepartamento
					},
					function(data){

						Validar(data);

					}
				);
				}

			function EliminarAlumno(){
				var idalumno = document.getElementById("idalumno").value;


				$.post(
					"php/EliminarAlumno.php",
					{
						'idalumno': idalumno

					},
					function(data){

						Validar(data);

					}
				);
				}




				function BuscarAlumno(){
				var idalumno = document.getElementById("idalumno").value;


				$.post(
					"php/BuscarAlumno.php",
					{
						'idalumno': idalumno,

					},
					function(data){

						alert(data);
						if(data=="2"){
							alert("no ingreso la identidad del alumno");
						}else if(data=="3"){
							alert("no se encontro alumno con esa identidad");
						}else{
							document.getElementById('mostrar').style.display = 'block';
							document.getElementById('ocultar').style.display = 'none';
							$("#idalumno").prop("disabled", true);

							var datos= data.split("-");
							document.getElementById("nombrealumno").value=datos[0];
							document.getElementById("apellidoalumno").value=datos[1];
							document.getElementById("iddepartamento").value=datos[2];



						}

					}
				);
				}


				function Validar(error){
					//alert(error);
					if (error==1){
						alert("Ingresadodo correctamente");
						cancelar();
					}else if (error==3){
						alert("Ya existe un alumno con esta identidad");
					}else if (error==9){
						alert("Alumno eliminado correctamente");
						cancelar();
					}else if (error==8){
						alert("Alumno modificado correctamente");
						cancelar();
					}else{
						//alert(error);
						alert("Todos los campos deben de ser llenados");
					}
				}


			function cancelar(){
				javascript:location.reload();
			}


			</script>
	</body>
</html>
