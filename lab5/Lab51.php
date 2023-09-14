<?php 

$limitearchivo = 1024 * 1024;
$extensiones = array("jpg", "jpeg", "gif", "png");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_FILES['nombre_archivo_cliente']['size'] > $limitearchivo) {
    echo "El tamaño del archivo es mayor que 1MB, debes reducirlo";
} else {
    $nombreArchivo = $_FILES['nombre_archivo_cliente']['name'];
    $extension = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

    if (!in_array($extension, $extensiones)) {
        echo "La extensión del archivo no está permitida";
    } else {
        if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
            $nombreDirectorio = "archivos/";
            $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
            $nombreCompleto = $nombreDirectorio . $nombrearchivo;

            if (is_file($nombreCompleto)) {
                $idUnico = time();
                $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                echo "Archivo repetido, se cambiará el nombre a $nombrearchivo<br><br>";
            }

            if (move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo)) {
                echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio<br>";
            } else {
                echo "No se ha podido subir el archivo <br>";
            }
        } else {
            echo "Error al subir el archivo <br>";
        }
    }
}

 
?>