<?php
final class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";
    }
    //Aqui da igual si se declara el metodo como
    //final o no
    final public function moreTesting(){
        echo "ClaseBase::masTests() llamada\n";
    }
}
class ClaseHijo extends ClaseBase {

}

// Intento llamar al método moreTesting() de ClaseHijo
// Esto generará un error ya que el método moreTesting es final y no puede ser sobrescrito
$hijo->moreTesting();  // Genera un error
?>