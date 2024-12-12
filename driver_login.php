<?php 	


$Usuarioo = $_POST['username'];
$Clavee = $_POST['password'];

echo "el uwsuario ".$Usuarioo." tiene clave ".$Clavee."<br>";

$conexion = mysqli_connect("localhost","root","","tarea002");
$cadena = "SELECT * FROM usuarios WHERE usuario='$Usuarioo' AND clave='$Clavee'";
$Consulta = MySqli_query($conexion,$cadena);
$Lineas = Mysqli_num_rows( $Consulta );


if ($Lineas == 1) {
    header("location: listado_em.php");
} else {
    // Redirigir a login.php con un mensaje de error
    header("location: login_em.php?mensaje=No%20existe%20esta%20cuenta");
    exit(); // Asegúrate de detener el script después de la redirección
}
?>







