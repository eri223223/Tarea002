<?php 
// Definición de las constantes de configuración para la base de datos
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');   // Nombre de usuario de la base de datos
define('DB_PASS', '');   // Contraseña de la base de datos
define('DB_NAME', 'tarea002');
define('APP_URL', '/tarea002/');   // URL de la aplicación
session_start();

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Acá va la conexión a la base de datos
// Ejemplo de conexión (descomentar y completar según el sistema de base de datos usado):
 $conn = new mysqli('localhost', DB_USER, DB_PASS, 'tarea002');

 //Verificar la conexión
 if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
 }

 