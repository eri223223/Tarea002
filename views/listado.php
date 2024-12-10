

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

// Obtener los usuarios de la base de datos
$query = "SELECT `id_em`, `Estilo`, `Tiempo`, `Descripcion` FROM `pinturaem` WHERE 1";
$resultado = mysqli_query($conexion, $query);
?>

<h2>Listado de Usuarios</h2>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Acciones</th>
    </tr>
    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $fila['id_em']; ?></td>
            <td><?php echo $fila['Estilo']; ?></td>
            <td><?php echo $fila['Tiempo']; ?></td>
            <td><?php echo $fila['Descripcion']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $fila['id_em']; ?>">Editar</a>
            </td>
        </tr>
    <?php } ?>
</table>