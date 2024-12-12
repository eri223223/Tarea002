<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "tarea002");

// Obtener el ID de la fila que se desea eliminar
$id_em = $_GET['id_em'];

// Verificar si se ha recibido el ID
if(isset($id_em)) {
    // Consulta para eliminar la fila con el ID recibido
    $query = "DELETE FROM pinturaem WHERE id_em = $id_em";
    $resultado = mysqli_query($conexion, $query);

    if($resultado) {
        echo "Fila eliminada correctamente.";
    } else {
        echo "Error al eliminar la fila.";
    }
} else {
    echo "ID no recibido.";
}

// Redirigir a la página principal (o cualquier otra que prefieras)
header("Location: listado_em.php");
?>