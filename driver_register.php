<?php 

$Nusu = $_POST['username'];
$Email = $_POST['email'];
$Clave = $_POST['password'];

echo "el sr/a ".$Nusu." ".$Email." tiene ".$Clave." años";
echo "<br>";

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
$cadena = "INSERT INTO usuarios(usuario, email, clave) VALUES ('$Nusu','$Email','$Clave')";

// operacion SQL INSERT
$ResConsIns = MySqli_query( $ResConec , $cadena );

if($ResConsIns){
	echo "la insercion a la DB ha sido exitosa";
	header("location:edad_media.php");
   }else{
   	echo "la insercion a la DB ha fallado";
   	echo "<br>";
        }
 ?>