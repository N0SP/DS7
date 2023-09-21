<?php

if (isset($_POST['numero'])) {
// atraer el numero del index
$numero = $_POST['numero'];

// Inicializar una matriz vacia y verificar si es un numero impar
if ($numero % 2 == 0) {
    echo "<p>Por favor, ingrese un número impar para el tamaño de la matriz.</p>";
    echo "<p>Volver al Formulario <a href='index.html'>Volver</a></p>";
} else {
$matriz = array();

for ($i = 0; $i < $numero; $i++) {
    $fila = array();
    for ($j = 0; $j < $numero; $j++) {
        $fila[] = 0;
    }
    $matriz[] = $fila;
}

// Inicializar una matriz con un valor en el centro
$centro = intval(($numero - 1) / 2);


$matriz[$centro][$centro] = mt_rand(1, 100); // Centro
$matriz[$centro - 1][$centro] = mt_rand(1, 100); // Arriba
$matriz[$centro + 1][$centro] = mt_rand(1, 100); // Abajo
$matriz[$centro][$centro - 1] = mt_rand(1, 100); // Izquierda
$matriz[$centro][$centro + 1] = mt_rand(1, 100); // Derecha


// Imprimir la matriz
echo "<h2>Matriz creada:</h2>";
echo "<table border='1'>";
for ($i = 0; $i < $numero; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $numero; $j++) {
        echo "<td>{$matriz[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";


//la suma de todos los valores en la matriz
$suma = 0;
for ($i = 0; $i < $numero; $i++) {
    for ($j = 0; $j < $numero; $j++) {
        $suma += $matriz[$i][$j];
    }
}

echo "\nSuma de todos los valores de la matriz: $suma\n";
echo "<p>Volver al Formulario <a href='index.html'>Volver</a></p>";
}
}

?>