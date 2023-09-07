<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
   <h1>Resultado</h1>
    <?php
    $valor = $_GET['valor'];
    $factorial = 1;

    if($valor < 0){
        echo "El valor ingresado no es valido";
    }else {
    for ($i = 1; $i <= $valor; $i++){
        $factorial = $factorial * $i;
    }
    echo "El factorial de $valor es $factorial";
    }
?> 

<p>Volver al Formulario <a href="lab4.2.html">Volver</a></p>

</body>
</html> 