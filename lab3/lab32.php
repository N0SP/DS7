<?php
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
$media = ($precio1 + $precio2 + $precio3) / 3;
echo "<br/> Datos recibidos";
echo "<br/> Precio producto establecimiento 1:  ". $precio1. " dolares";
echo "<br/> Precio producto establecimiento 2:  ". $precio2. " dolares";
echo "<br/> Precio producto establecimiento 3:  ". $precio3. " dolares <br/>";
echo "<br/> El precio promedio es de:  ". $media. " dolares";