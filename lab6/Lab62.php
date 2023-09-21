<?php
include("class_lib.php");
//instanciamos un par de objetos cliente
$cliente1 = new cliente("Pepe", 1);
$cliente2 = new cliente("Roberto", 564);

//mostramos el numero de cada cliente creado
echo "<br>El cliente 1 tiene el numero: ".$cliente1->dame_numero();
echo "<br>El cliente 2 tiene el numero: ".$cliente2->dame_numero();

?>