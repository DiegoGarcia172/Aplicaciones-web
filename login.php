<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="/procesar_login.php" method="get">
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
