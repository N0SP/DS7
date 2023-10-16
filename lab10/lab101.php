<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 10.1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
require_once("class/votos.php");

if(array_key_exists('enviar', $_POST)){
    print("<h1>Encuesta. Voto registrado</h1>");

    $obj_votos = new votos();
    $result_votos = $obj_votos->listar_votos();

    foreach($result_votos as $result_voto){
        $votos1 = $result_voto['votos1'];
        $votos2 = $result_voto['votos2'];
    }

    $voto = $_REQUEST['voto'];
    if($voto == "si")
        $votos1++;     
    else if ($voto == "no")
        $votos2++;

    $oj_votos = new votos();
    $result = $obj_votos->actualizar_votos($votos1, $votos2);

    if($result){
        print("<p>Su voto ha sido registrado. Gracias por participar</p>\n");
        print("<A href='lab102.php'>Ver resultados</A>\n");
    }
    else{
        print("<A HREF='lab101.php'>Error al actualizar su voto/A>\n");
    }
}else {
?>
<h1>Encuesta</h1>

<p>¿Cree ud. que el precio de la vivienda seguira subiendo al rimo actual?</p>

<from action="lab101.php" method="post">
    <input type="radio" name="voto" value="si">Si<br>
    <input type="radio" name="voto" value="no">No<br>
    <input type="submit" name="enviar" value="votar"> 
</from>
<a href="lab102.php">Ver resultados</a>
<?php
}
?>
</body>
</html>