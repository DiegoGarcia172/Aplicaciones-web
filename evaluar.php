<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["operacion"])) {
        $operacion = $_POST["operacion"];
        $resultado = eval("return $operacion;");
        $_SESSION["operaciones"][] = "$operacion = $resultado";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <h2>Calculadora Simple</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="operacion">Operación:</label>
        <input type="text" name="operacion" id="operacion" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_SESSION["operaciones"])) {
        echo "<h3>Operaciones realizadas:</h3>";
        echo "<ul>";
        foreach ($_SESSION["operaciones"] as $op) {
            echo "<li>$op</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
