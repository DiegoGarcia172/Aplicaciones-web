<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'db_config.php';
if (isset($_GET['nombre'], $_GET['precio'], $_GET['stock'])) {
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $stock = $_GET['stock'];
    $sql = "INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombre, $precio, $stock);
    if ($stmt->execute()) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conexion->close();
} else {
    echo "Faltan datos en la URL.";
}
?>
