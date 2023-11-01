<?php
require_once('modelo.php');

class Usuarios extends modeloCredencialesDB {
    public function __construct() {
        parent::__construct();
    }

    public function validar_usuario($usr, $pwd) {
        $instruccion = "CALL sp_validar_usuario('" . $usr . "','" . $pwd . "')";
        $consulta = $this->_db->query($instruccion);
    
        if ($consulta) {
            $resultado = $consulta->fetch_assoc();
    
            if ($resultado) {
                $consulta->close();
                $this->_db->close();
                return $resultado;
            }
        }
    
        // En caso de error o si no se encuentra un resultado válido
        $this->_db->close();
        return null;
    }
    
}
?>
