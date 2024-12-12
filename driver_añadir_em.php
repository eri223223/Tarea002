<?php 

$estilo = $_POST['estilo'];
$time = $_POST['tiempo'];
$desc = $_POST['descripcion'];

// datos de la DB
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "tarea002";

// conexion a DB
$ResConec = mysqli_connect($servidor,$usuario,$clave,$base);

if($ResConec){
	echo "el acceso a la DB ha sido exitoso";
	echo "<br>";
   }else{
   	echo "el acceso a la DB ha fallado";
   	echo "<br>";
        }
// creacion de la cadena SQL
$cadena = "INSERT INTO `pinturaem`(`Estilo`, `Tiempo`, `Descripcion`) VALUES ('$estilo','$time','&desc')";

// operacion SQL INSERT
$ResConsIns = MySqli_query( $ResConec , $cadena );

if($ResConsIns){
	header("location:listado_em.php");
   }else{
   	echo "la insercion a la DB ha fallado";
   	echo "<br>";
        }
 ?>