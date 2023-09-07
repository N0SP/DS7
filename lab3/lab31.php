<?php
$diametro = $_POST['diam'];
$altura = $_POST['altu'];
$radio = $diametro / 2;
$Pi = 3.141593;
$volumnen = $Pi * $radio * $radio * $altura;
echo "El volumen del cilindro es de ". $volumnen ." metros cubicos";
?>