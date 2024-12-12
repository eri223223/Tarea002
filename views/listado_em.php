

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

<main id="listado_em">

<h2>Arte en pinturas de la Edad Media</h2>
<table border="2">
    <tr>
        <th>n°</th>
        <th>estilo</th>
        <th> tiempo</th>
        <th>descripcion</th>
    </tr>
    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $fila['id_em']; ?></td>
            <td><?php echo $fila['Estilo']; ?></td>
            <td><?php echo $fila['Tiempo']; ?></td>
            <td><?php echo $fila['Descripcion']; ?></td>
            <td>
                <a href="editar_em.php?id=<?php echo $fila['id_em']; ?>">Editar</a>
            </td>
        </tr>
    <?php
 } ?>
</table> <br>
<a href="edad_media.php"><button class="btn">volver</button></a>
<a href="añadir_em.php"><button class="btn">Añadir</button></a>
<a href="eliminar_em.php"><button class="btn">Eliminar</button></a>

</main>