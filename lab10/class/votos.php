<?php
require_once("modelo.php");

class votos extends modeloCredencialesDB{

public function __construct(){
    parent::__construct();
}

public function listar_votos(){

$instruccion = "CALL sp_listar_votos()";
$consulta = $this->_db->query($instruccion);
$resultado = $consulta->fetch_all(MYSQLI_ASSOC);

if($resultado){
    return $resultado;
}
}

public function actualiizar_votos($voto1, $voto2){

    $instruccion = "CALL sp_actualizar_votos('".$voto1."','".$voto2."')";
    $actualizar = $this->_db->query($instruccion);

    if($actualizar){
        return $actualizar;
    }
}
}
?>