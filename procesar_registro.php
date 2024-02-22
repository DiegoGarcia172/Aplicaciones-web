<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include('conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
$tipo_usuario = $_POST['tipo_usuario'];

$sql = "INSERT INTO usuarios (nombre, correo, contrasena, tipo_usuario) VALUES ('$nombre', '$correo', '$hash_contrasena', '$tipo_usuario')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>