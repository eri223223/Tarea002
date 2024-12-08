<?php
// Incluye el archivo de configuración de la aplicación
require_once "config.php";

$result = mysqli_query($conn, $cadcount);
$result2 = mysqli_query($conn, $cadgend);
$countries = mysqli_fetch_all($result, MYSQLI_ASSOC);
$genders = mysqli_fetch_all($result2, MYSQLI_ASSOC);

// Define la vista a usar
$view = "register.php";

// Incluye el archivo de diseño de la vista
require_once "views/layout.php";
