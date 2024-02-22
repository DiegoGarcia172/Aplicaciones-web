<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificar Respuestas</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    echo "<h2>Tabla de Multiplicar del $numero</h2>";
    echo "<form action='calificar_respuestas.php' method='post'>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        echo "<td>$numero x $i</td>";
        echo "<td><input type='number' name='respuestas[]' required></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type='hidden' name='numero' value='$numero'>";
    echo "<br><br>";
    echo "<input type='submit' value='Calificar'>";
    echo "</form>";
}
?>
</body>
</html>
