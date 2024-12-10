
<?php
// Configuración de la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "proyecto";

// Conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $clave, $base);

if (!$conexion) {
    die("Error al conectar con la base de datos.");
}

// Obtener los datos del usuario
$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conexion, $query);
$usuario = mysqli_fetch_assoc($resultado);
?>

<h2>Editar Usuario</h2>
<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    Estilo: <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>"><br>
    Tiempo: <input type="text" name="apellido" value="<?php echo $usuario['apellido']; ?>"><br>
    Descripcion: <input type="text" name="dni" value="<?php echo $usuario['dni']; ?>"><br>
    <input type="submit" value="Actualizar">
</form>