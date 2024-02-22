<?php
$servername = "localhost";
$username = "adminr";
$password = "Admin123456789";
$database = "usuarios";
$port = 3306; 

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>