<?php
$servername = "localhost";
$username = "adminr";
$password = "Admin123456789";
$database = "productos";
$port = 3306; 
$conexion = new mysqli($servername, $username, $password, $database, $port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
