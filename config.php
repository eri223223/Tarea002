<?php
// Definición de las constantes de configuración para la base de datos
define('DB_SERVER', 'localhost');   // Nombre del servidor de la base de datos
define('DB_USER', 'root');   // Nombre de usuario de la base de datos
define('DB_PASS', '');   // Contraseña de la base de datos
define('DB_NAME', '');   // Nombre de la base de datos
define('APP_URL', 'Tarea002-/../');   // URL de la aplicación

// Acá va la conexión a la base de datos
//$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Verificar la conexión
// if (!$conn) {
//     die("Conexión fallida: " . mysqli_connect_error());
// } else {
//     echo "Conexión exitosa a la base de datos.";
// }

// Cerrar la conexión al final del script si es necesario
// mysqli_close($conn);