<?php
 if(isset($_POST)){
   include("conexion.php");

   $nombredepartamento = @$_POST["nombredepartamento"];

   if (trim($nombredepartamento)==""){

     $respuesta="2";
   }
   else{ //Hacer la insercion del alumno

     //Defino las variables para conectar
     $resp= mysqli_query($conexion,"SELECT count(*) as encontro from Departamentos where NombreDepartamento='$nombredepartamento'");
      $row1 = mysqli_fetch_array($resp);
      if($row1['encontro']=="0"){

     mysqli_query($conexion,
       "insert into Departamentos(NombreDepartamento)
         values('".$nombredepartamento."')"
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
