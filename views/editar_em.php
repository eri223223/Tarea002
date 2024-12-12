
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

// Obtener los datos del usuario
$id = $_GET['id'];
$query = "SELECT * FROM pinturaem WHERE id_em = $id";
$resultado = mysqli_query($conexion, $query);
$pintura = mysqli_fetch_assoc($resultado);
?>

<main id="editar_em ">
<h2>Editar Usuario</h2>
<form action="actualizar_em.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $pintura['id_em']; ?>">
    Estilo: <input type="text" name="estilo" value="<?php echo $pintura['Estilo']; ?>"><br>
    Tiempo: <input type="text" name="tiempo" value="<?php echo $pintura['Tiempo']; ?>"><br>
    Descripcion: <input type="text" name="desc" value="<?php echo $pintura['Descripcion']; ?>"><br>
    <input type="submit" value="Actualizar">
</form>
</main>