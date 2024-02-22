<!DOCTYPE html>
<html>
<head>
    <title>Inicio - Administrador</title>
    <a href="examen.php"><button>Examen</button></a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Bienvenido, Administrador: <?php session_start(); echo $_SESSION['nombre'];?></h2>
    <h2>Generador de Tablas de Multiplicar</h2>
    <form method="post" action="">
    <label for="numero">Número:</label>
    <input type="text" name="numero" pattern="\d+" required>
    <label for="rango">Rango:</label>
    <select name="rango">
        <option value="1-10">1 al 10</option>
        <option value="1-12">1 al 12</option>
    </select>
    <input type="submit" value="Generar Tabla">
</form>
<?php
include "tablas.php";
?>
</body>
</html>
