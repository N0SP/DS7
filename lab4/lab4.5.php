<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5</title>
</head>
<body>
    <h1>Generador de Matriz Identidad</h1>
    <form action="lab4.5.php" method="post">
        <a>Ingrese el orden de la matriz:</a>
        <input type="number" name="valor" required>
        <input type="submit" value="Generar Matriz">
    </form>

    <?php
    if (isset($_POST['valor'])) {
        $valor = (int)$_POST['valor'];
        if ($valor % 2 == 0 && $valor > 0) {
            echo "<h2>Matriz Identidad de valor $valor:</h2>";
            echo "<table border='1'>";
            for ($i = 0; $i < $valor; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $valor; $j++) {
                    if ($i == $j) {
                        echo "<td>1</td>";
                    } else {
                        echo "<td>0</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "El orden de N debe ser un número par y mayor que cero.";
        }
    } else {
        echo "Por favor, ingrese un valor válido para N.";
    }
    ?>

</body>

</html>