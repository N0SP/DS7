<?php       
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<h1>Manejo de sesiones</h1> 
<h2>Paso 1: se crea la variale de sesion y se almacena</h2>
<?php
if (!isset($_SESSION['var'])) {
    $var = "Ejemplo Sesiones";
    $_SESSION['var'] = $var;
    print("<p>Valor de la variable de sesión: $var</p>\n");
}
?>
<a href="lab122.php">Paso 2</a>
</body>
</html>