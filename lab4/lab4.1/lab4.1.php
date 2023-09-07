<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>
<body>
<form action="lab4.1.php">
<a>Ingrese el valor de la venta</a>
    <input type="text" name="porcentaje">
    <input type="submit" value="Calcular">
</form>
<?php
$porcentaje = $_GET['porcentaje'];

if ($porcentaje >= 80){
    echo  "<img src='good.png' alt='good' width='100' height='100'>";
}elseif ($porcentaje >= 50 && $porcentaje <= 79){
    echo "<img src='regular.png' alt='regular' width='100' height='100'>";
} else {
    echo "<img src='bad.png' alt='bad' width='100' height='100'>";
}
?>
</body>
</html>