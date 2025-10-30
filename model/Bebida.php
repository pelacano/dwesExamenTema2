<?php
// Clase Bebida que hereda de Artículo
require_once 'Articulo.php';

class Bebida extends Articulo {
    public $tamano;

    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamano) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamano = $tamano;
    }
}
?>
