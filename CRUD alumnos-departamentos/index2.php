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
														<li><a href=" index.php">Registrar Alumnos</a></li>
														<li class="active"><a href=" index2.php">Registrar Departamento</a></li>
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
					<h3>Registrar Departamento</h3>

									<br/>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
			    				<label for="iddepto">Id del departamento</label>
								<input type="text" maxlength="13"   class="form-control" id="iddepartamento"
								placeholder="Ingrese el id " name="idDepartamento">
			    			</div>
						</div>
						<button type="button" onclick = "BuscarDepartamento()" class="btn btn-default" value="guardar">Buscar</button>
					</div>

					<br/>

					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
			    				<label for="nomal">Nombre del departamento</label>
								<input type="text" maxlength="60"   class="form-control" id="nombredepartamento"
								placeholder="Ingrese el nombre del departamento" name="nombredepartamento">
			    			</div>
						</div>
					</div>


					<br/>






					<div class="row">
						<div class="col-md-4" >
							<button id="ocultar" type="button" onclick = "RegistrarDepartamento()" class="btn btn-default" value="guardar">Guardar</button>
							<button type="button" onClick="cancelar()" class="btn btn-default" value="Cancelar">Cancelar</button>

						</div>
						<div id="mostrar" style='display:none' >
								<button type="button" onclick = "ModificarDepartamento()" class="btn btn-default" value="guardar">Modificar</button>
								<button type="button" onclick = "EliminarDepartamento()" class="btn btn-default" value="guardar">Eliminar</button>
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

			function RegistrarDepartamento(){
				var nombredepartamento = document.getElementById("nombredepartamento").value;
				$.post("php/Guardardepartamento.php",
				{'nombredepartamento': nombredepartamento
					},
					function(data){

						Validar(data);

					}
				);
				}

				function ModificarDepartamento(){
        var iddepartamento=document.getElementById("iddepartamento").value;
				var nombredepartamento = document.getElementById("nombredepartamento").value;


				$.post(
					"php/Modificardepartamento.php",
					{
            "iddepartamento":iddepartamento,
						"nombredepartamento": nombredepartamento
					},
					function(data){

						Validar(data);

					}
				);
				}

			function EliminarDepartamento(){
				var iddepartamento = document.getElementById("iddepartamento").value;
        var nombredepartamento = document.getElementById("nombredepartamento").value;


				$.post(
					"php/EliminarDepartamento.php",
					{
						'iddepartamento': iddepartamento

					},
					function(data){

						Validar(data);

					}
				);
				}




				function BuscarDepartamento(){
				var iddepartamento = document.getElementById("iddepartamento").value;


				$.post(
					"php/BuscarDepartamento.php",
					{
						'iddepartamento': iddepartamento,

					},
					function(data){

						alert(data);
						if(data=="2"){
							alert("No ingreso el id del departamento");
						}else if(data=="3"){
							alert("No se encontro el departamento con ese id");
						}else{
							document.getElementById('mostrar').style.display = 'block';
							document.getElementById('ocultar').style.display = 'none';
              $("#iddepartamento").prop("disabled", true);

							var datos= data.split("-");
							document.getElementById("nombredepartamento").value=datos[1];



						}

					}
				);
				}


				function Validar(error){
					//alert(error);
					if (error==1){
						alert("Departamento ingresado correctamente");
						cancelar();
					}else if (error==3){
						alert("Ya existe un departamento con ese nombre");
					}else if (error==9){
						alert("Departamento eliminado correctamente");
						cancelar();
					}else if (error==8){
						alert("Departamento modificado correctamente");
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
