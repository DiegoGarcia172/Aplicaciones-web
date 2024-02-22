<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    include 'db_config.php';  
    $id_producto = $_GET["id"];
    $eliminacion = "DELETE FROM productos WHERE id = $id_producto";
    if ($conexion->query($eliminacion) === TRUE) {
        echo "Producto eliminado exitosamente.";
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }
    $conexion->close();
}
?>
