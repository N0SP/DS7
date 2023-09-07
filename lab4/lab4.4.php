<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>
<body>
    <h1>Manejo de Arreglos P2</h1>
    <br>
    <p>Llenar un arreglo solo con números pares. Si se introduce un número impar, solicitar al usuario introduzca un valor correcto hasta que así sea; luego continuar con el siguiente número.</p>
    <br>
    
    <?php
    session_start();
    
    if (!isset($_SESSION['numeros_pares'])) {
        $_SESSION['numeros_pares'] = array();
    }

    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];
        if ($numero % 2 == 0) {
            $_SESSION['numeros_pares'][] = $numero;
        } else {
            echo "El número $numero es impar, ingrese un número par.<br>";
        }
    }

    if (count($_SESSION['numeros_pares']) < 5) {
    ?>
    <form action="lab4.4.php">
        <a>Ingrese SOLO números pares:</a>
        <input type="number" name="numero" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    } else {
        echo "Ha alcanzado el límite de 5 números pares ingresados.<br>";
        echo "Los números pares ingresados son: " . implode(', ', $_SESSION['numeros_pares']);
        session_destroy();
    }
    ?>
</body>
</html>
