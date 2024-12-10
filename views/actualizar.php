
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
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

$query = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', dni = '$dni' WHERE id = $id";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "la informacion a actualizado correctamente.";
    echo "<br><a href='listado.php'>Volver al listado</a>";
} else {
    echo "Error al actualizar el usuario.";
}
?>