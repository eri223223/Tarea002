<?php
$conexion = mysqli_connect("localhost", "root", "", "tarea002");

$query = "SELECT * FROM pinturaem";
$resultado = mysqli_query($conexion, $query);
?>
<main id="eliminar_em">
<table border="1">
    <tr>
        <th>ID</th>
        <th>Estilo</th>
        <th>Tiempo</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </tr>
    
        <?php while($fila = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $fila['id_em']; ?></td>
            <td><?php echo $fila['Estilo']; ?></td>
            <td><?php echo $fila['Tiempo']; ?></td>
            <td><?php echo $fila['Descripcion']; ?></td>
            <td>
                <!-- Enlace para eliminar fila -->
                <a href="eliminar_em.php?id_em=<?php echo $fila['id_em']; ?>" onclick="return confirm('¿Seguro que deseas eliminar esta fila?');">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table><br>
        <a href="listado_em.php"><button class="btn">Atras...</button></a>
    </main>