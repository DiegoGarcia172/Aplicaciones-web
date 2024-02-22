<?php
$correo = $_GET['correo'];
$contrasena = $_GET['contrasena'];

include('conexion.php');
$sql = "SELECT id, nombre, tipo_usuario, contrasena FROM usuarios WHERE correo='$correo'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contrasena, $row['contrasena'])) {
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
      if ($row['tipo_usuario'] == 'admin') {
        header("Location: admin_home.php");
        } else {
            header("Location: user_home.php");
        }
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$conn->close();
?>