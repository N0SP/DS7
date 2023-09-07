<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <h1>Manejo de Arreglos P1</h1>
<?php

$array = array();

for ($i=0; $i < 20; $i++) { 

    $valor = $i * 2;
    $array[$i] = $valor;

}
echo "La posicion del arreglo es $i y el elemento mayor almacenado es $valor <br>";



?>
</body>
</html>