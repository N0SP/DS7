<?php
include("class_lib.php");

//Ejemplo de uso de la clase padre

$soporte1 = new soporte("The Soccer Game", 22,3);

echo "<br>" . $soporte1->titulo . "</br>";
echo "<br>Precio: " . $soporte1->dame_precio_sin_itbm() . " dolares";
echo "<br>Precio ITBM incluido: " . $soporte1->dame_precio_con_itbm() . " dolares";

//ejemplo de uso de la clase hija 1

$mivideo = new video ("Los Otros", 22, 4.5, "115 minutos");
echo "<br><br>";
echo "<br>" . $mivideo->titulo . "</br>";
echo "<br>Precio: " . $mivideo->dame_precio_sin_itbm() . " dolares";
echo "<br>Precio ITBM incluido: " . $mivideo->dame_precio_con_itbm() . " dolares ";
echo "<br>" . $mivideo->imprime_caracteristicas();

//ejemplo de uso de la clase hija 2

$mijuego = new juego ("Pes 18", 21, 2.5, "Xbox 360",1,2);
$mijuego->imprime_caracteristicas();
$mijuego->imprime_jugadores_posibles();
echo "<p>";
$mijuego->imprime_jugadores_posibles();

?>