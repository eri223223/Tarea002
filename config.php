<?php
// Definición de las constantes de configuración para la base de datos
define('DB_USER', '');   // Nombre de usuario de la base de datos
define('DB_PASS', '');   // Contraseña de la base de datos
define('APP_URL', 'Tarea002-/../');   // URL de la aplicación

// Acá va la conexión a la base de datos
// Ejemplo de conexión (descomentar y completar según el sistema de base de datos usado):
// $conn = new mysqli('localhost', DB_USER, DB_PASS, 'database_name');

// Verificar la conexión
// if ($conn->connect_error) {
//     die("Conexión fallida: " . $conn->connect_error);
// }