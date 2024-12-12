
<?php
// Configuración de la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "tarea002";

// Conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $clave, $base);

if (!$conexion) {
    die("Error al conectar con la base de datos.");
}

// Actualizar los datos del usuario
$id = $_POST['id'];
$est = $_POST['estilo'];
$time = $_POST['tiempo'];
$des = $_POST['desc'];

$query = " UPDATE `pinturaem` SET `Estilo`='$est',`Tiempo`='$time',`Descripcion`='$des' WHERE id_em = $id";


$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    header("location: edad_media.php");
} else {
    echo "Error al actualizar el usuario.";
}
?>