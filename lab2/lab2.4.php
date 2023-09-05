<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.4</title>
</head>
<body>
<?php
//Creacion del array array("Clave" => "Valor")
$personas = array("juan" => "Panamá",
"jhon" => "USA",
"eica" => "finlandia",
"kusanagi" => "Japón");
//Recorrer todo el arreglo
foreach ($personas as $persona => $pais){
    print "$persona es de $pais<br>";
}

//Impresion especifica
echo "<br>" .$personas["juan"];
echo "<br>" .$personas["eica"];
?>
</body>
</html>