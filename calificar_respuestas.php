<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Evaluación</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $respuestasUsuario = $_POST["respuestas"];
    $respuestasCorrectas = [];
    for ($i = 1; $i <= 12; $i++) {
        $respuestasCorrectas[] = $numero * $i;
    }
    $aciertos = 0;
    echo "<h2>Resultados de la Evaluación</h2>";
    echo "<table border='1'>";
    for ($i = 0; $i < 12; $i++) {
        echo "<tr>";
        echo "<td>$numero x " . ($i + 1) . "</td>";
        echo "<td>Respuesta Usuario: {$respuestasUsuario[$i]}</td>";
        echo "<td>Respuesta Correcta: {$respuestasCorrectas[$i]}</td>";
        if ($respuestasUsuario[$i] == $respuestasCorrectas[$i]) {
            echo "<td style='color: green;'>¡Correcto!</td>";
            $aciertos++;
        } else {
            echo "<td style='color: red;'>Incorrecto</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<p>Puntuación: $aciertos / 12</p>";
    
}
?>
<a href="examen.php"><button>Examen</button></a>
</body>
</html>
