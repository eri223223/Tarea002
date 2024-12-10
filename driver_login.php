<?php 	


$Usuarioo = $_POST['usu'];
$Clavee = $_POST['clav'];

echo "el uwsuario ".$Usuarioo." tiene clave ".$Clavee."<br>";

$conexion = mysqli_connect("localhost","root","","tarea002");
$cadena = "SELECT * FROM usuarios WHERE usuario='$Usuarioo' AND clave='$Clavee'";
$Consulta = MySqli_query($conexion,$cadena);
$Lineas = Mysqli_num_rows( $Consulta );

if($Lineas==1){
	echo "el usuario existe";
	header("location:register.php");
}else{
	echo "el usuario NO existe";
	header("location:formu-login.php?error=Usuario%20inexistente");
}
?>







