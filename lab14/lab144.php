<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de noticias</title>
    <link rel="stylesheet" TYPE="text/css" href="css/estilo.css">
</head>
<body>
<h1>Consulta de noticias</h1>
<FORM NAME="FormFiltro" METHOD="post" ACTION="lab92.php">
<br/>
Filtrar por: <select NAME="campos">
<option VALUE="texto" SELECTED>Descripcion
<option VALUE="titulo">Titulo  
<option VALUE="categoria">Categoria
</select>
con el valor
<input TYPE="text" NAME="valor">
<input name="ConsultarFiltro" type="submit" value="Filtrar Datos"> 
<input name="ConsultarTodos" type="submit" value="Consultar Todos">
</FORM>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ('class/noticias.php');
$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();
if(array_key_exists('ConsultarTodos',$_POST)){
    $obj_noticia = new noticia();
    $noticias_new = $obj_noticia->consultar_noticias();
}
if(array_key_exists('ConsultarFiltro',$_POST)){
    $obj_noticia = new noticia();
    $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
} 

$nfilas=count($noticias);

if($nfilas > 0){
    print("<TABLE>\n");
    print("<TR>\n");
    print("<TH>Titulo</TH>\n");
    print("<TH>Texto</TH>\n");
    print("<TH>Categoria</TH>\n");
    print("<TH>Fecha</TH>\n");
    print("<TH>Imagen</TH>\n");
    print("</TR>\n");

foreach ($noticias as $resultado){
    print("<TR>\n");
    print("<TD>" . $resultado['titulo'] . "</TD>\n");
    print("<TD>" . $resultado['texto'] . "</TD>\n");
    print("<TD>" . $resultado['categoria'] . "</TD>\n");
    print("<TD>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</TD>\n");
    if ($resultado['imagen'] != null){
       print("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] . "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
    }else{
        print("<TD>&nbsp;</TD>\n");
    }
    print("</TR>\n");
    }
    print("</TABLE>\n");
}else{
print("No hay noticias disponibles");
}
?>
</body>
</html>